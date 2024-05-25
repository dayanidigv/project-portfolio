<?php

namespace App\Http\Controllers;

use App\Models\BasicDetails;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class BasicDetailsController extends Controller
{
    public function store(Request $request, $id){
        
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:basic_details,email',
            'phone_no' => 'required|string|min:10|regex:/^[0-9\+-]+$/',
            'short_bio' => 'required|string|max:1000',
            'dob' => 'required|date',
            'gender' => 'required|in:Male,Female,Other', 
            'address' => 'required|string|max:255',
            'cta' => 'required|string|max:255',
            'profile_picture' => 'nullable|string|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Create a new basic details
        BasicDetails::create([
            'user_id' => $id,
            'name' => $request->name,
            'email' => $request->email,
            'phone_no' => $request->phone_no ? $request->phone_no : "",
            'short_bio' => $request->short_bio,
            'dob' => $request->dob ? $request->dob : null,
            'gender' => $request->gender,
            'address' => $request->address,
            'cta' => $request->cta,
            'profile_picture' => $request->profile_picture ? $request->profile_picture : ""
        ]);

        // Return a response
        return back()->with('message', 'Basic Details created successfully!');

    }
    public function update(Request $request, $id)
    {
        $basicDetail = BasicDetails::where('user_id', $id)->first();
        
        // Check if record exists
        if (!$basicDetail) {
            return back()->with('error', 'Basic details not found');
        }


        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => [
                'required',
                'string',
                'email',
                Rule::unique('basic_details')->where(function ($query) use ($request, $basicDetail) {
                    return $query->where('email', strtolower($request->email)) // Convert to lowercase
                        ->where('id', '!=', $basicDetail->id);
                }),
            ],
            'phone_no' => 'required|string|min:10|regex:/^[0-9\+-]+$/',
            'short_bio' => 'required|string|max:1000',
            'dob' => 'required||date',
            'gender' => 'required|in:Male,Female,Other',
            'address' => 'required|string|max:255',
            'cta' => 'required|string|max:255',
            'profile_picture' => 'nullable|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        
        
        $phoneNo = $request->has('phone_no') ? $request->phone_no : null;
        $dob = $request->has('dob') ? $request->dob : null;
        $profilePicture = $request->has('profile_picture') ? $request->profile_picture : "";

        // Update the basic details
        $basicDetail->update([
            'user_id' => $id,
            'name' => $data['name'],
            'email' => $data['email'],
            'phone_no' => $phoneNo,
            'short_bio' => $data['short_bio'],
            'dob' => $dob,
            'gender' => $data['gender'],
            'address' => $data['address'],
            'cta' => $data['cta'],
            'profile_picture' => $profilePicture,
        ]);

        // Return a response
        return back()->with('message', 'Basic details updated successfully!');
    }

}
