<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class life extends Controller
{
    public function home(){
        return view('content.home');
    }
}
