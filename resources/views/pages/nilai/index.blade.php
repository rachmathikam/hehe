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
                        <div class="row">
                            <div class="col-6">
                                <form action="{{ route('nilai.index') }}" method="GET">
                                    <select name="keyword"
                                        class="form-control">
                                        <option value="{{ $keyword }}">-- Tahun Pelajaran --</option>
                                        @foreach ($tahun_pelajaran as $tahun_pelajarans)
                                            <option value="{{ $tahun_pelajarans->id }}">
                                               {{ $tahun_pelajarans->tahun_akademik }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <input type="submit" value="Cari Kelas" class="btn btn-primary">
                                </form>
                                {{-- <select class="form-control" id="ddlYears" name="tahun_pelajaran">
                                        <option value="" disabled>--Tahun Pelajaran--</option>
                                    </select> --}}
                            </div>
                            <div class="col-6">
                                <a class="btn btn-primary btn-sm" href="{{ route('kelas.create') }}">Tambah Kelas</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="display" id="basic-2">
                                <thead>
                                    <tr class="text-center">
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Mata Pelajaran</th>
                                        <th>Nilai Rata Rata</th>
                                        <th>Tahun Pelajaran</th>

                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($kelas as $item)
                                        <tr class="text-center" name="data">
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->kelassiswa->siswa->nama }}</td>
                                            <td>{{ $item->mapelaspek->mapel->name }} - {{ $item->mapelaspek->aspek->aspek }}</td>
                                            <td>{{ $item->nilai_rata2 }}</td>
                                            <td>{{ $item->tapel->tahun_akademik }}</td>
                                            <td>
                                                <a class="btn btn-secondary btn-xs"
                                                    href="{{ route('nilai.show', $item->id) }}"><i
                                                        class="fas fa-edit"></i></a>
                                            </td>
                                            </form>

                                        </tr>
                                    @endforeach
                                </tbody>
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Mata Pelajaran</th>
                                    <th>Nilai Rata Rata</th>
                                    <th>Tahun Pelajaran</th>
                                    <th>Action</th>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <script type="text/javascript">
                window.onload = function() {
                    //Reference the DropDownList.
                    var ddlYears = document.getElementById("ddlYears");

                    //Determine the Current Year.
                    var currentYear = (new Date()).getFullYear();

                    //Loop and add the Year values to DropDownList.
                    for (var i = 2016; i <= currentYear; i++) {
                        var option = document.createElement("OPTION");
                        option.innerHTML = i;
                        option.value = i;
                        ddlYears.appendChild(option);
                    }
                };
            </script>

            {{-- Delete Swwet alert  --}}
            {{-- @include('pages/nilai/tahunPelajaran') --}}
        @endsection
