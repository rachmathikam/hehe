<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;
use App\Models\Siswa;
use App\Models\Kelas;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $guru = Guru::count();
        $siswa = Siswa::count();
        $kelas = Kelas::count();

        // $kelas = Kelas::all();


        return view('home',compact('guru','siswa', 'kelas'));
    }
}
