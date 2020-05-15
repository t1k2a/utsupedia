<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendContact;

class Contact extends Controller
{
    public function notification()
    {
        $name = 'ララベル太郎';
        $text = 'これからもよろしくお願いいたします。';
        $to = 'test@gmail.com';
        Mail::to($to)->send(new SendContact($name, $text));

        return view('contact.result', ['text' => $text]);
    }
}
