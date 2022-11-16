@extends('../layouts.app')
@section('content')
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <h3>Tabel Tahun Pelajaran</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item">
                        <a href="{{ route('siswa.index') }}">Tahun Pelajaran</a>
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
                                <h5>Tambah Tahun Pelajaran</h5>
                            </div>
                            <div class="card-body">
                                <form class="theme-form mega-form" action="{{ route('thpelajaran.store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf

                                    <div class="row ">
                                        <div class="col-6
                                        ">
                                            <div class="mt-4 mb-4">
                                                <h7 class="pb-3 mb-0">Tahun Pelajaran</h7>
                                                <div class="col-auto">
                                                   <input class="form-control" type="number" min="2013" name ="tahun_akademik" max="2099" step="1" value="2016" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <div class="card-footer">
                                <button class="btn btn-primary" type="submit">Submit</button>
                                <a href="{{ route('thpelajaran.index') }}" class="btn btn-secondary">Cancel</></a>
                            </div>
                            </form>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        @endsection
