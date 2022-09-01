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
                <table class="display table-guru" id="basic-2">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nip</th>
                            <th>Name</th>
                            <th>Mengajar</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
            $('.table-guru').DataTable({
                processing: true,
                serverside: true,
                ajax: {
                    url: "{{route('guru.index')}}",
                    type: 'GET'
                },
                responsive: true,
                columns: [{
                        data: 'DT_RowIndex',
                    },
                    {
                        data: 'nip',
                    },
                    {
                        data: 'nama',
                    },
                    {
                        data: 'mapel'
                    },
                    {
                        data: 'action',
                    },
                ]
            })
        })

    function deleteItem(e) {
            let id = e.getAttribute('data-id');
            let name = e.getAttribute('data-name');
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger'
                },
                buttonsStyling: true
            });
            swalWithBootstrapButtons.fire({
                title: 'Yakin menghapus '+name+" ?",
                text: name+" akan di hapus",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Ya,Hapus',
                cancelButtonText: 'Tidak, Batal!',
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    if (result.isConfirmed) {
                        $.ajax({
                            type: 'POST',
                            url: "guru" + id,
                            data: {
                                "_token": "{{ csrf_token() }}",
                                "_method": 'DELETE',
                            },
                            success: function(response) {
                                if (response.success) {
                                    toastr.success(name + response.message);
                                    var oTable = $('.table-guru').DataTable(); //inialisasi datatable
                                    oTable.ajax.reload();
                                }
                            }

                        });
                    }
                } else if (
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swal.fire(
                        'Batal',
                        'Data '+name+' tidak dihapus',
                        'error'
                    )
                }
            });
        }
</script>
@endsection
