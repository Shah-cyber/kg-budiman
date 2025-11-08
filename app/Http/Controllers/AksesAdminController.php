<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AksesAdminController extends Controller
{
    public function index()
    {
        return view('admin.akses-admin.index');
    }

    public function create()
    {
        return view('admin.akses-admin.create');
    }

    public function edit($id)
    {
        return view('admin.akses-admin.edit', compact('id'));
    }

    public function update(Request $request, $id)
    {
        // Update logic here
    }

    public function destroy($id)
    {
        // Delete logic here
    }
}
