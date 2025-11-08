<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AktivitiController extends Controller
{
    public function index()
    {
        return view('admin.aktiviti.index');
    }

    public function create()
    {
        return view('admin.aktiviti.create');
    }

    public function edit($id)
    {
        return view('admin.aktiviti.edit', compact('id'));
    }

    public function store(Request $request)
    {
        // Logic to store new activity
    }

    public function update(Request $request, $id)
    {
        // Logic to update existing activity
    }

    public function destroy($id)
    {
        // Logic to delete activity
    }
}
