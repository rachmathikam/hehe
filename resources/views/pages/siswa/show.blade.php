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
                                    <h5>Profile</h5>
                                    <span class="f-14 pull-right mt-0">{{ $data->user->role->role }}</span>
                                </div>
                                <div class="card-body p-5">
                                    <div class="row list-persons" id="addcon">
                                        <div class="col-xl-12 xl-100 col-md-12 box-col-12">
                                            <div class="tab-content" id="v-pills-tabContent">

                                                <div class="profile-mail">
                                                    <div class="media align-items-center">
                                                        @if(strlen($data->user->image>0))
                                                        <img class="img-100 img-fluid m-r-20 rounded-circle update_img_0"
                                                            src="https://laravel.pixelstrap.com/viho/assets/images/dashboard/1.png"
                                                            alt="" />
                                                            @else
                                                        <img class="img-100 img-fluid m-r-20 rounded-circle update_img_0"
                                                            src="{{ asset($data->user->image) }}"
                                                            alt="" />
                                                            @endif
                                                        <input class="updateimg" type="file" name="img"
                                                            onchange="readURL(this,0)" />
                                                        <div class="media-body mt-0">
                                                            <h5><span class="first_name_0">{{ $data->nama }}</span></h5>
                                                            <p class="email_add_0">{{ $data->user->email }}</p>
                                                        </div>
                                                    </div>
                                                    <div class="email-general">
                                                        <h6 class="mb-3">Profile</h6>
                                                        <ul>
                                                            <li>Name <span class="font-primary first_name_0">{{ $data->nama }}</span>
                                                            </li>
                                                            <li>Jenis Kelamin <span class="font-primary">{{ $data->gender }}</span></li>
                                                            <li>
                                                                Tanggal Lahir<span class="font-primary"> <span
                                                                        class="birth_day_0">{{ $data->tanggal_lahir }}</span><span

                                                            </li>
                                                            <li>Tempat Lahir<span
                                                                    class="font-primary personality_0">{{ ($data->tempat_lahir) }}</span></li>
                                                            <li>Agama<span class="font-primary city_0">{{ $data->agama }}</span>
                                                            </li>
                                                            <li>Alamat<span class="font-primary mobile_num_0">{{ $data->alamat }}</span></li>
                                                            <li>email<span
                                                                    class="font-primary url_add_0">{{ $data->user->email }}</span></li>
                                                            <li>Role<span
                                                                    class="font-primary interest_0">{{ $data->user->role->role }}</span></li>
                                                        </ul>
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
