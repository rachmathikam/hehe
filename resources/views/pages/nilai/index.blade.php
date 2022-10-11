@extends('../layouts.app')
@section('content')
    <link rel="stylesheet" type="text/css" href="https://laravel.pixelstrap.com/viho/assets/css/style.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@40,300,0,0" />

    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <h3>Nilai</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item">Pilih Kelas</li>
                </ol>
            </div>



            <div class="container-fluid">
                <!-- ribbon left (default) side-->
                <div class="row">
                  <div class="col-sm-12 col-xl-12">
                    <div class="card">
                      <div class="card-header">
                        <h5>Pilih Kelas</h5>
                      </div>
                      <div class="card-body">
                        <div class="row">
                            @foreach ($kelas as $kelass )
                          <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="card ribbon-wrapper">
                                <div class="card-body">
                                    <div class="ribbon ribbon-bookmark ribbon-primary">{{ $kelass->romawi->name }} - {{ $kelass->kode->kode }}</div>
                                    <p>Jumlah Siswa: {{ $kelass->siswa()->count() }}</p>
                                    <button type="button" class="btn btn-primary btn-xs">Input Nilai</button>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>


            {{-- <script>
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
            });
        });

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
</script> --}}
        @endsection
