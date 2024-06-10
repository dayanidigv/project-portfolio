<?php

namespace App\Http\Controllers;

use App\Models\BasicDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    private function pageDataToBeEmpty ($pageData) {
        if($pageData->isEmpty()) {$pageData = [];}
        return $pageData;
    }

    // Common method to get user data
    private function getUserData($sectionName, $title, $pageData = new \stdClass() )
    {
        $user = Auth::user();
        $userName = $user ? $user->name : 'Guest';
        $userId = $user ? $user->id : 'Guest';

        if ($sectionName == "Profile") {
            $pageData->BasicDetails =  BasicDetails::where('user_id', $userId)->first() ;
        }

        $message = $user->messages()->where('read',"0")->get();
        $message = $this->pageDataToBeEmpty($message);

        return [
            'title' => $title,
            'sectionName' => $sectionName,
            'userName' => $userName,
            'userId' => $userId,
            'pageData' => $pageData,
            'unReadMessages' => $message,
        ];
    }

    public function index () {
        $data = $this->getUserData('Profile', 'Home');
        return view('admin.profile', $data);
    }
    
    public function update(Request $request, $encodeId)
    {
        $decodeId = base64_decode($encodeId);
        $basicDetails = BasicDetails::findOrFail($decodeId);
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        if ($request->hasFile('image')) {
            $timestamp = now()->format('YmdHis');
            $originalFileName = pathinfo($request->file('image')->getClientOriginalName(), PATHINFO_FILENAME);
            $sanitizedFileName = preg_replace('/[^a-zA-Z0-9_-]/', '_', $originalFileName);
            $extension = $request->file('image')->getClientOriginalExtension();
            $imageName = $timestamp . '_' . $sanitizedFileName . '.' . $extension;
            $path = $request->file('image')->storeAs('profile_pic', $imageName, 'public');
            $basicDetails->profile_picture =  "/storage/".$path;
            $basicDetails->save();
        }
    
        return response()->json([
            'message' => 'OK',
            'data' => $basicDetails,
        ]);
    }
    

}
