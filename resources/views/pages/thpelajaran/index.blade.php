@extends('../layouts.app')
@section('content')
    <link rel="stylesheet" type="text/css" href="https://laravel.pixelstrap.com/viho/assets/css/style.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@40,300,0,0" />

    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <h3>Tabel Tahun Pelajaran</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item">Tahun Pelajaran</li>
                </ol>
            </div>

            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h5>Data Tahun Pelajaran</h5>
                        <a class="btn btn-primary btn-sm" href="{{ route('thpelajaran.create') }}">Tambah Tahun Pelajaran</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="display" id="basic-2">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tahun</th>
                                        <th>Semester</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tahun_pelajaran as $tahun_pelajarans)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $tahun_pelajarans->tahun }}</td>
                                            <td>{{ $tahun_pelajarans->semester }}</td>
                                            <td>
                                                    <a href="{{ route('thpelajaran.edit', $tahun_pelajarans->id) }}">
                                                        <button class="btn btn-secondary"type="button"><i
                                                                class="mdi mdi-grease-pencil"></i></button>
                                                    </a>
                                                    <button class="btn btn-danger" data-name="{{ $tahun_pelajarans->tahun }}"
                                                        data-id="{{ $tahun_pelajarans->id }}" type="submit"><i
                                                            class="mdi mdi-delete-forever"></i></button>
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

                   {{-- Delete Swwet alert  --}}
                   <script type="text/javascript">
                    $(document).ready(function() {
                        $('.btn-danger').click(function(e) {
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
                                title: 'Hapus?',
                                text: "Anda Yakin Hapus ini " + name + "?",
                                icon: 'warning',
                                showCancelButton: true,
                                confirmButtonText: 'Ya, Hapus ini!',
                                cancelButtonText: 'Tidak, Batal!',
                                reverseButtons: true
                            }).then((result) => {
                                if (result.value) {
                                    if (result.isConfirmed) {
                                        $.ajax({
                                            type: 'POST',
                                            url: "thpelajaran/" + id,
                                            data: {
                                                "_token": "{{ csrf_token() }}",
                                                "_method": 'DELETE',
                                            },
                                            success: function(data) {
                                                if (data.success) {
                                                    Swal.fire({
                                                        position: 'center',
                                                        icon: 'success',
                                                        title: data.message,
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
        @endsection
