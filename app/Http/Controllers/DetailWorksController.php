<?php

namespace App\Http\Controllers;

use App\DetailWord;
use Illuminate\Http\Request;

class DetailWorksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title="Aplikasi Rekap Pekerjaan";
        return view('DetailWork.index',compact('title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DetailWord  $detailWord
     * @return \Illuminate\Http\Response
     */
    public function show(DetailWord $detailWord)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DetailWord  $detailWord
     * @return \Illuminate\Http\Response
     */
    public function edit(DetailWord $detailWord)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DetailWord  $detailWord
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DetailWord $detailWord)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DetailWord  $detailWord
     * @return \Illuminate\Http\Response
     */
    public function destroy(DetailWord $detailWord)
    {
        //
    }
}
