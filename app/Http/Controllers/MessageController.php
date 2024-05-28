<?php

namespace App\Http\Controllers;

use App\Models\Messages;
use App\Models\PublicPageUrls;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{

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
    public function makeAsRead($messageID)
    {
        $user = Auth::user();
        if ($user) {
            $message = $user->messages()->where('id', $messageID)->first();
            if ($message) {
                $message->read = 1;
                $message->save();
                return redirect()->route('admin.messages.inbox')->with('message', 'Message has been successfully marked as read.');
            }
            return redirect()->back()->with('error', 'Message not found.');
        }
        return redirect()->back()->with('error', 'User not authenticated.');
    }


}
