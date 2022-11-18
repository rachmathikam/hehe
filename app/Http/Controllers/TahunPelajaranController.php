<?php

namespace App\Http\Controllers;

use App\Models\TahunPelajaran;
use Illuminate\Http\Request;

class TahunPelajaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tahun_pelajaran = TahunPelajaran::all();

        return view('pages.thpelajaran.index', compact('tahun_pelajaran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tahun_pelajarans = TahunPelajaran::all();
        // dd($tahun_pelajarans);
        return view('pages.thpelajaran.create',compact('tahun_pelajarans'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,)
    {
        $request->validate([
            'tahun_akademik'    => 'required',
        ]);

        // dd($request);
        $data = $request->all();
        $check = TahunPelajaran::where('tahun_akademik',$data['tahun_akademik'])->count();
        if($check > 0){
            return redirect()->route('thpelajaran.create')->with('error','Data tahun pelajaran '.$data['tahun_akademik'].' sudah ada');
        }
        $data = TahunPelajaran::create($data);
        // dd($data);

        if($data){
            return redirect()->route('thpelajaran.index')->with('success','Data berhasil di tambahkan');
        }else{
            return redirect()->route('thpelajaran.create')->with('error','Data gagal di tambahkan');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TahunPelajaran  $tahunPelajaran
     * @return \Illuminate\Http\Response
     */
    public function show(TahunPelajaran $tahunPelajaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TahunPelajaran  $tahunPelajaran
     * @return \Illuminate\Http\Response
     */
    public function edit(TahunPelajaran $tahunPelajaran, $id)
    {
        $tahun_pelajarans = TahunPelajaran::findOrFail($id);
        // dd($tahun_pelajarans->toArray());
        return view('pages.thpelajaran.edit',compact('tahun_pelajarans'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TahunPelajaran  $tahunPelajaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TahunPelajaran $tahunPelajaran,$id)
    {
        $request->validate([
            'tahun_akademik' => 'required',

        ]);
        $datas = $request->all();
        $check = TahunPelajaran::where('tahun_akademik',$datas['tahun_akademik'])->count();
        if($check > 0){
            return redirect()->route('thpelajaran.create')->with('error','Data tahun pelajaran '.$datas['tahun_akademik'].' sudah ada');
        }
        $data = TahunPelajaran::findOrFail($id);
         $data->update($datas);

         if($data){
            return redirect()->route('thpelajaran.index')->with('success','Data berhasil di update');
         }else{
            return redirect()->route('thpelajaran.edit')->with('success','Data gagal di update');
         }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TahunPelajaran  $tahunPelajaran
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = TahunPelajaran::find($id);
        $hapus = $data->delete();

        if($hapus){
            return response()->json([
                'success' => true,
                'message' => 'Data Berhasil di Hapus',
            ]);
        }
    }
}
