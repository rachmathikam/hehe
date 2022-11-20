<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Mapel;
use App\Models\Aspek;


class MapelController extends Controller
{

    public function index()
    {
        // $data = DB::table('mapels')->latest()->get();

        $data = Mapel::with('aspek')->get();
        // dd($data);
        return view('pages.mapel.index',compact('data'));
    }


    public function create()
    {
        $data = Mapel::all();
        $aspek = Aspek::all();
        return view('pages.mapel.create',compact('data','aspek'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name'   => 'required|string|min:5|unique:mapels,name'
        ],[
            'name.required' => 'Mata Pelajaran wajib terisi.',
            'name.unique'   => 'Mata Pelajaran sudah ada.',
            'name.min'      => 'Mata Pelajaran minimal 5 karakter'
        ]);

        $validateData = $request->all();

        $data = Mapel::create($validateData);

        if($data){
            return redirect()->route('mapel.index')->with('success','Data berhasil ditambahkan');
        } else {
            return redirect()->route('mapel.index')->with('error','Data gagal ditambahkan');
        }
    }


    public function show($id)
    {

    }


    public function edit($id)
    {
        $data = Mapel::find($id);

        return view('pages.mapel.edit',compact('data'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'name'   => 'required|string|min:5|unique:mapels,name,'.$id
        ],[
            'name.required' => 'Mata Pelajaran wajib terisi.',
            'name.unique'   => 'Mata Pelajaran sudah ada.',
            'name.min'      => 'Mata Pelajaran minimal 5 karakter'
        ]);

        $validateData = $request->all();

        $data = Mapel::findOrFail($id)->update($validateData);

        if($data){
            return redirect()->route('mapel.index')->with('success','Data berhasil diupdate');
        } else {
            return redirect()->route('mapel.index')->with('error','Data gagal diupdate');
        }
        // dd($data);
    }

    public function destroy($id)
    {
        $data = Mapel::FindOrFail($id);
        
        if($data->guru()->count()){
            return response()->json([
                'error' => false,
                'message' => 'Mapel Terkait dengan Guru silahkan edit',
        ]);
        }
        $data_del = $data->delete($data);

        if ($data_del) {
            return response()->json([
                'success' => true,
                'message' => 'Data berhasil di hapus',
            ]);
        }

    }
}
