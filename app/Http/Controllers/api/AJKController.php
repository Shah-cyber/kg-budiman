<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\ApiHelper;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

// Models
use App\Models\CommitteeMember;

class AJKController extends Controller
{

    public function __construct()
    {
        $this->apiHelper = new ApiHelper();
    }

    public function get_jawatan_kuasa(Request $request)
    {
        $data = CommitteeMember::all();
        return $this->apiHelper->resp([
            'jawatan_kuasa' => $data
        ]);
    }
    

    public function add_jawatan_kuasa(Request $request)
    {
        if (!$request->isJson()) {
            return $this->apiHelper->resp(['error' => 'Invalid JSON'], 400);
        }

        $receivedData = json_decode($request->getContent(), true);

        $requiredFields = ['name', 'position', 'phone_number', 'image_base64'];
        $checker = $this->apiHelper->fieldChecker($receivedData, $requiredFields);

        if ($checker) {
            return $this->apiHelper->resp($checker, 400);
        }

        $imageBase64 = $receivedData['image_base64'];
        $imageName = uniqid() . '.png';

        $imageData = base64_decode($imageBase64);

        Storage::disk('public')->put('ajk/' . $imageName, $imageData);

        $member = CommitteeMember::create([
            'name' => $request->input('name'),
            'position' => $request->input('position'),
            'phone_number' => $request->input('phone_number'),
            'photo_path' => 'ajk/' . $imageName,
        ]);

        return $this->apiHelper->resp([
            'message' => 'Committee member added successfully',
            'member' => $member
        ]);
    }
}
