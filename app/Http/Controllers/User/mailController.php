<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Mail\OriginalMail;
use App\Mail\SupportMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class mailController extends Controller
{
    public function index(Request $request)
    {
        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message
        ];
        Mail::to($details['email'])->send(new SupportMail($details['name']));
        Mail::to('support@ravisarajayamanna.com')->send(new OriginalMail($details));
        return redirect()->back();
        // return new OriginalMail($details);
    }
}
