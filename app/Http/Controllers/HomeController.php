<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('home');
        $title="Aplikasi Rekap Pekerjaan - Daftar Pekerjaan";        
        return view('index',compact('title'));
    }

    public function about()
    {
        //return view('home');
        $title="Aplikasi Rekap Pekerjaan - Tentang";        
        return view('about',compact('title'));
    }
}
