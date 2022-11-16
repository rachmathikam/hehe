<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Siswa,User,KelasSiswa, Kelas};
use DB;
use Hash;
class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

       $data = Siswa::all();
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
        $data = Siswa::all();
        $kelas = Kelas::all();
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
        $request->validate([
            // 'user_id'=> 'required',
            // 'nis' => 'required|unique:siswas|max:5',
            'username' => 'required',
            'password' => 'required',
            'email' => 'required|unique:users',
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'gender' => 'required',
            'agama' => 'required',
            'alamat' => 'required',
            // 'role_id' => 'nullable',
        ]);
        // dd($request->toArray());

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


            ]);



        DB::commit();
        return redirect()->route('siswa.index')->with('success', 'Success Insert Data Siswa');

        } catch (\Exeptions $exeption) {
           DB::rollback();

           return redirect()->route('siswa.create')->with('Failed', 'Failed Insert Data Siswa');
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
        $romawi = Romawi::all();
        $kode = Kode::all();
        // dd($kelas);

        $data = Siswa::findOrFail($id);
        // dd($data);
        // dd($data);
        return view('pages.siswa.edit',compact('data','romawi','kode'));
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
        // dd($siswa);
        // dd($request->all());
         $request->validate([
            'nama'=> 'required',
            'nis' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' =>'required',
            'agama' => 'required',
            'gender' =>'required',
            'alamat' => 'required',
            'romawi_id' => 'required',
            'kode_id' => 'required',
            'email'=>'required',
            'password'=>'nullable',
            'username' => 'required',
        ]);
        // dd($request->all());

        $input = $request->all();
        $input['password'] = Hash::make($request->password);

        $kelas = Kelas::where('romawi_id', $input['romawi_id'])
                        ->where('kode_id', $input['kode_id'])->first();

        $data = Siswa::findOrFail($id);

        $user = User::findOrFail($data->user_id);

        $user->update([
            'username' => $input['username'],
            'password'   => $input['password'],
            'email' => $input['email'],
        ]);

        $data->update(
            [
            'nis' => $input['nis'],
            'nama' => $input['nama'],
            'tempat_lahir' => $input['tempat_lahir'],
            'tanggal_lahir' => $input['tanggal_lahir'],
            'gender' => $input['gender'],
            'agama' => $input['agama'],
            'alamat' => $input['alamat'],
            'kelas_id' => $kelas->id
            ]
        );
        // dd($data->toArray());
        return redirect()->route('siswa.index')->with('success', 'Siswa Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $data = Siswa::find($id);
        // $siswa = User::where('id',$data['user_id'])->first();
        // dd($siswa);
        $data = Siswa::find($id)->user();
        $data_del = $data->delete();
        if ($data_del) {
            return response()->json([
                'success' => true,
                'message' => 'Data berhasil di hapus',
            ]);
        }

    }
}
