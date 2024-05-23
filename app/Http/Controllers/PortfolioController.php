<?php

namespace App\Http\Controllers;

use App\Models\BasicDetails;
use App\Models\PublicPageUrls;
use App\Models\User;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index($publicName)
    {
        // Find the public page by its public_name
        $pageData = PublicPageUrls::where('public_name', $publicName)->first();

        // Check if the public page exists
        if (!$pageData) {
            return response()->json(['error' => 'Invalid public name'], 404);
        }

        // Retrieve the user data related to the public page
        // $user = BasicDetails::findOrFail($pageData->user_id);

        $user = BasicDetails::where('user_id', $pageData->user_id)->first();

        // dd($user);
        // Pass the user data to the view
        return view('template.portfolio-1.index', ['user' => $user]);
    }

}
