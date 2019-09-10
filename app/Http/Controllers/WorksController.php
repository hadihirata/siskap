<?php

namespace App\Http\Controllers;

use App\work;
use Illuminate\Http\Request;

class WorksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title="Aplikasi Rekap Pekerjaan - Daftar Pekerjaan";
        $work=work::all();
        return view('work.index',compact('title','work'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title="Aplikasi Rekap Pekerjaan - Daftar Pekerjaan (-add-)";       
        return view('work.create',compact('title','work'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //cara ci -sqlbuider
       /* $work = new work;
        $work->nama=$request->nama;
        $work->tgl=$request->tgl;
        $work->sumber=$request->sumber;
        $work->jenis_pekerjaan=$request->jenis_pekerjaan;
        $work->programer=$request->programer;
        $work->keterangan=$request->keterangan;
        $work->save();*/

        //cara laravel 1

        /*work::create([
            'nama'=>$request->nama,
            'tgl'=>$request->tgl,
            'sumber'=>$request->sumber,
            'jenis_pekerjaan'=>$request->jenis_pekerjaan,
            'programer'=>$request->programer,
            'keterangan'=>$request->keterangan
        ]);*/

        work::create($request->all());




        return redirect('/work')->with('status', 'Work insert!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\work  $work
     * @return \Illuminate\Http\Response
     */
    public function show(work $work)
    {
        $title="Aplikasi Rekap Pekerjaan - Daftar Pekerjaan (-show-)";       
        return view('work.show',compact('title','work'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\work  $work
     * @return \Illuminate\Http\Response
     */
    public function edit(work $work)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\work  $work
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, work $work)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\work  $work
     * @return \Illuminate\Http\Response
     */
    public function destroy(work $work)
    {
        //
    }
}
