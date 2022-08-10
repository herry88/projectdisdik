<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\School;
use App\Models\Jurusan;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Validator;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $siswa = Siswa::all();
        return view('admin.datasiswa.index', [
            "siswa" => $siswa
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.datasiswa.create', [
            'schools' => School::all(),
            "jurusan" => Jurusan::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            "nisn" => "required|string",
            "namasiswa" => "required|string",
            "alamat" => "required|string",
            "jenis_kelamin" => "required",
            "ttl" => "required|string",
            "sekolah_id" => "required|numeric|min:1",
            "jurusan_id" => "required|numeric|min:1",
        ]);

        Siswa::create([
            "nisn" => $request->nisn,
            "namasiswa" => $request->namasiswa,
            "alamat" => $request->alamat,
            "jenis_kelamin" => $request->jenis_kelamin,
            "ttl" => $request->ttl,
            "sekolah_id" => $request->sekolah_id,
            "jurusan_id" => $request->jurusan_id,
        ]);
        return redirect('/admin/siswa');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show(Siswa $siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view("admin.datasiswa.edit", [
            "siswa" => Siswa::find($id),
            "schools" => School::all(),
            "jurusan" => Jurusan::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            "nisn" => "required|string",
            "namasiswa" => "required|string",
            "alamat" => "required|string",
            "jenis_kelamin" => "required",
            "ttl" => "required|string",
            "sekolah_id" => "required|numeric",
            "jurusan_id" => "required|numeric",
        ]);

        $siswa = Siswa::find($id);
        $siswa->nisn = $request->nisn;
        $siswa->namasiswa = $request->namasiswa;
        $siswa->alamat = $request->alamat;
        $siswa->jenis_kelamin = $request->jenis_kelamin;
        $siswa->ttl = $request->ttl;
        $siswa->sekolah_id = $request->sekolah_id;
        $siswa->jurusan_id = $request->jurusan_id;
        $siswa->update();

        return redirect("/admin/siswa");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Siswa::destroy($id);
        return redirect("/admin/siswa");
    }
}
