<?php

namespace App\Http\Controllers\Mail;

use App\Http\Controllers\Controller;
use App\Mail\InquiryMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class InquiryController extends Controller
{
    public function __invoke(Request $request)
    {
        //BUG: The request data is not accessible on the mail page
        // dd($request->all());

        Mail::to("purezenessence@gmail.com")->send(new InquiryMail($request->all()));

        return "Email sent!";
    }
}
