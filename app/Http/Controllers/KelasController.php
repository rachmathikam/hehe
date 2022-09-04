<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;

class KelasController extends Controller
{
   
    public function index()
    {
        $data = Kelas::latest()->get();

        return view('pages.kelas.index',compacy('data'));
    }

   
    public function create()
    {
        return view('pages.kelas.create');
    }

    
    public function store(Request $request)
    {
        
    }

  
    public function show($id)
    {
        $data = Kelas::findOrFail($id)->with('siswa');

        return view('pages.kelas.show',compact($data));
    }

    public function edit($id)
    {
        
    }

   
    public function update(Request $request, $id)
    {
        
    }

    public function destroy($id)
    {
        
    }
}
