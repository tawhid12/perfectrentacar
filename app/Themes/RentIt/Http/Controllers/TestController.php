<?php

namespace Corp\Themes\RentIt\Http\Controllers;
use Corp\Themes\RentIt\RentItTheme;
use Illuminate\Http\Request;

class TestController extends RentItTheme
{
    public function index(){
        \Mail::send('mail.reply_body', [], function ($message) {
            $message->from('no-reply@perfectrentacar.com', 'Perfectrentacar')
                    ->to('tawhid102@gmail.com')
                    ->subject('Test');
        });
        
    }
}
