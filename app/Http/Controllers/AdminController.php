<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use App\Models\BasicDetails;
use App\Models\PublicPageUrls;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use stdClass;

class AdminController extends Controller
{

    private function pageDataToBeEmpty ($pageData) {
        if($pageData->isEmpty()) {$pageData = [];}
        return $pageData;
    }

    // Common method to get user data
    private function getUserData($sectionName, $title)
    {
        $user = Auth::user();
        $userName = $user ? $user->name : 'Guest';
        $userId = $user ? $user->id : 'Guest';

        if ($sectionName == "Dashboard") {
            $pageData = new stdClass(); 
            $pageData->BasicDetails = $userId ? BasicDetails::where('user_id', $userId)->first() : null;
            $pageData->publishPage = $userId ? PublicPageUrls::where('user_id', $userId)->first() : null;
        }
        else if($sectionName == "Achievements"){
            $pageData = $userId ? Achievement::where('user_id', $userId)->get() : []; 
            $pageData = $this->pageDataToBeEmpty($pageData);
        }else if($sectionName == "Basic Details"){
            $pageData = $userId ? BasicDetails::where('user_id', $userId)->first() : []; 
        }else if($sectionName == "Public Page Url"){
            $pageData = $userId ? PublicPageUrls::where('user_id', $userId)->get() : []; 
            $pageData = $this->pageDataToBeEmpty($pageData);
        } else if($sectionName == "Archived Messages"){
            $pageData = $user->messages()->where('read',"1")->get(); 
            $pageData = $this->pageDataToBeEmpty($pageData);
        }else{
            $pageData = []; 
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

     public function index()
    {
        $data = $this->getUserData('Dashboard', 'Index');
        return view('admin.index', $data);
    }

    public function public_page_url()
    {
        $data = $this->getUserData('Public Page Url', 'Index');
        return view('admin.public_page_url', $data);
    }

    public function basicDetails()
    {
        $data = $this->getUserData('Basic Details', 'Home');
        return view('admin.basic-details', $data);
    }

    public function achievements()
    {
        
        $data = $this->getUserData('Achievements', 'About');
        
        return view('admin.achievements', $data);
    }

    public function publications()
    {
        $data = $this->getUserData('Publications', 'About');
        return view('admin.publications', $data);
    }

    public function awards()
    {
        $data = $this->getUserData('Awards', 'About');
        return view('admin.awards', $data);
    }

    public function testimonial()
    {
        $data = $this->getUserData('Testimonial', 'About');
        return view('admin.testimonial', $data);
    }

    public function inboxMessages()
    {
        $data = $this->getUserData('Inbox Messages', 'Messages');
        return view('admin.inbox-messages', $data);
    }

    public function archivedMessages()
    {
        $data = $this->getUserData('Archived Messages', 'Messages');
        return view('admin.archived-messages', $data);
    }

    public function faqs()
    {
        $data = $this->getUserData('FAQs', 'Index');
        return view('admin.faqs', $data);
    }
}
