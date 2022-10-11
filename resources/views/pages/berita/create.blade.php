@extends('../layouts.app')
@section('content')
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <h3>Tabel Berita</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item">
                        <a href="{{ route('berita.index') }}">Berita</a>
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
                                <h5>Tambah Berita</h5>
                            </div>
                            <div class="card-body">
                                <form class="theme-form mega-form" action="{{ route('berita.store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf

                                    <div class="mb-3">
                                        <label class="pb-3 mb-0">Judul Berita</label>
                                        <input class="form-control" type="text" name="title" placeholder="title"
                                            value="{{ old('title') }}">
                                        @error('title')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="pb-3 mb-0">isi Berita</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea4" name="description"></textarea>
                                        @error('description')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="validationCustom04">Kategori Berita</label>
                                        <select class="form-select" id="validationCustom04" required=""
                                            name="kategori_berita_id">
                                            <option selected="" disabled="" value="{{ old('kategori_berita_id') }}">
                                                Pilih kategori berita</option>
                                            @foreach ($kategori as $beritas)
                                                <option value="{{ $beritas->id }}" @selected($beritas->id)>
                                                    {{ $beritas->nama_kategori }}</option>
                                            @endforeach
                                        </select>
                                        @error('kategori_berita_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="pb-3 mb-0">Gambar</label>
                                        <input class="form-control" type="file" name="image" placeholder="image"
                                            value="{{ old('image') }}">
                                        @error('image')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="card-footer">
                                        <button class="btn btn-primary" type="submit">Submit</button>
                                        <button class="btn btn-secondary">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
