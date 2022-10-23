<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // la llamada por defecto
    public function __invoke(){
        //return view('welcome');
        return view('home');
    }

}
