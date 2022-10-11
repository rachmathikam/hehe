<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,200,0,200" />
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="{{ asset('frontend/app/image/101.png') }}" type="image/x-icon" sizes="16x16">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('frontend/app/style.css') }}">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

    <link rel="stylesheet" href="{{ asset('frontend/app/carousel/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/app/carousel/css/owl.theme.default.min.css') }}">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
		<!-- <link rel="stylesheet" href="app/carousel/css/style.css"> -->
    <link rel="stylesheet" href="{{ asset('frontend/app/assets/css/style.css') }}">
</head>


<body>

  <header class="navbar p-5 mb-5">
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top px-5 shadow-sm p-3 mb-5 bg-white">
      <div class="container-fluid">
        <img src="{{ asset('frontend/app/image/101.png') }}" class="logo" alt="" width="70">
        <a class="navbar-brand" href="#">
          SMP INTEGRAL LUQMAN AL-HAKIM
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav" style="margin-left: auto;">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Beranda</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Tentang Kami
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="visixmisi.html">Visi-Misi</a></li>
                <li><a class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Tentang Kami</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Galery
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#galery">Galary Foto</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Galery Video</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#berita">Berita</a>
            </li>
            <li class="nav-item">
              <a href="http://127.0.0.1:8000/login"><button class="btn login  btn-xs" data-toggle="collapse" data-target="#"><span
                  class="material-symbols-outlined">
                  login
                </span> login</button></a>
            </li>

          </ul>
        </div>
      </div>
    </nav>
  </header>
  <!-- hero-header -->
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" style="margin-top: -65px;">
    <path fill="#24695c" fill-opacity="1"
      d="M0,0L30,26.7C60,53,120,107,180,133.3C240,160,300,160,360,154.7C420,149,480,139,540,144C600,149,660,171,720,181.3C780,192,840,192,900,176C960,160,1020,128,1080,138.7C1140,149,1200,203,1260,229.3C1320,256,1380,256,1410,256L1440,256L1440,0L1410,0C1380,0,1320,0,1260,0C1200,0,1140,0,1080,0C1020,0,960,0,900,0C840,0,780,0,720,0C660,0,600,0,540,0C480,0,420,0,360,0C300,0,240,0,180,0C120,0,60,0,30,0L0,0Z">
    </path>
  </svg>
  <div class="header-image mt-5">
    <img src="{{ asset('frontend/app/image/101.png') }}" alt="" width="150">
  </div>
  <div class="container overflow-hidden">
    <div class="row gx-5 mb-5">
      <div class="col">
        <div class="p-3">
          <h1 class="judul-h1">
            SMP INTEGRAL LUQMAN AL-HAKIM SUMENEP
          </h1>
          <p style="font-size:12px; font-family: 'Poppins', sans-serif;">
            memberi sarana bagi anak didik untuk menempuh pendidikan yang sesuai dengan ilmu agama Islam serta
            menciptakan generasi penerus bangsa yang cerdas namun juga memiliki pedoman yang kuat pada agama.
          </p>
          <button class="btn-join btn-xs p-2">Join Now</button>
        </div>
      </div>
      <div class="col">
        <div class="stage">
          <div class="box bounce-2" style="margin-bottom: 100px; margin-left:150px;">
            <img src="{{ asset('frontend/app/image/101.png') }}" width="65%" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>

  <h3 class="text-center"
  style="color:#24695c; font-style: 'Poppins', sans-serif; font-weight: 700; text-transform: uppercase;">SMP Integral Luqman AL-Hakim</h3>
<h6 class="text-center"
  style="color:#24695c; font-style: 'Poppins', sans-serif; font-weight: 700; text-transform: uppercase;">Fact</h6>
  <div class="text-center spasi" style="margin-bottom: 100px;"></div>
<div class="container-xxl px-5 mb-5 text-center" style="background-color:#24695c;">
  <div class="row g-5">
    <div class="col-lg-3 col-sm-6 wow p-3 mb-5">
      <div class="card text-center" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title ">1012</h5>
          <h6 class="card-subtitle mb-2 text-white">Total Siswa Tahun 2021</h6>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-sm-6 wow pt-3 mb-5">
      <div class="card text-center" style="width: 18rem; ">
        <div class="card-body">
          <h5 class="card-title">{{ $siswa }}</h5>
          <h6 class="card-subtitle mb-2 text-white">Siswa 2022</h6>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-sm-6 wow pt-3 mb-5">
      <div class="card text-center" style="width: 18rem; background-color:#24695c !important;">
        <div class="card-body">
          <h5 class="card-title">{{ $guru }}</h5>
          <h6 class="card-subtitle mb-2 text-white">Guru</h6>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-sm-6 wow pt-3 mb-5">
      <div class="card text-center" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title ">{{ $kelas }}</h5>
          <h6 class="card-subtitle mb-2 text-white">Kelas</h6>
        </div>
      </div>
    </div>
  </div>
</div>




  <h3 class="text-center"
    style="color:#24695c; font-style: 'Poppins', sans-serif; font-weight: 700; text-transform: uppercase;">Informasi
  </h3>
  <h6 class="text-center"
    style="color:#24695c; font-style: 'Poppins', sans-serif; font-weight: 700; text-transform: uppercase;">Siswa Baru
  </h6>
  <div class="text-center spasi">
  </div>
  <div class="container-xxl py-5 mb-5">
    <div class="container">
      <div class="row g-4">
        <div class="col-lg-4 col-sm-6 wow">
          <div class="service-item text-center pt-3">
            <div class="p-4">
              <a href="" style="text-decoration: none;">
                <i class="fa fa-3x fa-solid fa-circle-info"></i>
                <h5 class="mb-3">Informasi Siswa Baru</h5>
                <p>Dapatkan Informasi penerimaan siswa baru </p>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 wow">
          <div class="service-item text-center pt-3">
            <div class="p-4">
              <a href="" style="text-decoration: none;">
                <i class="fa fa-3x fa-duotone fa-file"></i>
                <h5 class="mb-3">Pendaftaran Siswa</h5>
                <p>Pendaftaran Siswa</p>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 wow">
          <div class="service-item text-center pt-3">
            <div class="p-4">
              <a href="" style="text-decoration: none;">
                <i class="fa fa-3x fa-solid fa-star"></i>
                <h5 class="mb-3">Akredetasi</h5>
                <p>Lihat Akredetasi Sekolah</p>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- Berita -->
  <h3 class="text-center"
    style="color:#24695c; font-style: 'Poppins', sans-serif; font-weight: 700; text-transform: uppercase;">Berita</h3>
  <h6 class="text-center"
    style="color:#24695c; font-style: 'Poppins', sans-serif; font-weight: 700; text-transform: uppercase;">SMP Integral Luqman AL-Hakim</h6>
  <div class="text-center spasi"></div>
  <br>

  {{-- berita --}}
  <section class="pt-5 pb-0 card-grid"  id="berita">
    <div class="container ">
      <div class="row g-4">
        <!-- Left big card -->
        <div class="col-lg-6">
          <div class="card card-overlay-bottom card-grid-lg card-bg-scale" style="background-image:url(frontend/app/image/berita2.jpeg); background-position: center left; background-size: cover;">
            <!-- Card featured -->
            <!-- Card Image overlay -->
            <div class="card-img-overlay d-flex align-items-center p-3 p-sm-4">
              <div class="w-100 mt-auto">
                <!-- Card category -->
                <div class="badge text-bg-danger mt-5">
                    <span class="p-2" style="background-color: #24695c; border-radius: 15px;"><i class="fas fa-circle me-2 small fw-bold" style="color:white"></i>TRENDING</span></div>
                <!-- Card title -->
                <h3 class="text-white">Pelajaran Prakarya yang di lakukan olah siswa SMP Luqman Al-Hakim</h3>
                <!-- Card info -->
                <ul class="nav nav-divider text-white-force align-items-center d-none d-sm-inline-block">
                  <li class="nav-item">
                    <div class="nav-link">
                      <div class="d-flex align-items-center text-white position-relative">
                        <div class="avatar avatar-sm">
                    </div>
                  </li>
                  <li class="nav-item text-white">Nov 15, 2022</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- Right small cards -->
        <div class="col-lg-6">
          <div class="row g-4">
            <!-- Card item START -->
            <div class="col-12">
              <div class="card card-overlay-bottom card-grid-sm card-bg-scale" style="background-image:url(frontend/app/image/berita1.jpg); background-position: center left; background-size: cover;">
                <!-- Card Image -->
                <!-- Card Image overlay -->
                <div class="card-img-overlay d-flex align-items-center p-3 p-sm-4">
                  <div class="w-100 mt-auto">
                    <!-- Card category -->
                    <a href="#" class="badge text-bg-warning mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Technology</a>
                    <!-- Card title -->
                    <h4 class="text-white">Best Pinterest boards for learning about business</h4>
                    <!-- Card info -->
                    <ul class="nav nav-divider text-white-force align-items-center d-none d-sm-inline-block">
                      <li class="nav-item text-white">Aug 18, 2022</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <!-- Card item END -->
            <!-- Card item START -->
                 <div class="col-md-6">
              <div class="card card-overlay-bottom card-grid-sm card-bg-scale" style="background-image:url(frontend/app/image/bg-5.jpeg); background-position: center left; background-size: cover;">
                <!-- Card Image overlay -->
                <div class="card-img-overlay d-flex align-items-center p-3 p-sm-4">
                  <div class="w-100 mt-auto">
                    <!-- Card category -->
                    <div class="badge text-bg-success mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Business</div>
                    <!-- Card title -->
                    <h6 class="text-white">Five intermediate guide to business</h6>
                    <!-- Card info -->
                    <ul class="nav nav-divider text-white-force align-items-center d-none d-sm-inline-block">
                      <li class="nav-item text-white">Jun 03, 2022</li>
                    </ul>
                  </div>
                </div>
                 </div>
            </div>
            <!-- Card item END -->
            <!-- Card item START -->
            <div class="col-md-6">
              <div class="card card-overlay-bottom card-grid-sm card-bg-scale" style="background-image:url(frontend/app/image/bg-3.jpeg); background-position: center left; background-size: cover;">
                <!-- Card Image overlay -->
                <div class="card-img-overlay d-flex align-items-center p-3 p-sm-4">
                  <div class="w-100 mt-auto">
                    <!-- Card category -->
                    <a href="#" class="badge text-bg-info mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Sports</a>
                    <!-- Card title -->
                    <h6 class="text-white">15 reasons to choose startup</h6>
                    <!-- Card info -->
                    <ul class="nav nav-divider text-white-force align-items-center d-none d-sm-inline-block">
                      <li class="nav-item text-white">Jan 28, 2022</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <!-- Card item END -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="container mb-5">
      <button class="btn-lainnya btn-lg p-3 mt-5">Lihat Berita Lainnya</button>
  </div>


  {{-- end berita --}}
        <!-- Galeri -->
        <h3 class="text-center mt-5"
        style="color:#24695c; font-style: 'Poppins', sans-serif; font-weight: 700; text-transform: uppercase;">Galeri</h3>
        <h6 class="text-center"
    style="color:#24695c; font-style: 'Poppins', sans-serif; font-weight: 700; text-transform: uppercase;">Foto</h6>
        <div class="text-center spasi" style="margin-bottom:20px;"id="galery"></div>

        <section class="ftco-section mb-5 pt-5">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
            </div>
            <div class="col-md-12">
              <div class="featured-carousel owl-carousel">
                <div class="item">
                  <div class="work">
                    <div class="img d-flex align-items-center justify-content-center rounded" style="background-image: url({{ asset('frontend/app/image/about1.jpeg') }});">
                      <a href="#" class="icon d-flex align-items-center justify-content-center">
                        <span class="ion-ios-search"></span>
                      </a>
                    </div>
                    <div class="text pt-3 w-100 text-center">
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="work">
                    <div class="img d-flex align-items-center justify-content-center rounded" style="background-image: url({{ asset('frontend/app/image/about2.jpeg') }});">
                      <a href="#" class="icon d-flex align-items-center justify-content-center">
                        <span class="ion-ios-search"></span>
                      </a>
                    </div>
                    <div class="text pt-3 w-100 text-center">
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="work">
                    <div class="img d-flex align-items-center justify-content-center rounded" style="background-image: url({{ asset('frontend/app/image/berita1.jpg') }})">
                      <a href="#" class="icon d-flex align-items-center justify-content-center">
                        <span class="ion-ios-search"></span>
                      </a>
                    </div>
                    <div class="text pt-3 w-100 text-center">
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="work">
                    <div class="img d-flex align-items-center justify-content-center rounded" style="background-image: url({{ asset('frontend/app/image/bg-3.jpeg') }});">
                      <a href="#" class="icon d-flex align-items-center justify-content-center">
                        <span class="ion-ios-search"></span>
                      </a>
                    </div>
                    <div class="text pt-3 w-100 text-center">
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="work">
                    <div class="img d-flex align-items-center justify-content-center rounded" style="background-image: url({{ asset('frontend/app/image/bg-4.jpeg') }});">
                      <a href="#" class="icon d-flex align-items-center justify-content-center">
                        <span class="ion-ios-search"></span>
                      </a>
                    </div>
                    <div class="text pt-3 w-100 text-center">
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="work">
                    <div class="img d-flex align-items-center justify-content-center rounded" style="background-image: url({{ asset('frontend/app/image/data-1.jpeg') }});">
                      <a href="#" class="icon d-flex align-items-center justify-content-center">
                        <span class="ion-ios-search"></span>
                      </a>
                    </div>
                    <div class="text pt-3 w-100 text-center">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <button class="btn-lainnya btn-lg p-3 ">Lihat Galeri Foto Lainnya</button>
        </div>
        {{-- <button class="btn-lainnya btn-lg p-2 mt-5">Lihat Galeri Lainnya</button> --}}
      </section>
      <!--End Galeri  -->
        <!-- Footer -->
        <hr>
        <footer class="text-center text-lg-start bg-white text-muted">
          <div class="container text-center text-md-start mt-5">
            <div class="row mt-3">
              <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                <img class="img-center" src="{{ asset('frontend/app/image/101.png') }}" width="100" alt="" style=" margin-bottom:45px ;">
                <h6 class="text-uppercase fw-bold mb-3" style="font-size: 17px;">
                  SMP INTEGRAL LUQMAN AL-HAKIM
                </h6>
              </div>
              <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                <h6 class="text-uppercase fw-bold mb-4">
                  KATEGORI
                </h6>
                <p>
                  <a href="#berita" class="text-reset">Berita</a>
                </p>
                <p>
                  <a href="#!" class="text-reset">Tentang Kami</a>
                </p>
                <p>
                  <a href="#!" class="text-reset">Galeri</a>
                </p>
                <p>
                  <a href="#!" class="text-reset">Hubungi Kami</a>
                </p>
              </div>
              <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                <p><i class="fas fa-home me-3 text-secondary"></i> Jl. Payudan Barat No. 03, Pabian, Kec. Kota Sumenep,
                  Kab. Sumenep, Prov. Jawa Timur, 69411</p>
                <p>
                  <i class="fas fa-envelope me-3 text-secondary"></i>
                  smpintegralalhakim.com
                </p>
                <p><i class="fas fa-phone me-3 text-secondary"></i> +628214299037</p>
              </div>
            </div>
          </div>
          </section>
          <!-- Copyright -->
          <div class="text-center p-4" style="background-color: #e9f0ee; color: #24695c;">
            © 2021 Copyright:
            <a class="text-reset fw-bold" href="https://mdbootstrap.com/">SMP Integral Luqman Al-Hakim</a>
          </div>
          <!-- End Footer -->

          <script src="{{ asset('frontend/app/carousel/js/jquery.min.js') }}"></script>
          <script src="{{ asset('frontend/app/carousel/js/popper.js') }}"></script>
          <script src="{{ asset('frontend/app/carousel/js/bootstrap.min.js') }}"></script>
          <script src="{{ asset('frontend/app/carousel/js/owl.carousel.min.js') }}"></script>
          <script src="{{ asset('frontend/app/carousel/js/main.js') }}"></script>

          <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

          <!-- Option 2: Separate Popper and Bootstrap JS -->

          <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
            integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
            crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
            integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
            crossorigin="anonymous"></script>
</body>
<script>
  var jqueryObject = $("navbar");
  $(function () {
    $(window).scroll(function () {
      if ($(window).scrollTop() <= 130) {
        $('navbar').removeClass('scroll_navbar')

      } else {
        $('.navbar').addClass(' scroll_navbar')
      }
    })
  })
</script>


</html>
