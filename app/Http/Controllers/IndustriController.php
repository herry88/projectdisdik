<?php

namespace App\Http\Controllers;

use App\Models\Industri;
use Illuminate\Http\Request;

class IndustriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $industri = Industri::all();
        return view('admin.dataindustri.index', [
            "industri" => $industri
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.dataindustri.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $industri = Industri::all();
        Industri::create($request->except(['_token']));
        return view('admin.dataindustri.index', ['industri' => $industri]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Industri  $tahunAkademik
     * @return \Illuminate\Http\Response
     */
    public function show(Industri $industri)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Industri  $tahunAkademik
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $industri = Industri::find($id);
        return view('admin.dataindustri.edit', ['industri' => $industri]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Industri  $tahunAkademik
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $industri  = Industri::find($id);
        $industri->nama = $request->nama;
        $industri->alamat = $request->alamat;
        $industri->no_telp = $request->no_telp;
        $industri->update();
        return view('admin.dataindustri.index', ['industri' => Industri::all()]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Industri  $tahunAkademik
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $industri = Industri::find($id);
        $industri->delete();
        return view('admin.dataindustri.index', ['industri' => Industri::all()]);
    }
}