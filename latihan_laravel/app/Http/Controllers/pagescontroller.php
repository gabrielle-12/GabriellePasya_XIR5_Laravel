<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagescontroller extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    public function register() {
        return view('pages.register');
    }

    public function homepage() {
        return view('pages.homepage');
    }

    public function template() {
        return view('template');
    }

    public function about() {
        return view('pages.about');
    }
}
