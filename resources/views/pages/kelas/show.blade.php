@extends('layouts.app')
@section('content')
    <div class="col-xl-12 col-md-12 box-col-12 " >
        <div class="email-right-aside bookmark-tabcontent contacts-tabs">
            <div class="card email-body radius-left">
                <div class="ps-0">
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="pills-personal" role="tabpanel"
                            aria-labelledby="pills-personal-tab">
                            <div class="card mb-0">
                                <div class="card-header d-flex">
                                    <h5>Kelas</h5>
                                    {{-- <span class="f-14 pull-right mt-0">{{ $data->user->role->role }}</span> --}}
                                </div>
                                <div class="card-body p-5">
                                    <div class="row list-persons" id="addcon">
                                        <div class="col-xl-12 xl-100 col-md-12 box-col-12">
                                            <div class="tab-content" id="v-pills-tabContent">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <label for="">Kode Kelas</label>
                                                        <p>{{ $data->kode }}</p>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label for="">Inisial Kelas</label>
                                                        <p>{{ $data->name }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
