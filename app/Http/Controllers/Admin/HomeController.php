<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\admin\galleryCategory;
use App\Models\admin\mainGallery;
use App\Models\admin\tourCategory;
use App\Models\user\blog;
use App\Models\user\printCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class HomeController extends Controller
{
    public function index()
    {
        $blogs = blog::all()->count();
        $mainGalleryImages = mainGallery::all()->count();
        $tours = tourCategory::all()->count();
        $prints = printCategory::all()->count();

        $galleryCategories = galleryCategory::all();
        return view('admin/home',compact('blogs','mainGalleryImages','tours','prints','galleryCategories'));
    }
}
