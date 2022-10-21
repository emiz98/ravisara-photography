<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('user/home');
    }

    public function about()
    {
        return view('user/about');
    }

    public function contact()
    {
        return view('user/contact');
    }

    public function maintenance()
    {
        return view('user/maintenance');
    }

    public function notFound()
    {
        return view('user/404');
    }
}
