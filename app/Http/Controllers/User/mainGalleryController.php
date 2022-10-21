<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\admin\galleryCategory;
use App\Models\admin\mainGallery;
use Illuminate\Http\Request;

class mainGalleryController extends Controller
{
    public function index(galleryCategory $slug)
    {
        $images = mainGallery::where('category_id',$slug->id)->get();
        return view('user/gallery',compact('images','slug'));
    }
}
