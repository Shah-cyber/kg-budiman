<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AksesAdminController extends Controller
{
    public function index()
    {
		$users = User::orderBy('created_at', 'desc')->paginate(15);
		return view('admin.akses-admin.index', compact('users'));
    }

    public function create()
    {
        return view('admin.akses-admin.create');
    }

    public function edit($id)
    {
		$user = User::where('userID', $id)->firstOrFail();
		return view('admin.akses-admin.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
		$user = User::where('userID', $id)->firstOrFail();

		$data = $request->validate([
			'name' => 'required|string|max:255',
			'email' => 'required|email|unique:users,email,' . $user->userID . ',userID',
			'password' => 'nullable|string|min:8',
			'role' => 'required|in:Admin,Editor',
		]);

		$user->name = $data['name'];
		$user->email = $data['email'];
		$user->role = $data['role'];
		if (!empty($data['password'])) {
			$user->password = Hash::make($data['password']);
		}
		$user->save();

		return redirect()->route('admin.akses-admin.index')->with('success', 'Pengguna dikemas kini.');
    }

    public function destroy($id)
    {
		$user = User::where('userID', $id)->firstOrFail();
		$user->delete();
		return redirect()->route('admin.akses-admin.index')->with('success', 'Pengguna dipadam.');
    }

	public function store(Request $request)
	{
		$data = $request->validate([
			'name' => 'required|string|max:255',
			'email' => 'required|email|unique:users,email',
			'password' => 'required|string|min:8',
			'role' => 'required|in:Admin,Editor',
		]);

		User::create([
			'name' => $data['name'],
			'email' => $data['email'],
			'password' => Hash::make($data['password']),
			'role' => $data['role'],
		]);

		return redirect()->route('admin.akses-admin.index')->with('success', 'Pengguna ditambah.');
	}
}
