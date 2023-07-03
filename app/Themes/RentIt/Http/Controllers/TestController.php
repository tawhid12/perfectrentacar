<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){
        \Mail::send('mail.reply_body', [], function ($message) {
            $message->from('no-reply@perfectrentacar.com', 'Perfectrentacar')
                    ->to('tawhid102@gmail.com')
                    ->subject('Test');
        });
        
    }
}
