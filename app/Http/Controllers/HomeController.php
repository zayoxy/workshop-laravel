<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Create controller: php artisan make:controller HomeController
class HomeController extends Controller
{
    public function index()
    {
        //return "Hello world!";
        return view('home', ['title' => 'Library', 'message' => 'Hello world!']);
    }
}
