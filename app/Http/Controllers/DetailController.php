<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\Siswa;


class DetailController extends Controller
{
   public function index(){
        $siswa = Siswa::all();
        $data = Kelas::with('siswa','kode')->get();
        // dd($datas->toArray());
        return view('pages.kelas.detail',compact('data','siswa'));

   }

}
