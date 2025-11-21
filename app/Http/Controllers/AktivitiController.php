<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Storage;

class AktivitiController extends Controller
{
    public function index()
    {
		$activities = Activity::orderBy('activity_date', 'desc')->get();
		return view('admin.aktiviti.index', compact('activities'));
    }

    public function create()
    {
        return view('admin.aktiviti.create');
    }

    public function edit($id)
    {
		$activity = Activity::findOrFail($id);
		return view('admin.aktiviti.edit', compact('activity'));
    }

    public function store(Request $request)
    {
		$data = $request->validate([
			'title' => 'required|string|max:255',
			'description' => 'required|string',
			'activity_date' => 'required|date',
			'image' => 'nullable|image|max:4096',
		]);

		$imagePath = null;
		if ($request->hasFile('image')) {
			$imagePath = $request->file('image')->store('public/activities');
		}

		Activity::create([
			'title' => $data['title'],
			'description' => $data['description'],
			'activity_date' => $data['activity_date'],
			'image_path' => $imagePath,
		]);

		return redirect()->route('admin.aktiviti.index')->with('success', 'Aktiviti ditambah.');
    }

    public function update(Request $request, $id)
    {
		$activity = Activity::findOrFail($id);

		$data = $request->validate([
			'title' => 'required|string|max:255',
			'description' => 'required|string',
			'activity_date' => 'required|date',
			'image' => 'nullable|image|max:4096',
		]);

		if ($request->hasFile('image')) {
			if (!empty($activity->image_path)) {
				Storage::delete($activity->image_path);
			}
			$activity->image_path = $request->file('image')->store('public/activities');
		}

		$activity->title = $data['title'];
		$activity->description = $data['description'];
		$activity->activity_date = $data['activity_date'];
		$activity->save();

		return redirect()->route('admin.aktiviti.index')->with('success', 'Aktiviti dikemas kini.');
    }

	public function delete($id)
    {
		$activity = Activity::findOrFail($id);
		if (!empty($activity->image_path)) {
			Storage::delete($activity->image_path);
		}
		$activity->delete();
		return redirect()->route('admin.aktiviti.index')->with('success', 'Aktiviti dipadam.');
    }

    /**
     * Retrieve announcements for guest Aktiviti page with pagination.
     *
     * Logic:
     * - Display upcoming announcements (start_date >= today)
     * - Also display ongoing announcements where start_date has passed but end_date is null or still in future
     * - Hide announcements whose end_date has already been reached
     */
    public function guestAnnouncements(int $perPage = 4): LengthAwarePaginator
    {
        $today = now()->startOfDay();

        return Announcement::where(function ($query) use ($today) {
                $query->whereDate('start_date', '>=', $today) // upcoming
                      ->orWhere(function ($ongoing) use ($today) {
                          $ongoing->whereDate('start_date', '<', $today) // already started
                                  ->where(function ($endDateScope) use ($today) {
                                      // still active (no end date or end date not reached)
                                      $endDateScope->whereNull('end_date')
                                                   ->orWhereDate('end_date', '>=', $today);
                                  });
                      });
            })
            ->orderBy('start_date', 'asc')
            ->paginate($perPage);
    }
}
