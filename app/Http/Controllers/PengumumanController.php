<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    public function index()
    {
		$announcements = Announcement::orderBy('start_date', 'desc')->paginate(15);
		return view('admin.pengumuman.index', compact('announcements'));
    }

    public function create()
    {
        return view('admin.pengumuman.create');
    }

    public function edit($id)
    {
		$announcement = Announcement::findOrFail($id);
		return view('admin.pengumuman.edit', compact('announcement'));
    }

    public function store(Request $request)
    {
		$data = $request->validate([
			'title' => 'required|string|max:255',
			'content' => 'required|string',
			'start_date' => 'required|date',
			'end_date' => 'nullable|date|after_or_equal:start_date',
			'created_by' => 'required|integer|exists:users,userID',
		]);

		Announcement::create($data);

		return redirect()->route('admin.pengunguman.index')->with('success', 'Pengumuman ditambah.');
    }

    public function update(Request $request, $id)
    {
		$announcement = Announcement::findOrFail($id);

		$data = $request->validate([
			'title' => 'required|string|max:255',
			'content' => 'required|string',
			'start_date' => 'required|date',
			'end_date' => 'nullable|date|after_or_equal:start_date',
			'created_by' => 'required|integer|exists:users,userID',
		]);

		$announcement->update($data);

		return redirect()->route('admin.pengunguman.index')->with('success', 'Pengumuman dikemas kini.');
    }

    public function destroy($id)
    {
		$announcement = Announcement::findOrFail($id);
		$announcement->delete();
		return redirect()->route('admin.pengunguman.index')->with('success', 'Pengumuman dipadam.');
    }
}
