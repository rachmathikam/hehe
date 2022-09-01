<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;
use Auth;


class GuruController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Guru::all();
        return view('pages.guru.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Guru::all();
        return view('pages.guru.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nip'  => 'required',
            'name' => 'required',
            'email' => 'required|string|email|max:255|unique:gurus',
            'password' => 'required|min:5',
            'tempat_lahir' => 'nullable',
            'tanggal_lahir' => 'nullable',
            'jenis_kelamin' => 'required',
            'alamat' => 'nullable',
            'no_telp' => 'nullable',
            'role_id' =>'required',
            'mapel_id' =>'required',
        ],
        [
            'jenis_kelamin.required' => 'Jenis kelamin harus terisi'
        ]);
        $input['password'] = Hash::make($request->password);
        $input = $request->all();

        $data = User::create([
            // 'nip'  => $input['nip'],
            // 'name' => $input['name'],
            // 'email' => $input['email'],
            // 'tempat_lahir' => $input['tempat_lahir'],
            // 'tanggal_lahir' => $input['tanggal_lahir'],
            // 'gender_id' => $input['gender_id'],
            // 'alamat' => $input['alamat'],
            // 'no_telp' => $input['no_telp'],
            // 'role_id' => 2,
            // 'mapel_id' => $input['mapel_id'],

        ]);
        dd($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Guru::findOrFail($id);
        // dd($data);
        return view('pages.guru.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
            $data = Guru::findOrFail($id);
            return view('pages.guru.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Guru::findOrFail($id)->delete();

        if($data){
            //redirect dengan pesan sukses
            return redirect()->route('guru.index')->with(['success' => 'Data Berhasil Dihapus!']);
         }else{
           //redirect dengan pesan error
           return redirect()->route('guru.index')->with(['error' => 'Data Gagal Dihapus!']);
         }
    }
}
