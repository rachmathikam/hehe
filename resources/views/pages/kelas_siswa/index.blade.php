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
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button class="btn-close" type="button" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="col-md-12">
                                            <div class="line line-dashed line-lg pull-in"></div>
                                            <div class="row">
                                                <table class="table table-bordered" id="orders">
                                                    <tr>
                                                        <th>Kelas</th>
                                                        <th>Kode Kelas</th>
                                                        <th>Mata Pelajaran</th>
                                                 a       <th>Nama Kelas</th>
                                                        <th>Kode Kelas</th>
                                                        <th>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <td><input class="form-control product_price" type='number'
                                                                data-type="product_price" id='product_price_1'
                                                                name='product_price[]' for="1" /></td>
                                                        <!-- purchase_cost -->
                                                        <td><input class="form-control quantity" type='number'
                                                                id='quantity_1' name='quantity[]' for="1" /></td>
                                                        <td><input class="form-control total_cost" type='text'
                                                                id='total_cost_1' name='total_cost[]' for='1'
                                                                readonly /></td>
                                                        <td><button type="button" name="add" id="add"
                                                                class="btn btn-success circle">+</button></td>
                                                    </tr>
                                                </table>
                                                <input class="form-control" type='hidden' data-type="product_id_1"
                                                    id='product_id_1' name='product_id[]' />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-primary" type="button"
                                            data-bs-dismiss="modal">Close</button>
                                        <button class="btn btn-secondary" type="button">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>

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
                                    @foreach ($data as $item)
                                        <tr class="text-center">
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->nama_kelas }} - {{ $item->kode_kelas }} </td>
                                            <td>

                                                <a href="{{ route('kelas_siswa.show', $item->id) }}">

                                                    <button class="btn btn-primary" type="button"><i
                                                            class="mdi mdi-eye"></i></button>
                                                </a>

                                                <a href="{{ route('kelas.edit', $item->id) }}">
                                                    <button class="btn btn-secondary"type="button"><i
                                                            class="mdi mdi-grease-pencil"></i></button>
                                                </a>

                                                <button class="btn btn-danger" data-name="{{ $item->name }}"
                                                    data-id="{{ $item->id }}" type="submit"><i
                                                        class="mdi mdi-delete-forever"></i></button>
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
                                        url: "kelas/" + id,
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
