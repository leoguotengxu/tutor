<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    public function findatutor()
    {
        return view('static_pages/findatutor');
    }
    public function message()
    {
        return view('static_pages/message');
    }
    public function becomeatutor()
    {
        return view('static_pages/becomeatutor');
    }
    public function login()
    {
        return view('static_pages/login');
    }
    public function signup()
    {
        return view('static_pages/signup');
    }
}

