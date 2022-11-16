@extends('../layouts.app')
@section('content')
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <h3>Tabel Mapel</h3>
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
                                <h5>Tambah Kelas</h5>
                            </div>
                            <div class="card-body">
                                <form class="theme-form mega-form" action="{{ route('kelas.store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6 col-sm-12">
                                            <label for="">Inisial Kelas</label>
                                            <input type="text" class="form-control" name="nama_kelas"
                                                value="{{ old('nama_kelas') }}" placeholder="I II III IV V">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="kode" class="form-label">Kode Kelas</label>
                                            <select class="form-control" id="exampleFormControlSelect1" name="kode_kelas">
                                                @foreach (['kode_kelas' => 'A', 'B', 'C', 'D'] as $kodes => $kode)
                                                    <option value="{{ $kode }}" @selected($kode)>
                                                        {{ $kode }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                <div class="card-footer mt-5">
                                <button class="btn btn-primary" type="submit">Submit</button>
                                <a href="{{ route('kelas.index') }}" class="btn btn-secondary">Cancel</a>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script>
            $(document).ready(function() {
                $('.js-example-basic-multiple').select2();
            });
        </script>
    @endsection
