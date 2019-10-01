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
        $title="ARP - Daftar Pekerjaan (-list-)";
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
        $title="ARP - Daftar Pekerjaan (-add-)";       
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
        
         $this->validate($request, [
            'nama'=>'required',           
            'sumber'=>'required',
            'jenis_pekerjaan'=>'required',
            'programer'=>'required',
            'keterangan'=>'required'
        ]);
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
        $title="ARP - Daftar Pekerjaan (-show-)";       
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
         $title="ARP - Daftar Pekerjaan (-edit-)";       
        return view('work.edit',compact('title','work'));
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
        $work::destroy($work->id);
        return redirect('/work')->with('status', 'Work Delete!');

    }
}
