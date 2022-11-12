@extends('../layouts.app')
@section('content')
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <h3>Tabel Guru</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item">
                        <a href="{{ route('guru.index') }}">Guru</a>
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
                                <h5>Tambah Guru</h5>
                            </div>
                            <div class="card-body">
                                <form class="theme-form mega-form" action="{{ route('guru.store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label class="pb-3 mb-0">NIP</label>
                                        <input class="form-control" type="text" name="nip" placeholder="NIP Guru"
                                            value="{{ old('nip') }}">
                                        @error('nip')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="pb-3 mb-0">Username</label>
                                        <input class="form-control" type="text" name="username" placeholder="username"
                                            value="{{ old('username') }}">
                                        @error('username')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="pb-3 mb-0">Nama</label>
                                        <input class="form-control" type="text" name="nama" placeholder="Nama"
                                            value="{{ old('nama') }}">
                                        @error('nama')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="pb-3 mb-0">Email</label>
                                        <input class="form-control" type="email" name="email" placeholder="Email"
                                            value="{{ old('email') }}">
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="pb-3 mb-0">Password</label>
                                        <input class="form-control" type="password" name="password" placeholder="***" />
                                        @error('password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mt-4 mb-4">
                                        <label class="pb-3 mb-0">Tempat, Tanggal Lahir</label>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="tempat_lahir"
                                                    placeholder="" value="{{ old('tempat_lahir') }}">
                                                @error('tempat_lahir')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <input type="date" class="form-control" name="tanggal_lahir"
                                                    value="{{ old('tanggal_lahir') }}">
                                                @error('tanggal_lahir')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-4 mb-4">
                                        <label class="pb-3 mb-0">Agama</label>
                                        <div class="col-auto">
                                            <input class="form-control" type="text" name="agama" placeholder="Agama"
                                                value="{{ old('agama') }}">
                                            @error('agama')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="mt-4 mb-4">
                                        <label class="pb-3 mb-0">Jenis Kelamin</label>
                                        <div class="col-auto">
                                            <input class="form-control" type="text" name="gender"
                                                placeholder="Jenis Kelamin" value="{{ old('gender') }}">
                                            @error('gender')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="mt-4 mb-4">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label for="mapel" class="form-label">Mengajar</label>
                                                <select name="mapel_id" id="mapel" width="100%" class="form-control">
                                                    <option>-- Pilih --</option>
                                                    @foreach ($mapel as $mapels)
                                                        <option value="{{ $mapels->id }}" @selected($mapels->id)>
                                                            {{ $mapels->name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('mapel_id')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-4 mb-4">
                                        <label class="pb-3 mb-0">No Telphone</label>
                                        <div class="col-auto">
                                            <input class="form-control" type="text" name="no_telp"
                                                placeholder="Jenis Kelamin" value="{{ old('no_telp') }}">
                                            @error('no_telp')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="mt-4 mb-4">
                                        <div class="row">
                                            <div class="col">
                                                <div>
                                                    <label class="pb-3 mb-0">Alamat</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea4" name="alamat" value="{{ old('alamat') }}"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-primary" id="tambah" type="submit">Submit</button>
                                <a href="{{ route('guru.index') }}" class="btn btn-secondary">Cancel</a>
                            </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        @endsection
