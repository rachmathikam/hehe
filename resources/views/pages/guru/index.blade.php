@extends('../layouts.app')
@section('content')
<link rel="stylesheet" type="text/css" href="https://laravel.pixelstrap.com/viho/assets/css/style.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@40,300,0,0" />

<div class="page-header">
    <div class="row">
      <div class="col-lg-6">
        <h3>Tabel Guru</h3>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item">Guru</li>
        </ol>
      </div>

<div class="col-sm-12">
    <div class="card">
        <div class="card-header">
            <h5>Tabel Data Guru</h5>
            <a href="{{ route('guru.create') }}"><button class="btn btn-primary btn-xs" type="button">
                <i class="fa-solid fa-plus">Tambah</i>
            </button></a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="display" id="basic-2">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nip</th>
                            <th>Name</th>
                            <th>Role</th>
                            <th>Mengajar</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $guru)

                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $guru->nip }}</td>
                            <td>{{ $guru->nama }}</td>
                            <td>{{ $guru->user->role->role }}</td>
                            <td>{{ $guru->mapel->name }}</td>
                            <td>
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('guru.destroy', $guru->id) }}" method="POST">
                                 <a href="{{ route('guru.show', $guru->id) }}"><button class="btn btn-primary btn-xs" type="button">
                                    <i class="fa-solid fa-eye"></i>
                                </button></a>
                                <a href="{{ route('guru.edit', $guru->id) }}"><button class="btn btn-secondary btn-xs" type="button">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </button></a>
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-xs" type="submit">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
