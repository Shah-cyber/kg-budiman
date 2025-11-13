<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

// Models
use App\Models\Activity;
use App\ApiHelper;

class AktivitiController extends Controller
{
    public function __construct()
    {
        $this->apiHelper = new ApiHelper();
    }

    public function get_aktiviti(Request $request)
    {
        $data = Activity::all();
        return $this->apiHelper->resp([
            'aktiviti' => $data
        ]);
    }

    public function add_aktiviti(Request $request)
    {

        $receivedData = json_decode($request->getContent(), true);

        $requiredFields = ['title', 'description', 'date', 'images'];
        $fieldCheck = $this->apiHelper->fieldChecker($receivedData, $requiredFields);

        if ($fieldCheck) {
            return $this->apiHelper->resp([
                'error' => $fieldCheck['error'],
                'missing_fields' => $fieldCheck['missing_fields']
            ], 400);
        }
        
        $imagesPath = [];
        $images = $receivedData['images'];
        foreach ($images as $base64Image) {
            $imageData = base64_decode($base64Image);
            $imageName = uniqid().'.png';
            Storage::disk('public')->put('aktiviti/'.$imageName, $imageData);
            // You might want to store the image paths in the database as well
            $imagesPath[] = 'aktiviti/'.$imageName;
        }

        // dd(json_encode($imagesPath));

        $activity = new Activity();
        $activity->title = $receivedData['title'];
        $activity->description = $receivedData['description'];
        $activity->activity_date = $receivedData['date'];
        $activity->image_path = implode(',', $imagesPath);
        $activity->save();

        return $this->apiHelper->resp([
            'message' => 'Activity added successfully',
            'activity' => $activity
        ]);
    }
}
