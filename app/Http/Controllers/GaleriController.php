<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Galeri;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galeris = Galeri::all();
        return view('pages.galeri.index',compact('galeris'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.galeri.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required',
        ]);
        $input = $request->all();

        if ($request->file('image')){
            $file = $request->file('image');
            $nama_file = time(). str_replace(" ", "", $file->getClientOriginalName());
            $file->move('image/galeri', $nama_file);
            $input['image'] = $nama_file;
        }

        $data = Galeri::create($input);
        //  Alert::success('Congrats', 'Galeri berhasil di tambahkan');
        // dd($data);
        if($data){
            return redirect()->route('galeri.index')->with('success', 'Galeri berhasil di tambahkan');
        }else{
            return redirect()->route('galeri.create')->with('error', 'Galeri Gagal di tambah');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function show(Galeri $galeri)
    {
        $data = Galeri::findOrFail($id);
        return view('pages.galeri.index',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function edit(Galeri $galeri)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Galeri $galeri)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Galeri::findOrFail($id);
        $data_del = $data->delete($data);

            //   Alert::warning('Warning Title', 'Apakah anda yakin menghapus data ini ?');
            // if($data){
                // return redirect()->route('galeri.index')->with('toast_success','data terhapus');
            // }else{
            //     return redirect()->route('galeri.index')->with('Failed', 'Galeri Gagal Di hapus');
            // }

        if ($data_del) {
            return response()->json([
                'success' => true,
                'message' => 'Data berhasil di hapus',
            ]);
        }

    }
}
