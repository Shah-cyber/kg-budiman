<?php

namespace App\Http\Controllers;

use App\Models\Facility;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FasilitiController extends Controller
{
    public function index()
    {
		$facilities = Facility::orderBy('created_at', 'desc')->paginate(15);
		return view('admin.fasiliti.index', compact('facilities'));
    }

    public function create()
    {
        return view('admin.fasiliti.create');
    }

    public function store(Request $request)
    {
		$data = $request->validate([
			'name' => 'required|string|max:255',
			'description' => 'required|string',
			'image' => 'nullable|image|max:4096',
			'is_available' => 'required|boolean',
		]);

		$imagePath = null;
		if ($request->hasFile('image')) {
			$imagePath = $request->file('image')->store('public/facilities');
		}

		Facility::create([
			'name' => $data['name'],
			'description' => $data['description'],
			'image_path' => $imagePath,
			'is_available' => $data['is_available'],
		]);

		return redirect()->route('admin.fasiliti.index')->with('success', 'Fasiliti ditambah.');
    }

    public function edit($id)
    {
		$facility = Facility::findOrFail($id);
		return view('admin.fasiliti.edit', compact('facility'));
    }

    public function update(Request $request, $id)
    {
		$facility = Facility::findOrFail($id);

		$data = $request->validate([
			'name' => 'required|string|max:255',
			'description' => 'required|string',
			'image' => 'nullable|image|max:4096',
			'is_available' => 'required|boolean',
		]);

		if ($request->hasFile('image')) {
			if (!empty($facility->image_path)) {
				Storage::delete($facility->image_path);
			}
			$facility->image_path = $request->file('image')->store('public/facilities');
		}

		$facility->name = $data['name'];
		$facility->description = $data['description'];
		$facility->is_available = $data['is_available'];
		$facility->save();

		return redirect()->route('admin.fasiliti.index')->with('success', 'Fasiliti dikemas kini.');
    }

    public function delete($id)
    {
		$facility = Facility::findOrFail($id);
		if (!empty($facility->image_path)) {
			Storage::delete($facility->image_path);
		}
		$facility->delete();
		return redirect()->route('admin.fasiliti.index')->with('success', 'Fasiliti dipadam.');
    }
}
