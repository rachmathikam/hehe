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
                Edit
                </li>
        </ol>
      </div>
    <div class="col-sm-12 col-xl-12">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h5>Edit Tahun Pelajaran</h5>
                    </div>
                    <div class="card-body">
                 <form class="theme-form mega-form" action="{{ route('thpelajaran.update', $tahun_pelajarans->id) }}" method="PoST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                        <div class="mt-4 mb-4">
                            <div class="row">
                                <div class="col">
                                    <div class="mt-4 mb-4">
                                        <h7 class="pb-3 mb-0">Tahun Pelajaran</h7>
                                        <div class="col-auto">
                                           <input class="form-control" type="number" min="2013" name ="tahun" max="2099" step="1" value="2013" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Semester</label>
                                    <select name="semester" id="name"
                                        class="form-control @error('semester') is-invalid @enderror">
                                        <option value="{{ $tahun_pelajarans->semester }}">-- Semester --</option>
                                        @foreach (['semester'=> 'ganjil','genap'] as $semesters)
                                        <option value="{{ $semesters }}">{{ $semesters }}</option>
                                    @endforeach
                                    </select>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary" id="tambah" type="submit">Submit</button>
                        <a  href="{{ route('siswa.index') }}" class="btn btn-secondary" >Cancel</a>
                    </div>
                </form>
                </div>
                </div>
            </div>

        </div>
    </div>
@endsection
