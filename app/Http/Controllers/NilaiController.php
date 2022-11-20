<?php

namespace App\Http\Controllers;

use App\Models\Nilai;
use App\Models\Kelas;
use App\Models\KelasSiswa;
use App\Models\TahunPelajaran;



use Illuminate\Http\Request;

class NilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //dd($kelas);
        $keyword = $request->keyword;
        $kelas = Nilai::with('kelassiswa')->where('tahun_pelajaran_id', 'LIKE', '%'.$keyword.'%')->get();
        $tahun_pelajaran = TahunPelajaran::all();
        $nilai = Nilai::all();
        return view('pages.nilai.index',compact('nilai','kelas','tahun_pelajaran','keyword'));
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
     * @param  \App\Models\Nilai  $nilai
     * @return \Illuminate\Http\Response
     */
    public function show($nilai)
    {
        // $tahun = "äbc";

        // dd($tahun);

        $akademik = TahunPelajaran::findOne("tahun_akademik", $id);

        return response()->json("data", $akademik);

        // $Kelas = KelasSiswa::where('siswa_id',$request->id)->with('kelas','mapel');
        // dd($kelas);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Nilai  $nilai
     * @return \Illuminate\Http\Response
     */
    public function edit(Nilai $nilai)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Nilai  $nilai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nilai $nilai)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nilai  $nilai
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nilai $nilai)
    {
        //
    }
}
