@extends('../layouts.app')
@section('content')
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <h3>Tabel Siswa</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item">
                        <a href="{{ route('siswa.index') }}">Siswa</a>
                    </li>
                    <li class="breadcrumb-item">
                        Tambah
                    </li>
                </ol>
            </div>
            <div class="col-sm-12 col-xl-12">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header pb-0">
                                <h5>Tambah Siswa</h5>
                            </div>
                            <div class="card-body">
                                <form class="theme-form mega-form" action="{{ route('siswa.store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <h7 class="pb-3 mb-0">NIS</h7>
                                        <input class="form-control" type="text" name="nis" placeholder="NIS Siswa"
                                            value="{{ old('nis') }}">
                                    </div>
                                    <div class="mb-3">
                                        <h7 class="pb-3 mb-0">Username</h7>
                                        <input class="form-control" type="text" name="username" placeholder="username"
                                            value="{{ old('username') }}">
                                    </div>
                                    <div class="mb-3">
                                        <h7 class="pb-3 mb-0">Nama</h7>
                                        <input class="form-control" type="text" name="nama" placeholder="Nama"
                                            value="{{ old('nama') }}">
                                    </div>
                                    <div class="mb-3">
                                        <h7 class="pb-3 mb-0">Email</h7>
                                        <input class="form-control" type="email" name="email" placeholder="Email"
                                            value="{{ old('email') }}">
                                    </div>
                                    <div class="mb-3">
                                        <h7 class="pb-3 mb-0">Password</h7>
                                        <input class="form-control" type="password" name="password" placeholder="***" />
                                    </div>
                                    <div class="mt-4 mb-4">
                                        <h7 class="pb-3 mb-0">Tempat, Tanggal Lahir</h7>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="tempat_lahir"
                                                    placeholder="" value="{{ old('tempat_lahir') }}">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="date" class="form-control" name="tanggal_lahir"
                                                    value="{{ old('tanggal_lahir') }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-4 mb-4">
                                        <h7 class="pb-3 mb-0">Agama</h7>
                                        <div class="col-auto">
                                            <input class="form-control" type="text" name="agama" placeholder="Agama"
                                                value="{{ old('agama') }}">
                                        </div>
                                    </div>
                                    <div class="mt-4 mb-4">
                                        <h7 class="pb-3 mb-0">Jenis Kelamin</h7>
                                        <div class="col-auto">
                                            <input class="form-control" type="text" name="gender"
                                                placeholder="Jenis Kelamin" value="{{ old('gender') }}">
                                        </div>
                                    </div>

                                    <div class="row ">
                                        <div class="col">
                                            <label for="name" class="form-label">Kelas</label>
                                            <select name="romawi_id" id="name"
                                                class="form-control @error('romawi_id') is-invalid @enderror">
                                                <option value="{{ old('romawi_id') }}">-- Kelas --</option>
                                                @foreach ($romawi as $romawis)
                                                    <option value="{{ $romawis->id }}" @selected($romawis->id)>
                                                        {{ $romawis->name }}</option>
                                                @endforeach
                                            </select>
                                            </select>
                                        </div>
                                        <div class="col">
                                            <label for="name" class="form-label">Kode</label>
                                            <select name="kode_id"                                                                                                                                                                                                                                                                                                                                                                                                                          " id="name"
                                                class="form-control @error('kode') is-invalid @enderror">
                                                <option value="{{ old('kode') }}">-- kode --</option>
                                                @foreach ($kode as $kodes)
                                                    <option value="{{ $kodes->id }}" @selected($kodes->id)>
                                                        {{ $kodes->kode }}</option>
                                                @endforeach
                                            </select>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mt-4 mb-4">
                                        <div class="row">
                                            <div class="col">
                                                <div>
                                                    <h7 class="pb-3 mb-0">Alamat</h7>
                                                    <textarea class="form-control" id="exampleFormControlTextarea4" name="alamat" value="{{ old('alamat') }}"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-primary" type="submit">Submit</button>
                                <a href="{{ route('siswa.index') }}"><button class="btn btn-secondary">Cancel</button></a>
                            </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        @endsection
