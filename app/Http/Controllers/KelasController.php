<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\Siswa;
use App\Models\KelasSiswa;




class KelasController extends Controller
{

    public function index(Request $request)
    {
        // $siswa = Siswa::count();
           $data = Kelas::all();
            // dd($data);

        return view('pages.kelas.index',compact('data'));
    }


    public function create()
    {

        $kodes = kelas::all();
        // $data =  Kelas::all();
        return view('pages.kelas.create',compact('kodes'));
    }


    public function store(Request $request)
    {
            //  dd($request->all());
            $request->validate([
                'nama_kelas' => 'required',
                'kode_kelas' => 'required'
            ]);
                $input = $request->all();
                $check = Kelas::where('nama_kelas',$input['nama_kelas'])->where('kode_kelas',$input['kode_kelas'])->count();
                if($check > 0){
                    return redirect()->route('kelas.create')->with('error','Data tahun pelajaran '.$input['nama_kelas'].'/'.$input['kode_kelas'].' sudah ada');
                }

                $data = Kelas::create($input);
                return redirect()->route('kelas.index')->with('success', 'Kelas berhasil di tambahkan');
    }


    public function show($id)
    {

    }

    public function edit($id)
    {
        $data = Kelas::findOrFail($id);
            return view('pages.kelas.edit', compact('data'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_kelas' => 'required',
            'kode_kelas' => 'required'
        ]);
            $input = $request->all();
            $check = Kelas::where('nama_kelas',$input['nama_kelas'])->where('kode_kelas',$input['kode_kelas'])->count();
            if($check > 0){
                return redirect()->route('kelas.create')->with('error','Data tahun pelajaran '.$input['nama_kelas'].'/'.$input['kode_kelas'].' sudah ada');
            }
            $data = Kelas::findOrFail($id);
            $data->update($input);
            return redirect()->route('kelas.index')->with('success', 'Kelas berhasil di tambahkan');

    }

    public function destroy($id)
    {
        $data = Kelas::FindOrFail($id)->delete();
        // dd($data->siswa()->count());

        if($data){
            return response()->json([
                'error' => true,
                'message' => 'Data Berhasil di Hapus',
            ]);
        }else{
            // dd($data);
            $data_del = $data->delete($data);
            if ($data_del) {
                return response()->json([
                    'success' =>  true,
                ]);
            }
        }
   }
}
