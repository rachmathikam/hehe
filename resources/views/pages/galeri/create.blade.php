@extends('../layouts.app')
@section('content')
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <h3>Tabel Galeri</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item">
                        <a href="{{ route('berita.index') }}">Galeri</a>
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
                                <h5>Tambah Galeri</h5>
                            </div>
                            <div class="card-body">
                                <form class="theme-form mega-form" action="{{ route('galeri.store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label class="pb-3 mb-0">Judul Galeri</label>
                                        <input class="form-control" type="text" name="title" placeholder="title"
                                            value="{{ old('title') }}">
                                        @error('title')
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
                                        <button class="btn btn-primary" id="tambah" type="submit">Submit</button>
                                        <button class="btn btn-secondary">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- @section('script')
            <script type="text/javascript">
                $(document).ready(function() {
                    $('#tambah').click(function(e) {
                        e.preventDefault();

                        let id = $(this).attr('data-id');
                        let name = $(this).attr('data-name');

                        const swalWithBootstrapButtons = Swal.mixin({
                            customClass: {
                                confirmButton: 'btn btn-success',
                                cancelButton: 'btn btn-danger'
                            },
                            buttonsStyling: true
                        });
                        swalWithBootstrapButtons.fire({
                            title: 'Are you sure?',
                            text: "Do you want to delete " + name + "?",
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonText: 'Yes, delete it!',
                            cancelButtonText: 'No, cancel!',
                            reverseButtons: true
                        }).then((result) => {
                            if (result.value) {
                                if (result.isConfirmed) {
                                    $.ajax({
                                        type: 'POST',
                                        url: "galeri/" + id,
                                        data: {
                                            "_token": "{{ csrf_token() }}",
                                            "_method": 'DELETE',
                                        },
                                        success: function(data) {
                                            if (data.success) {
                                                Swal.fire({
                                                    position: 'center',
                                                    icon: 'success',
                                                    title: 'Your work has been saved',
                                                    showConfirmButton: false
                                                })
                                                setTimeout(() => {
                                                    location.reload();
                                                }, 1500);

                                            } else {
                                                toastr.error(data.message)
                                            }
                                        },
                                        error: function(data) {
                                            toastr.error(data)
                                        }
                                    });
                                }
                            } else if (
                                result.dismiss === Swal.DismissReason.cancel
                            ) {
                                swal.fire(
                                    'Batal',
                                    'Data Tidak di delete',
                                    'error'
                                )
                            }
                        });
                    });
                });
            </script>
            @endsection --}}
 @endsection
