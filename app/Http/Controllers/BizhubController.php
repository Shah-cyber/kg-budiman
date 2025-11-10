<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BizhubController extends Controller
{
    public function index()
    {
		$vendors = Vendor::orderBy('created_at', 'desc')->paginate(15);
		return view('admin.bizhub.index', compact('vendors'));
    }

    public function create()
    {
        return view('admin.bizhub.create');
    }

    public function store(Request $request)
    {
		$data = $request->validate([
			'name' => 'required|string|max:255',
			'phone_number' => 'required|string|max:20',
			'service' => 'required|string',
			'image' => 'nullable|image|max:4096',
			'status' => 'required|in:Pending,Approved',
		]);

		$imagePath = null;
		if ($request->hasFile('image')) {
			$imagePath = $request->file('image')->store('public/vendors');
		}

		Vendor::create([
			'name' => $data['name'],
			'phone_number' => $data['phone_number'],
			'service' => $data['service'],
			'image_path' => $imagePath,
			'status' => $data['status'],
		]);

		return redirect()->route('admin.bizhub.index')->with('success', 'Vendor ditambah.');
    }

    public function edit($id)
    {
		$vendor = Vendor::findOrFail($id);
		return view('admin.bizhub.edit', compact('vendor'));
    }

    public function update(Request $request, $id)
    {
		$vendor = Vendor::findOrFail($id);
		$data = $request->validate([
			'name' => 'required|string|max:255',
			'phone_number' => 'required|string|max:20',
			'service' => 'required|string',
			'image' => 'nullable|image|max:4096',
			'status' => 'required|in:Pending,Approved',
		]);

		if ($request->hasFile('image')) {
			if (!empty($vendor->image_path)) {
				Storage::delete($vendor->image_path);
			}
			$vendor->image_path = $request->file('image')->store('public/vendors');
		}

		$vendor->name = $data['name'];
		$vendor->phone_number = $data['phone_number'];
		$vendor->service = $data['service'];
		$vendor->status = $data['status'];
		$vendor->save();

		return redirect()->route('admin.bizhub.index')->with('success', 'Vendor dikemas kini.');
    }

    public function destroy($id)
    {
		$vendor = Vendor::findOrFail($id);
		if (!empty($vendor->image_path)) {
			Storage::delete($vendor->image_path);
		}
		$vendor->delete();
		return redirect()->route('admin.bizhub.index')->with('success', 'Vendor dipadam.');
    }
}
