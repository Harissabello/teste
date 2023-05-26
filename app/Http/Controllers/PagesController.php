<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function home() {
        return view('pages.home');
    }

    public function propos() {
        return view('pages.apropos');
        
    }

    public function service() {
        return view('pages.services');
    }
}
