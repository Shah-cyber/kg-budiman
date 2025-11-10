<?php

namespace App\Http\Controllers;

use App\Models\CommitteeMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AJKController extends Controller
{
    public function index()
    {
		$members = CommitteeMember::orderBy('position')->orderBy('name')->paginate(15);
		return view('admin.ajk.index', compact('members'));
    }

    public function create()
    {
        return view('admin.ajk.create');
    }

    public function store(Request $request)
    {
		$data = $request->validate([
			'name' => 'required|string|max:255',
			'position' => 'required|string|max:100',
			'phone_number' => 'required|string|max:20',
			'photo' => 'nullable|image|max:2048',
		]);

		$photoPath = null;
		if ($request->hasFile('photo')) {
			$photoPath = $request->file('photo')->store('public/committee');
		}

		CommitteeMember::create([
			'name' => $data['name'],
			'position' => $data['position'],
			'phone_number' => $data['phone_number'],
			'photo_path' => $photoPath,
		]);

		return redirect()->route('admin.ajk.index')->with('success', 'Ahli jawatankuasa ditambah.');
    }

    public function edit($id)
    {
		$member = CommitteeMember::findOrFail($id);
		return view('admin.ajk.edit', compact('member'));
    }

    public function update(Request $request, $id)
    {
		$member = CommitteeMember::findOrFail($id);

		$data = $request->validate([
			'name' => 'required|string|max:255',
			'position' => 'required|string|max:100',
			'phone_number' => 'required|string|max:20',
			'photo' => 'nullable|image|max:2048',
		]);

		if ($request->hasFile('photo')) {
			// delete old
			if (!empty($member->photo_path)) {
				Storage::delete($member->photo_path);
			}
			$member->photo_path = $request->file('photo')->store('public/committee');
		}

		$member->name = $data['name'];
		$member->position = $data['position'];
		$member->phone_number = $data['phone_number'];
		$member->save();

		return redirect()->route('admin.ajk.index')->with('success', 'Ahli jawatankuasa dikemas kini.');
    }

    public function delete($id)
    {
		$member = CommitteeMember::findOrFail($id);
		if (!empty($member->photo_path)) {
			Storage::delete($member->photo_path);
		}
		$member->delete();
		return redirect()->route('admin.ajk.index')->with('success', 'Ahli jawatankuasa dipadam.');
    }
}
