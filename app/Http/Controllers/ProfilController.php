<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfilController extends Controller
{
    public function edit($id)
    {
		$user = User::where('userID', $id)->firstOrFail();
		return view('admin.profil.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
		$user = User::where('userID', $id)->firstOrFail();

		$data = $request->validate([
			'name' => 'required|string|max:255',
			'email' => 'required|email|unique:users,email,' . $user->userID . ',userID',
			'password' => 'nullable|string|min:8|confirmed',
		]);

		$user->name = $data['name'];
		$user->email = $data['email'];
		if (!empty($data['password'])) {
			$user->password = Hash::make($data['password']);
		}
		$user->save();

		return redirect()->route('admin.profil.edit', ['id' => $user->userID])->with('success', 'Profil dikemas kini.');
    }
}
