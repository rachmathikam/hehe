@extends('../layouts.app')
@section('content')
    <link rel="stylesheet" type="text/css" href="https://laravel.pixelstrap.com/viho/assets/css/style.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@40,300,0,0" />

    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <h3>Tabel Kelas</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item">Kelas</li>
                </ol>
            </div>

            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h5>Data Kelas</h5>
                        <a class="btn btn-primary btn-sm" href="{{ route('kelas.create') }}">Tambah Kelas</a>
                        {{-- @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif --}}
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="display" id="basic-2">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        {{-- <th>Kode Kelas</th> --}}
                                        <th>Kelas</th>
                                        <th>siswa</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            {{-- <td>{{ $item->kode }}</td> --}}
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->siswa->grade_id }}</td>
                                            <td>
                                                <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                    action="{{ route('kelas.destroy', $item->id) }}" method="POST">
                                                    {{-- <a href="{{ route('kelas.show', $item->id) }}">
                                                        <button class="btn btn-primary" type="button"><i
                                                                class="mdi mdi-eye"></i></button>
                                                    </a> --}}
                                                    <a href="{{ route('kelas.edit', $item->id) }}">
                                                        <button class="btn btn-secondary"type="button"><i
                                                                class="mdi mdi-grease-pencil"></i></button>
                                                    </a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="{{ route('kelas.destroy', $item->id) }}">
                                                        <button class="btn btn-danger" type="submit"><i
                                                                class="mdi mdi-delete-forever"></i></button>
                                                    </a>
                                            </td>
                                            </form>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


        @endsection
