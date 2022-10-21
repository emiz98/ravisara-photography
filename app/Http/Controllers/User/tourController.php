<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\tourCategory;
use App\Models\user\tourGallery;

class tourController extends Controller
{
    public function tour(tourCategory $slug)
    {
        $images = tourGallery::where('category_id',$slug->id)->get();
        return view('user/tour',compact('images','slug'));
    }
}
