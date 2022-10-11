<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Berita,Siswa,Guru, Kelas,KategoriBerita};

class FrontendController extends Controller
{
    public function index(Request $request){
         $siswa = Siswa::all()->count();
         $guru = Guru::all()->count();
         $kelas = Kelas::all()->count();
         $berita = berita::with('KategoriBerita')->first();
         $newberita = Berita::with('KategoriBerita')->orderBy('created_at','asc')->get()->take(3);
        //  dd($newberita);

        //  dd($berita);


        //  dd($siswa);
        return view('pages.halaman.index',compact('siswa','guru','kelas','berita','newberita'));
    }


}
