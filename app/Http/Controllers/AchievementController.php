<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AchievementController extends Controller
{
    public function store(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'achievements_name' => 'required|string|max:255',
            'achievements_value' => 'required|integer',
        ]);

        // Create a new achievement
        $achievement = Achievement::create([
            'user_id' => $id,
            'achievements_name' => $request->achievements_name,
            'achievements_value' => $request->achievements_value,
        ]);

        // Return a response
        return back()->with('message', 'Achievement created successfully!');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'achievements_name' => 'required|string|max:255',
            'achievements_value' => 'required|integer',
        ]);

        $achievement = Achievement::find($id);

        if (!$achievement) {
            return back()->with('error', 'Achievement not found.');
        }

        // Update the achievement's attributes
        $achievement->achievements_name = $request->achievements_name;
        $achievement->achievements_value = $request->achievements_value;

        // Save the changes
        $achievement->save();

        // Return a response
        return Redirect::route('admin.achievements')->with('message', 'Achievement updated successfully!');
    }

    public function destroy($id)
    {
        // Find the achievement by its ID
        $achievement = Achievement::find($id);
        
        // If the achievement doesn't exist, return with an error message
        if (!$achievement) {
            return back()->with('error', 'Achievement not found.');
        }
    
        // Delete the achievement
        $achievement->delete();
    
        // Return a redirect to the admin.achievements route with a success message
        return redirect()->route('admin.achievements')->with('message', 'Achievement deleted successfully!');
    }
    
    public function Show()
    {
        $data = Achievement::all();
        // Return a response
        return $data;
    }
}
