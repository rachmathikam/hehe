<?php

namespace App\Http\Controllers;

use App\Models\KelasMapel;
use App\Models\Kelas;
use App\Models\Mapel;
use Illuminate\Http\Request;
use DB;

class KelasMapelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Kelas::all();

        return view('pages.kelas_mapel.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
     * @param  \App\Models\KelasMapel  $kelasMapel
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $data = KelasMapel::where('mapel_id',$id)->with('kelas','mapel')->get();
        // dd($data->toArray());
        // dd($data->toArray());
        // $data = Kelas::where('kelas_id',$id)->with('kelas','mapel')->get();
        // dd($data);
        $mapel = Mapel::all();
        return view('pages.kelas_mapel.show',compact('data','mapel'));

        // dd($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KelasMapel  $kelasMapel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KelasMapel  $kelasMapel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KelasMapel $kelasMapel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KelasMapel  $kelasMapel
     * @return \Illuminate\Http\Response
     */
    public function destroy(KelasMapel $kelasMapel)
    {
        //
    }
}
