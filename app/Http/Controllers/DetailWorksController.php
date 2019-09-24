<?php

namespace App\Http\Controllers;

use App\DetailWord;
use App\Work;
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
        $title="Aplikasi Rekap Pekerjaan - Daftar Detail Pekerjaan (-list-)";
        $work=work::all();
        return view('DetailWork.index',compact('title','work'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $title="Aplikasi Rekap Pekerjaan - Daftar detail Pekerjaan (-add detail-)";
        $work=work::find($id);       
        return view('DetailWork.create',compact('title','work'));
        //return $detailshow;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        echo "string";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DetailWord  $detailWord
     * @return \Illuminate\Http\Response
     */
    public function show(DetailWord $detailWord)
    {
        return $detailWord;
    }

    public function showto($id)
    {
        //$work = work::find($id);
        
        $title="Aplikasi Rekap Pekerjaan - Daftar Detail Pekerjaan (-detail list-)";
        $detailshow=work::find($id);
        return view('DetailWork.detail',compact('title','detailshow'));
        return $detailshow->nama;
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
