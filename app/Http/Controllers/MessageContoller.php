<?php

namespace App\Http\Controllers;

use App\Models\Messages;
use App\Models\PublicPageUrls;
use App\Models\User;
use Illuminate\Http\Request;

class messageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,  $publicName)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        
        $pageData = PublicPageUrls::where('public_name', $publicName)->first();


        if (!$pageData) {
                return response()->json([
                    'success' => false,
                    'message' => 'Page not found'
                ], 404);
        }

        $user = User::find( $pageData->user_id);

        // Create a new message for the user
         $user->messages()->create([
            'user_id' =>  $pageData->user_id, 
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'subject' => $request->input('subject'),
            'message' => $request->input('message'),
            'read' => false,
            'received_at' => now(),
            'ip_address' => $request->ip(), 
            'user_agent' => $request->header('User-Agent'), 
        ]);

        // Redirect or return response as needed
        return redirect()->back()->with('success', 'Message sent successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
