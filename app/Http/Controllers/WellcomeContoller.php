<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WellcomeContoller extends Controller
{
    public function welcome(){
        return view("welcome");
    }
}
