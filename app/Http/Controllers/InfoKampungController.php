<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoKampungController extends Controller
{
    public function edit()
    {
        return view('admin.info-kampung.edit');
    }

    public function update(Request $request) {}
}
