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
                Edit
                </li>
        </ol>
      </div>
    <div class="col-sm-12 col-xl-12">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h5>Edit Mata Pelajaran</h5>
                    </div>
                    <div class="card-body">
                 <form class="theme-form mega-form" action="{{ route('mapel.update', $data->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col">
                                    <label for="">Mata Pelajaran</label>
                                    <input type="text" class="form-control" name="name" value="{{$data->name}}">
                                </div>
                            </div>
                    <div class="card-footer">
                        <button class="btn btn-primary" type="submit">Submit</button>
                        <a  href="{{ route('mapel.index') }}" class="btn btn-secondary" >Cancel</a>
                    </div>
                </form>
                </div>
                </div>
            </div>

        </div>
    </div>


@endsection
