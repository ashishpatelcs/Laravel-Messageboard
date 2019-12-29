<?php

namespace App\Http\Controllers;

use App\Message;

class HomeController extends Controller
{
    public function index()
    {
        $messages = Message::all();

        return view('home', [
            'messages' => $messages
        ]);
    }
}
