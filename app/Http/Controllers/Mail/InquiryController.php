<?php

namespace App\Http\Controllers\Mail;

use App\Http\Controllers\Controller;
use App\Mail\InquiryMail;
use Illuminate\Http\Request;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class InquiryController extends Controller
{
    use SerializesModels;

    public function __invoke(Request $request)
    {
        Mail::to("purezenessence@gmail.com")->queue(
            new InquiryMail([
                "name" => $request->input("name"),
                "email" => $request->input("email"),
                "message" => $request->input("message"),
            ]),
        );
    }
}
