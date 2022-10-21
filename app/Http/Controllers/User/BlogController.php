<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\admin\blogGallery;
use App\Models\user\blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = blog::where('status',1)->get();
        return view('user/blogs',compact('blogs'));
    }

    public function blog(blog $slug)
    {
        $images = blogGallery::where('category_id',$slug->id)->get();
        return view('user/blog', compact('images','slug'));
    }
}
