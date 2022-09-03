<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\User;
use App\Models\Grade;
use DB;
class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelas = Grade::all();
        $data = Siswa::with('grade')->get();
        // dd($data);
        return view('pages.siswa.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelas = Grade::with('siswa')->get();
        $data = Siswa::with('user')->get();
        return view('pages.siswa.create',compact('data','kelas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     // 'user_id'=> 'required',
        //     'grade_id'=> 'nullable',
        //     'nis' => 'required|unique:siswas|max:5',
        //     'username' => 'required',
        //     'password' => 'required',
        //     'email' => 'required|unique:users',
        //     'nama' => 'required',
        //     'tempat_lahir' => 'required',
        //     'tanggal_lahir' => 'required',
        //     'gender' => 'required',
        //     'agama' => 'required',
        //     'alamat' => 'required',
        //     'role_id' => 'nullable',
        // ]);
        // dd($request);

        $input = $request->all();

        DB::beginTransaction();
        try {
            User::create([
                'username'=>$input['username'],
                'email'=>$input['email'],
                'password'=> bcrypt($input['password']),
                'role_id' => 4

            ]);

            $userid = User::get()->last();

            Siswa::create([
                'nis' => $input['nis'],
                'nama' => $input['nama'],
                'tempat_lahir' => $input['tempat_lahir'],
                'tanggal_lahir' => $input['tanggal_lahir'],
                'gender' => $input['gender'],
                'agama' => $input['agama'],
                'alamat' => $input['alamat'],
                'user_id' => $userid->id,
                'grade_id' => $input['grade_id'],
        ]);

        DB::commit();
        return redirect()->route('siswa.index')->with('success', 'Success Insert Data Siswa');

        } catch (\Exeptions $exeption) {
           DB::rollback();

           return redirect()->route('siswa.create       TABLE')->with('Failed', 'Failed Insert Data Siswa');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Siswa::findOrFail($id);
        return view('pages.siswa.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kelas = Grade::with('siswa')->get();
        // dd($mapel);

        $data = Siswa::findOrFail($id);
        // dd($data);
        return view('pages.siswa.edit',compact('data','kelas'));
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
        $request->validate([
            'nama'=> 'required',
            'nis' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' =>'required',
            'agama' => 'required',
            'gender' =>'required',
            'grade_id' => 'required',
            'alamat' => 'required',

        ]);

        $input = $request->all();
        // dd($input);
        $data = Siswa::findOrFail($id);
        $data->update($input);

        return redirect()->route('siswa.index')->with('success', 'Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Siswa::find($id);
        $siswa = User::where('id',$data['user_id'])->first();

        if($siswa->delete()){
            return redirect()->route('siswa.index')->with(['success' => 'Data Berhasil Dihapus!']);
         }else{
           //redirect dengan pesan error
           return redirect()->route('siswa.index')->with(['error' => 'Data Gagal Dihapus!']);
         }
    }
}
