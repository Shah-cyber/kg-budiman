<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WaktuBerurusanController extends Controller
{
    public function index()
    {
		$hours = $this->readHours();
		return view('admin.waktu-berurusan.index', compact('hours'));
    }

    public function create()
    {
        return view('admin.waktu-berurusan.create');
    }

    public function store(Request $request)
    {
		$data = $request->validate([
			'hours' => 'required|array',
			'hours.*.day' => 'required|string',
			'hours.*.time' => 'required|string',
		]);

		$this->writeHours($data['hours']);
		return redirect()->route('admin.waktu-berurusan.index')->with('success', 'Waktu berurusan disimpan.');
    }

    public function edit($id)
    {
		$hours = $this->readHours();
		return view('admin.waktu-berurusan.edit', compact('hours'));
    }

    public function update(Request $request, $id)
    {
		$data = $request->validate([
			'hours' => 'required|array',
			'hours.*.day' => 'required|string',
			'hours.*.time' => 'required|string',
		]);
		$this->writeHours($data['hours']);
		return redirect()->route('admin.waktu-berurusan.index')->with('success', 'Waktu berurusan dikemas kini.');
    }

    public function delete($id)
    {
		Storage::delete('business_hours.json');
		return redirect()->route('admin.waktu-berurusan.index')->with('success', 'Waktu berurusan dipadam.');
    }

	private function readHours(): array
	{
		if (!Storage::exists('business_hours.json')) {
			return [];
		}
		$json = Storage::get('business_hours.json');
		$data = json_decode($json, true);
		return is_array($data) ? $data : [];
	}

	private function writeHours(array $hours): void
	{
		Storage::put('business_hours.json', json_encode($hours, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
	}
}
