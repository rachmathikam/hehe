@extends('../layouts.app')
@section('content')


<!-- App css-->
<link rel="stylesheet" type="text/css" href="https://laravel.pixelstrap.com/viho/assets/css/style.css">


        <div class="container-fluid dashboard-default-sec">
            <div class="row">
              <div class="col-xl-12 box-col-12 des-xl-100">
                <div class="row">
                  <div class="col-xl-12 col-md-12 box-col-12 des-xl-100">
                    <div class="card profile-greeting" style="margin-top: 20px;">
                      <div class="card-header">
                        <div class="header-top">
                          <div class="setting-list bg-primary position-unset">
                            <ul class="list-unstyled setting-option">
                              <li>
                                <div class="setting-primary"></div>
                              </li>
                            </ul>

                        </div>
                    </div>
                </div>
                <div class="card-body text-center p-t-5">
                  <h3 class="font-light">Welcome Back, {{ (Auth::user()->username) }}  !!</h3>
                  <p id="demo" style="visibility: hidden; font-size: 25px;">Selamat Datang di Website Pendidikan Integral SMP Lukman Al- Hakim</p>
                  <button class="btn btn-light" id="btn">Click Me </button>
                </div>
                <div class="confetti">
                    <div class="confetti-piece"></div>
                    <div class="confetti-piece"></div>
                    <div class="confetti-piece"></div>
                    <div class="confetti-piece"></div>
                    <div class="confetti-piece"></div>
                    <div class="confetti-piece"></div>
                    <div class="confetti-piece"></div>
                    <div class="confetti-piece"></div>
                    <div class="confetti-piece"></div>
                    <div class="confetti-piece"></div>
                    <div class="confetti-piece"></div>
                    <div class="confetti-piece"></div>
                    <div class="confetti-piece"></div>
            </div>
            </div>
        </div>
        </div>
        </div>

        <div class="row">
            <div class="col-sm-6 col-xl-3 col-lg-6">
                <div class="card o-hidden border-0">
                    <div class="bg-primary b-r-4 card-body">
                        <div class="media static-top-widget">
                            <div class="align-self-center text-center"><i data-feather="user"></i></div>
                            <div class="media-body">
                                <span class="m-0">Guru</span>
                                <h4 class="mb-0 counter">{{$guru}}</h4>
                                <i class="icon-bg" data-feather="user"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3 col-lg-6">
                <div class="card o-hidden border-0">
                    <div class="bg-secondary b-r-4 card-body">
                        <div class="media static-top-widget">
                            <div class="align-self-center text-center"><i data-feather="home"></i></div>
                            <div class="media-body">
                                <span class="m-0">Kelas</span>
                                <h4 class="mb-0 counter">{{ $kelas->count() }}</h4>
                                <i class="icon-bg" data-feather="home"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3 col-lg-6">
                <div class="card o-hidden border-0">
                    <div class="bg-primary b-r-4 card-body">
                        <div class="media static-top-widget">
                            <div class="align-self-center text-center"><i data-feather="file-text"></i></div>
                            <div class="media-body">
                                <span class="m-0">Raport</span>
                                <h4 class="mb-0 counter">893</h4>
                                <i class="icon-bg" data-feather="file-text"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3 col-lg-6">
                <div class="card o-hidden border-0">
                    <div class="bg-primary b-r-4 card-body">
                        <div class="media static-top-widget">
                            <div class="align-self-center text-center"><i data-feather="user-plus"></i></div>
                            <div class="media-body">
                                <span class="m-0">Siswa </span>
                                <h4 class="mb-0 counter">{{ $siswa }}</h4>
                                <i class="icon-bg" data-feather="users"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            const btn = document.getElementById('btn');

         btn.addEventListener('click', () => {
           // 👇️ hide button (still takes up space on page)
           btn.style.visibility = 'hidden';

           // 👇️ show div
           const box = document.getElementById('demo');
           box.style.visibility = 'visible';
         });
             </script>

@endsection
