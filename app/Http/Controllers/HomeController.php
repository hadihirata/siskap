<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        
        $title = 'Aplikasi Rekap Pekerjaan';
    	return view('index', compact('title'));
    }

    public function about()
    {
        
        return view('about');
    }
}
