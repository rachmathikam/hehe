<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\KategoriBerita;

use Illuminate\Http\Request;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $berita = Berita::All();
        // dd($berita);
       return view('pages.berita.index',compact('berita'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = KategoriBerita::all();
        // dd($kategori);
        return view('pages.berita.create',compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'kategori_berita_id' => 'required',
            'title'=> 'required',
            'description'=> 'required',
            'image'=> 'required|image|mimes:jpg,png,jpeg'
        ]);

        $input = $request->all();

        if ($request->file('image')) {
            $file = $request->file('image');
            $nama_file = time() . str_replace(" ", "", $file->getClientOriginalName());
            $file->move('image/berita', $nama_file);
            $input['image'] = $nama_file;
        }
        $berita = Berita::create($input);
        // dd($berita);

             if($berita){
                return redirect()->route('berita.index')->with( 'success', 'Data Berhasil di tambah' );
             }else{
                return redirect()->route('berita.create')->with( 'Failed', 'Data Gagal di tambah' );
             }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function show(Berita $berita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function edit(Berita $berita,$id)
    {
        $katberita = KategoriBerita::all();
        $berita = Berita::findOrFail($id);
        return view('pages.berita.edit', compact('katberita', 'berita'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Berita $berita, $id)
    {
        // dd($request->all());
        $request->validate([
            'kategori_berita_id' => 'required',
            'title' => 'nullable',
            'description'=>'nullable',

        ]);

        $input = $request->all();

        if ($request->file('image')) {
            $file = $request->file('image');
            $nama_file = time() . str_replace(" ", "", $file->getClientOriginalName());
            $file->move('image/berita', $nama_file);
            $input['image'] = $nama_file;
        }else{
            unset($input['image']);
        }

        $berita = Berita::find($id);
        $berita->update($input);
        // dd($berita);
        if($berita){
            return redirect()->route('berita.index')->with( 'success', 'Berita berhasil di Perbaharui       ');
        }else{
            return redirect()->route('berita.edit')->with( 'Failed', 'Berita Gagal di edit');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $berita = Berita::find($id);
        // $berita->delete();
        // return redirect('berita');


        $data = Berita::findOrFail($id);
        $data_del = $data->delete($data);

        if ($data_del) {
            return response()->json([
                'success' => true,
                'message' => 'Data berhasil di hapus',
            ]);
        }

    }

}
