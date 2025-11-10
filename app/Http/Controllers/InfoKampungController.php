<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InfoKampungController extends Controller
{
    public function edit()
    {
		$info = $this->readInfo();
		return view('admin.info-kampung.edit', compact('info'));
    }

	public function update(Request $request)
	{
		$data = $request->validate([
			'alamat' => 'required|string|max:500',
			'telefon' => 'nullable|string|max:50',
			'email' => 'nullable|email|max:255',
			'map_embed' => 'nullable|string',
			'about' => 'nullable|string',
		]);

		$this->writeInfo($data);
		return redirect()->route('admin.info-kampung.edit')->with('success', 'Info kampung dikemas kini.');
	}

	private function readInfo(): array
	{
		if (!Storage::exists('info_kampung.json')) {
			return [];
		}
		$json = Storage::get('info_kampung.json');
		$data = json_decode($json, true);
		return is_array($data) ? $data : [];
	}

	private function writeInfo(array $info): void
	{
		Storage::put('info_kampung.json', json_encode($info, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
	}
}
