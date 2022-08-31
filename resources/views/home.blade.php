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
                  <h3 class="font-light">Welcome Back, {{ (Auth::user()->name) }}  !!</h3>
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
