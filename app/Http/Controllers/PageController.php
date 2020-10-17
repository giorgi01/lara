<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('index', ['footer' => true, 'theme' => 'light']);
    }

    public function about(){
        return view('about', ['footer' => false, 'theme' => 'dark']);
    }

    public function login(){
        return view('login', ['footer' => false, 'theme' => 'light']);
    }
}
