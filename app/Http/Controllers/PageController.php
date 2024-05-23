<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function WelcomeView(){
        return view('welcome');
    }
    public function Dashboard(){
        return view('dashboard');
    }
}
