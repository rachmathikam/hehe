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
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="display" id="basic-2">
                                <thead>
                                    <tr class="text-center">
                                        <th>No</th>
                                        <th>Kelas</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($kelas as $item)
                                        <tr class="text-center">
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->kelas->nama_kelas }} - {{ $item->kelas->kode_kelas }} </td>
                                            <td>

                                                <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-original-title="test" data-bs-target="#exampleModal"><i class="mdi mdi-file"></i></button>
                                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                      <div class="modal-content">
                                                        <div class="modal-header">
                                                          <h5 class="modal-title" id="exampleModalLabel">Pilih Tahun Pelajaran</h5>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="" method="POST">
                                                                @csrf
                                                                @method('POST')
                                                                <div class="row">

                                                                    <div class="col-6">
                                                                        <label for="name" class="form-label">Tahun Pelajaran</label>
                                                                        <select name="tahun_akadenik"                                                                                                                                                                                                                                                                                                                                                                                                                          " id="name"
                                                                        class="form-control @error('kelas') is-invalid @enderror">
                                                                    <option value="{{ old('tahun_akadenik') }}">-- Tahun Pelajaran --</option>
                                                                    @foreach ($tahun_pelajaran as $tahun_pelajarans)
                                                                        <option value="{{ $tahun_pelajarans->id }}">
                                                                            {{ $tahun_pelajarans->id }} - {{ $tahun_pelajarans->tahun_akademik }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="col-6">
                                                                <label for="name" class="form-label">Semester</label>
                                                                <select name="tahun_akadenik"                                                                                                                                                                                                                                                                                                                                                                                                                          " id="name"
                                                                class="form-control @error('kelas') is-invalid @enderror">
                                                                <option value="{{ old('tahun_akadenik') }}">-- Tahun Pelajaran --</option>
                                                                @foreach ($tahun_pelajaran as $tahun_pelajarans)
                                                                <option value="{{ $tahun_pelajarans->id }}">
                                                                    {{ $tahun_pelajarans->id }} - {{ $tahun_pelajarans->tahun_akademik }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button class="btn btn-secondary" type="button">Save changes</button>
                                                            </form>
                                                                <button class="btn btn-primary" type="button" data-bs-dismiss="modal">Close</button>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                            </td>
                                            </form>

                                        </tr>
                                    @endforeach
                                </tbody>
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>Kelas</th>
                                    <th>Action</th>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>



            {{-- Delete Swwet alert  --}}

        @endsection
