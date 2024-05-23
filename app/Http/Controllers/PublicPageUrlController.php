<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use App\Models\PublicPageUrls;
use App\Models\User;
use Illuminate\Http\Request;

class PublicPageUrlController extends Controller
{
    public function store(Request $request, $id){

        $request->validate([
            'public_name' => 'required|string|max:255|regex:/^[a-zA-Z0-9]+$/|unique:public_page_urls',
        ], [
            'public_name.required' => 'Public name is required.',
            'public_name.string' => 'Public name must be a string.',
            'public_name.max' => 'Public name should be a maximum of 255 characters.',
            'public_name.regex' => 'Public name should not contain any whitespace or symbols.',
            'public_name.unique' => 'The public name has already been taken.',
        ]);

        $PublicPageUrl = PublicPageUrls::create([
            'user_id' => $id,
            'public_name' => $request->public_name,
            'status' => "a",
        ]);

        // Return a response
        return back()->with('message', 'Page published successfully!');
    }


}
