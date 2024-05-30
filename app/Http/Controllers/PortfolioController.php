<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use App\Models\BasicDetails;
use App\Models\PublicPageUrls;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PortfolioController extends Controller
{
    private function pageDataToBeEmpty ($pageData) {
        if($pageData->isEmpty()) {$pageData = [];}
        return $pageData;
    }

    public function index($publicName)
    {

        $pageData = PublicPageUrls::where('public_name', $publicName)->first();

        if (!$pageData) {
            return response()->json(['error' => 'Invalid public name 🚫'], 404);
        }
        $user = BasicDetails::where('user_id', $pageData->user_id)->first();

        if ($user == null) {
            $user = BasicDetails::findOrFail($pageData->user_id);
            $link = route('admin.basic-details');
            $user->message = "Please fill in your basic details first 😊 <a href='$link'>click here</a>";
            return view('template.portfolio-1.message', ['user' => $user]);
        }

        
        $user->primaryColor = "#ff0000";

        $user->publicName = $publicName;
        $user->currentPage = "/";

        $User = User::find($pageData->user_id);
        $user->skills = $User->skills()->get()->isEmpty() ? null : $User->skills()->get();

        return view('template.portfolio-1.index', ['user' => $user]);
    }

    public function SubPage(Request $request ,$publicName,$currentPage)
    {

        $pageData = PublicPageUrls::where('public_name', $publicName)->first();


        if (!$pageData) {
            return redirect()->route('login')->with('error',"Invalid public name");
        }


        $user = BasicDetails::where('user_id', $pageData->user_id)->first();


        if ($user == null) {
            $user = BasicDetails::findOrFail($pageData->user_id);
            $link = route('admin.basic-details');
            $user->message = "Please fill in your basic details first 😊 <a href='$link'>click here</a>";
            return view('template.portfolio-1.message', ['user' => $user]);
        }

        $user->primaryColor = "#ff0000";

        $user->publicName = $publicName;
        $user->currentPage = $currentPage;

        if($currentPage == "about"){
            $achievements = Achievement::where('user_id', $pageData->user_id)->get();
            $user->achievements = $this->pageDataToBeEmpty($achievements);
        }
        
        if (view()->exists('template.portfolio-1.' . $currentPage)) {
            return view('template.portfolio-1.' . $currentPage, ['user' => $user]);
        } else {
            abort(404);
        }

    }

}
