<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\Siswa;
use App\Models\Kode;



class KelasController extends Controller
{

    public function index()
    {
        // $siswa = Siswa::count();
       $data = Kelas::all();
        // $data = Kelas::all();
        // dd($datas);
        return view('pages.kelas.index',compact('data'));
    }


    public function create()
    {
        $data = Kelas::with('kode')->get();
        $kodes = Kode::all();
        // $data =  Kelas::all();
        return view('pages.kelas.create',compact('data','kodes'));
    }


    public function store(Request $request)
    {

    }


    public function show($id)
    {
        $data = Siswa::where('kelas_id', $id)->get();

        return view('pages.kelas.show',compact('data'));
    }

    public function edit($id)
    {

    }


    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {
        $data = Kelas::FindOrFail($id);

        if($data->siswa()->count() > 0){
            return response()->json([
                'success' => false,
                'message' => 'Kelas Terkait dengan siswa silahkan edit',
            ]);
        }else{
            $data_del = $data->delete($data);

            if ($data_del) {
                return response()->json([
                    'success' =>  true,
                    'message' => 'Data Berhasil di Hapus',
                ]);
            }
        }
   }
}
