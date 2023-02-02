<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Home page
    public function welcome(){
        return view('welcome');    
    }
}
