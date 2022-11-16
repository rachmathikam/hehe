@extends('../layouts.app')
@section('content')
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <h3>Tabel Mapel</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item">
                        <a href="{{ route('mapel.index') }}">Maepel</a>
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
                                <h5>Tambah Mata Pelajaran</h5>
                            </div>
                            <div class="card-body">
                                <form class="theme-form mega-form" action="{{ route('mapel.store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col">
                                            <label for="">Mata Pelajaran</label>
                                            <input type="text" class="form-control" name="name"
                                                value="{{ old('name') }}">
                                            @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <label for="">Kategori</label>
                                            <select name="" id="" class="form-select">
                                                <option value="">-- Pilih Kategori --</option>
                                                @foreach (['kategori' => 'A','B'] AS $data )
                                                <option value="{{ $data}}">{{ $data }}</option>
                                                @endforeach
                                            </select>
                                            @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="d-block">Pilih Aspek:</label>
                                        <select class="js-example-placeholder-multiple col-sm-12" name="aspek[]" multiple="multiple">
                                          <option value="AL">Pengetahuan</option>
                                          <option value="WY">Keterampilan</option>
                                          <option value="AL">Bacaan</option>
                                          <option value="WY">Hafalan</option>
                                        </select>
                                      </div>
                                    <br>
                                    <div class="card-footer">
                                        <button class="btn btn-primary" type="submit">Submit</button>
                                        <a href="{{ route('mapel.index') }}" class="btn btn-secondary">Cancel</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        @endsection




