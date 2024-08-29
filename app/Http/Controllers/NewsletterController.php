<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\New;
use App\Mail\NewInfo;

class NewsletterController extends Controller
{
    public function store(Request $request){
       
        $request->validate([
           'email' => 'required'
        ]);

        $existingEmail = Newsletter::where('email', $request->email)->first();

        if (!$existingEmail) {
            $news = Newsletter::create([
                'email' => $request->email
            ]);

            Mail::to($request->email)
            ->send(new NewInfo($request->except('_token')));
        }

        return response()->json([
            'new' => isset($news) ? $news : $existingEmail
         ]);

    }
}
