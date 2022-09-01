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
                Edit
                </li>
        </ol>
      </div>
    <div class="col-sm-12 col-xl-12">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h5>Edit Guru</h5>
                    </div>
                    <div class="card-body">
                 <form class="theme-form mega-form" action="{{ route('guru.update', $data->id) }}" method="PoST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label class="pb-3 mb-0">NIP</label>
                                <input class="form-control" type="text" value="{{ $data->nip }}" name="nip"
                                    placeholder="your Nip">
                            </div>
                            <div class="mb-3">
                                <label class="pb-3 mb-0">Nama</label>
                                <input class="form-control" type="text" value="{{ $data->nama }}"name="nama"
                                    placeholder="Nama" />
                            </div>
                        <div class="mt-4 mb-4">
                            <label class="pb-3 mb-0">Tempat, Tanggal Lahir</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="tempat_lahir" value="{{ $data->tempat_lahir }}" placeholder="">
                                </div>
                                <div class="col-md-6">
                                    <input type="date" class="form-control" name="tanggal_lahir"  value="{{ $data->tanggal_lahir }}">
                                </div>
                            </div>
                        </div>

                        <div class="mt-4 mb-4">
                            <label class="pb-3 mb-0">Agama</label>
                            <div class="col-auto">
                                <input class="form-control" type="text" value="{{ $data->agama }}" name="agama"
                                    placeholder="Agama" />
                            </div>
                        </div>
                        <div class="mt-4 mb-4">
                            <label class="pb-3 mb-0">Jenis Kelamin</label>
                            <div class="col-auto">
                                <input class="form-control" type="text" value="{{ $data->gender }}"
                                    name="jenis_kelamin" placeholder="Jenis Kelamin" />
                            </div>
                        </div>
                        <div class="mt-4 mb-4">
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="pb-3 mb-0">Role</label>
                                    <input type="text" class="form-control" name="tempat_lahir" value="{{ $data->user->role->role }}" placeholder="">
                                </div>
                                <div class="col-md-6">
                                    <label class="pb-3 mb-0">Mengajar</label>
                                    <input type="text" class="form-control" name="tanggal_lahir"  value="{{ $data->mapel->name }}">
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 mb-4">
                            <label class="pb-3 mb-0">No Telphone</label>
                            <div class="col-auto">
                                <input class="form-control" type="text" value="{{ $data->no_telp }}" name="no_telp"
                                    placeholder="Jenis Kelamin" />
                            </div>
                        </div>
                        <div class="mt-4 mb-4">
                            <div class="row">
                                <div class="col">
                                    <div>
                                        <label class="pb-3 mb-0">Alamat</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea4" name="alamat">{{ $data->alamat }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary" type="submit">Submit</button>
                        <a  href="{{ route('guru.index') }}" class="btn btn-secondary" >Cancel</a>
                     </form>
                    </div>
                </div>
            </div>

        </div>
    </div>


@endsection
