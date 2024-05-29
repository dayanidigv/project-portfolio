<?php

namespace App\Http\Controllers;

use App\Models\Icons;
use Illuminate\Http\Request;

class IconsController extends Controller
{
    public function icons()
    {
        
      $icons = Icons::all();
      $iconsArray = $icons->toArray();
      return response()->json($iconsArray);
    }
    
    public function searchIcons($searchTerm)
    {
      $searchTerm = strip_tags($searchTerm);
      $icons = Icons::where('title', 'like', "%{$searchTerm}%")
                   ->orWhere('slug', 'like', "%{$searchTerm}%")
                   ->get();
      $iconsArray = $icons->toArray();
      return response()->json($iconsArray);
    }
}
