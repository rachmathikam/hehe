<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;
use App\Models\Mapel;
use App\Models\User;
use DB;


use Auth;
use DataTables;

class GuruController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function index(Request $request)
    {
        $data = Guru::with('mapel','user')->get();
        // dd($data);
        // if($request->ajax()){
        //     return DataTables::of($data)
        //         ->addColumn('nip', function($row){
        //             return $row->nip ;
        //         })
        //         ->addColumn('nama', function($row){
        //             return $row->nama ;
        //         })
        //         ->addColumn('mapel', function($row){
        //             return $row->mapel->name ;
        //         })
        //         ->addColumn('action', function($row){
        //             $button  = '';
        //             $button .= '&nbsp;&nbsp;';
        //             $button .= '<a href="'.route('guru.edit',$row->id).'"><i class="mdi mdi-grease-pencil"></i></i></a>';
        //             $button .= '&nbsp;&nbsp;';
        //             $button .= '<a class="cursor-pointer btn-show" data-toggle="modal" data-id="'.$row->id.'"><i class="mdi mdi-eye"></i></i></a>';
        //             $button .= '&nbsp;&nbsp;';
        //             $button .= '<a href="javascript:void(0)" onclick="deleteItem(this)" data-name="'.$row->nama.'" data-id="'.$row->id.'"> <i class="mdi mdi-delete-forever text-danger"></a>';
        //             return $button;
        //         })
        //         ->rawColumns(['action'])
        //         ->addIndexColumn()
        //         ->make(true);
        // }
        // dd($data);

        return view('pages.guru.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mapel = Mapel::with('guru')->get();
        // dd($mapel);

        $data = Guru::with('user')->get();
        return view('pages.guru.create', compact('data','mapel'));
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
        //     'username' => 'required',
        //     'email' => 'required',
        //     'password' => 'required',
        //     'agama' => 'nullable',
        //     'nip'  => 'required',
        //     'nama' => 'required',
        //     'tempat_lahir' => 'nullable',
        //     'tanggal_lahir' => 'nullable',
        //     'gender' => 'required',
        //     'alamat' => 'nullable',
        //     'role_id'=>'nullable',
        //     'no_telp' => 'nullable',
        //     'mapel_id' =>'nullable',
        // ]);


        // dd($request);
        // // $data = $request->validate([

        // ]);
        $input = $request->all();
        // dd($input);
            DB::beginTransaction();
            try {
                User::create(
                    [
                    'username' => $input['username'],
                    'email' => $input['email'],
                    'password' => bcrypt($input['password']),
                    'role_id' => 3,
                    ]
                );
                // dd($user);
                $userid = User::get()->last();
                // dd($userid);
                Guru::create(
                    [
                        'nip'  => $input['nip'],
                        'nama' => $input['nama'],
                        'agama' => $input['agama'],
                        'tempat_lahir' => $input['tempat_lahir'],
                        'tanggal_lahir' => $input['tanggal_lahir'],
                        'gender' => $input['jenis_kelamin'],
                        'alamat' => $input['alamat'],
                        'no_telp' => $input['no_telp'],
                        'user_id' => $userid->id,
                        'mapel_id' => $input['mapel_id'],
                    ]
                );
                DB::commit();

                return redirect()->route('guru.index')->with('success', 'Data');

            } catch (\Exceptions $exception) {
                DB::rollback();

                return redirect()->route('guru.create')->with('failed', 'failed');
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
            $mapel = Mapel::with('guru')->get();
            // dd($mapel);

            $data = Guru::findOrFail($id);
            // dd($data);
            return view('pages.guru.edit',compact('data','mapel'));
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
        // dd($request->all());
        $request->validate([
            'nama'=> 'required',
            'nip' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' =>'required',
            'agama' => 'required',
            'gender' =>'required',
            'mapel_id' => 'required',
            'no_telp' => 'required',
            'alamat' => 'required',

        ]);

        $input = $request->all();
        // dd($input);
        $data = Guru::findOrFail($id);
        $data->update($input);

        return redirect()->route('guru.index')->with('success', 'Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Guru::find($id);
        $guru = User::where('id',$data['user_id'])->first();

        if($guru->delete()){
            return redirect()->route('guru.index')->with(['success' => 'Data Berhasil Dihapus!']);
         }else{
           //redirect dengan pesan error
           return redirect()->route('guru.index')->with(['error' => 'Data Gagal Dihapus!']);
         }
    }
}
