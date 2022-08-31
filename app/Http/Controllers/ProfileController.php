<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Guru;


class ProfileController extends Controller
{
    public function index(){
        $data = User::with('guru')->get();
        // dd($data);
        return view('layouts.profile',compact('data'));

    }
}
