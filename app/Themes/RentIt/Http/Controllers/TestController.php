<?php

namespace Corp\Themes\RentIt\Http\Controllers;
use Corp\Themes\RentIt\RentItTheme;
use Illuminate\Http\Request;

class TestController extends RentItTheme
{
    public function index(Request $request){

        \Mail::send('mail.reply_body_admin', ['msg' => $request->message,'to' => $request->email], function ($message) use ($request){
            $message->from('no-reply@perfectrentacar.com', 'Perfectrentacar')
                    ->to('tawhid102@gmail.com')
                    ->subject($request->subject);
        });
        \Mail::send('mail.reply_body_user', [], function ($message) use ($request){
            $message->from('no-reply@perfectrentacar.com', 'Perfectrentacar')
                    ->to($request->email)
                    ->subject($request->subject);
        });
        
    }
}
