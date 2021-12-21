<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class languagecontroller extends Controller
{
    public function english(){
        session(['lang'=>'en']);
        return back();
    }

    public function arabic(){
        session(['lang'=>'ar']);
        return back();
    }
}
