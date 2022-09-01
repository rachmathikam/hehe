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
                 <form class="theme-form mega-form" action="{{ route('guru.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="mb-3">
                                <h7 class="pb-3 mb-0">NIP</h7>
                                <input class="form-control" type="text" name="nip"
                                    placeholder="your Nip">
                            </div>
                            <div class="mb-3">
                                <h7 class="pb-3 mb-0">Nama</h7>
                                <input class="form-control" type="text" name="nama"
                                    placeholder="Nama" />
                            </div>
                        <div class="mt-4 mb-4">
                            <h7 class="pb-3 mb-0">Tempat, Tanggal Lahir</h7>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="tempat_lahir" placeholder="">
                                </div>
                                <div class="col-md-6">
                                    <input type="date" class="form-control" name="tanggal_lahir" >
                                </div>
                            </div>
                        </div>

                        <div class="mt-4 mb-4">
                            <h7 class="pb-3 mb-0">Agama</h7>
                            <div class="col-auto">
                                <input class="form-control" type="text" name="agama"
                                    placeholder="Agama" />
                            </div>
                        </div>
                        <div class="mt-4 mb-4">
                            <h7 class="pb-3 mb-0">Jenis Kelamin</h7>
                            <div class="col-auto">
                                <input class="form-control" type="text"
                                    name="jenis_kelamin" placeholder="Jenis Kelamin" />
                            </div>
                        </div>
                        <div class="mt-4 mb-4">
                            <div class="row">
                                <div class="col-md-6">
                                    <h7 class="pb-3 mb-0">Role</h7>
                                    <input type="text" class="form-control" name="tempat_lahir"  placeholder="">
                                </div>
                                <div class="col-md-6">
                                    <h7 class="pb-3 mb-0">Mengajar</h7>
                                    <input type="text" class="form-control" name="tanggal_lahir" >
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 mb-4">
                            <h7 class="pb-3 mb-0">No Telphone</h7>
                            <div class="col-auto">
                                <input class="form-control" type="text" name="no_telp"
                                    placeholder="Jenis Kelamin" />
                            </div>
                        </div>
                        <div class="mt-4 mb-4">
                            <div class="row">
                                <div class="col">
                                    <div>
                                        <h7 class="pb-3 mb-0">Alamat</h7>
                                        <textarea class="form-control" id="exampleFormControlTextarea4" name="alamat"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary" type="submit">Submit</button>
                        <button class="btn btn-secondary">Cancel</button>
                     </form>
                    </div>
                </div>
            </div>

        </div>
    </div>


@endsection
