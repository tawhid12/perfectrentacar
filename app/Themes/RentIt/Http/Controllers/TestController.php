<?php

namespace Corp\Themes\RentIt\Http\Controllers;
use Corp\Themes\RentIt\RentItTheme;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TestController extends RentItTheme
{
    public function index(Request $request){

        \Mail::send('mail.reply_body_admin', ['msg' => $request->message,'to' => $request->email], function ($message) use ($request){
            $message->from('no-reply@perfectrentacar.com', 'Perfectrentacar')
                    ->to('perfectlinerac@yahoo.com')
                    ->subject($request->subject);
        });
        \Mail::send('mail.reply_body_user', [], function ($message) use ($request){
            $message->from('no-reply@perfectrentacar.com', 'Perfectrentacar')
                    ->to($request->email)
                    ->subject($request->subject);
        });
        // Set success message
        Session::flash('success', 'We Have Received Your Mail.');

        // Redirect back or to a specific route
        return redirect()->back();
        
    }
}
