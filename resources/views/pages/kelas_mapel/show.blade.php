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
                        <h5>Data Kelas Mapel</h5>
                        <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-original-title="test" data-bs-target="#exampleModal">Tambah Kelas Mapel</button>
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel"  aria-hidden="true" data-backdrop="static" data-keyboard="false">
                          <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Kelas Mapel</h5>
                                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <div class="col-md-12">
                                    <div class="line line-dashed line-lg pull-in"></div>
                                    <div class="row">
                                      <table class="table table-bordered" id="orders">
                                        <tr>
                                          <th>Pilih Kelas</th>
                                          <th>Pilih Mapel</th>
                                          <th>
                                          </th>
                                        </tr>
                                        <tr>
                                          <td>
                                         </div></td> <!-- purchase_cost -->
                                          <td><select name="mapel[]" id="mapel" width="100%" class="form-control">
                                            <option>-- Pilih Kelas Mapel --</option>
                                            @foreach ($mapel as $mapels)
                                                <option value="{{ $mapels->id }}" @selected($mapels->id)>
                                                    {{ $mapels->name }} - {{ $mapels->aspek }} - {{ $mapels->kategori }}</option>
                                            @endforeach
                                        </select></td>
                                          <td><button type="button" name="add" id="add" class="btn btn-success circle">+</button></td>
                                        </tr>
                                      </table>
                                      <input class="form-control" type='hidden' data-type="product_id_1" id='product_id_1' name='product_id[]'/>
                                    </div>
                                  </div>

                              </div>
                              <div class="modal-footer">
                                <button class="btn btn-primary" type="button" data-bs-dismiss="modal">Close</button>
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
                                    <tr>
                                        <th>No</th>
                                        <th>Mata Pelajaran</th>
                                        <th>Kategori</th>
                                        {{-- <th>Action</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data->mapel as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->kategori }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                        <th>No</th>
                                        <th>Mata Pelajaran</th>
                                        <th>Kategori</th>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

<script>
    var rowCount = 1;

  $('#add').click(function() {
    rowCount++;
    $('#orders').append('<tr id="row'+rowCount+'"><td><input class="form-control product_price" type="number" data-type="product_price" id="product_price_'+rowCount+'" name="product_price[]" for="'+rowCount+'"/></td><input class="form-control" type="hidden" data-type="product_id" id="product_id_'+rowCount+'" name="product_id[]" for="'+rowCount+'"/><td><input class="form-control quantity" type="number" class="quantity" id="quantity_'+rowCount+'" name="quantity[]" for="'+rowCount+'"/> </td><td><input class="form-control total_cost" type="text" id="total_cost_'+rowCount+'" name="total_cost[]"  for="'+rowCount+'" readonly/> </td><td><button type="button" name="remove" id="'+rowCount+'" class="btn btn-danger btn_remove cicle">-</button></td></tr>');
});
</script>
        @endsection
