<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Announcement;
use App\ApiHelper as API;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function get_announcements(Request $request)
    {
        $data = Announcement::all();
        return API::resp([
            'announcements' => $data
        ]);
    }

    public function get_specific_announcement($id)
    {
        $announcement = Announcement::find($id);
        if (!$announcement) {
            return API::resp([
                'error' => 'Announcement not found'
            ], 404);
        }
        return API::resp([
            'announcement' => $announcement
        ]);
    }

    public function add_announcement(Request $request)
    {
        $receivedData = json_decode($request->getContent(), true);

        $requiredFields = ['title', 'content', 'start_date', 'end_date', 'image_base64', 'adminID'];
        $fieldCheck = API::fieldChecker($receivedData, $requiredFields);

        if ($fieldCheck) {
            return API::resp([
                'error' => $fieldCheck['error'],
                'missing_fields' => $fieldCheck['missing_fields']
            ], 400);
        }

        $base64 = $receivedData['image_base64'];
        $imageData = base64_decode($base64);
        
        $imageName = uniqid().'.png';

        Storage::disk('public')->put('announcements/'.$imageName, $imageData);

        $announcement = new Announcement();
        $announcement->title = $receivedData['title'];
        $announcement->content = $receivedData['content'];
        $announcement->start_date = $receivedData['start_date'];
        $announcement->end_date = $receivedData['end_date'];
        $announcement->image_path = 'announcements/'.$imageName;
        $announcement->created_by = $receivedData['adminID'];
        $announcement->save();

        return API::resp([
            'message' => 'Announcement added successfully',
            'announcement' => $announcement
        ], 201);
    }

    public function update_announcement(Request $request, $id)
    {
        $announcement = Announcement::find($id);
        if (!$announcement) {
            return API::resp([
                'error' => 'Announcement not found'
            ], 404);
        }

        $receivedData = json_decode($request->getContent(), true);

        // Update fields if provided
        if (isset($receivedData['title'])) {
            $announcement->title = $receivedData['title'];
        }
        if (isset($receivedData['content'])) {
            $announcement->content = $receivedData['content'];
        }
        if (isset($receivedData['start_date'])) {
            $announcement->start_date = $receivedData['start_date'];
        }
        if (isset($receivedData['end_date'])) {
            $announcement->end_date = $receivedData['end_date'];
        }
        if (isset($receivedData['image_base64'])) {

            if ($announcement->image_path && Storage::disk('public')->exists($announcement->image_path)) {
                Storage::disk('public')->delete($announcement->image_path);
            }

            $base64 = $receivedData['image_base64'];
            $imageData = base64_decode($base64);
            
            $imageName = uniqid().'.png';

            Storage::disk('public')->put('announcements/'.$imageName, $imageData);
            $announcement->image_path = 'announcements/'.$imageName;
        }

        $announcement->save();

        return API::resp([
            'message' => 'Announcement updated successfully',
            'announcement' => $announcement
        ]);
    }

    public function delete_announcement($id)
    {
        $announcement = Announcement::find($id);
        if (!$announcement) {
            return API::resp([
                'error' => 'Announcement not found'
            ], 404);
        }

        $announcement->delete();

        return API::resp([
            'message' => 'Announcement deleted successfully'
        ]);
    }
}