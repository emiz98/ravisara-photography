<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\user\printCategory;
use App\Models\user\printGallery;
use Illuminate\Http\Request;

class printController extends Controller
{
    public function index()
    {
        $prints = printCategory::where('status',1)->get();
        return view('user/prints',compact('prints'));
    }

    public function print(printCategory $slug)
    {
        $images = printGallery::where('category_id',$slug->id)->get();
        return view('user/print', compact('images','slug'));
    }
}
