<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="viho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, viho admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{('adminlte/assets/images/logo/logo.png')}}" type="image/x-icon">
    <link rel="icon" href="{{ asset('frontend/app/image/101.png') }}" type="image/x-icon" sizes="16x16">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <title>Login - SMP Lukman Al-Hakim</title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="../../css2.css?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">
    <link
        href="../../css2-1.css?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap"
        rel="stylesheet">
    <link
        href="../../css2-2.css?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="{{asset ('assets/css/fontawesome.css')}}">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{asset ('assets/css/icofont.css')}}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{asset ('assets/css/themify.css')}}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{asset ('assets/css/flag-icon.css')}}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{asset ('assets/css/feather-icon.css')}}">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="{{asset ('assets/css/sweetalert2.css')}}">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{asset ('assets/css/bootstrap.css')}}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{asset ('assets/css/style.css')}}">
    <link id="color" rel="stylesheet" href="{{asset ('assets/css/color-1.css')}}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/responsive.css')}}">
</head>

<body>
    <!-- Loader starts-->

    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <section>
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-12">
                    <div class="login-card">
                        <form class="theme-form login-form" method="post" action="{{ route('login')  }}">
                            @csrf

                            <div class="logo-login" style="text-align: center">
                                <img src="{{asset('assets/images/logo/logo-1.png')}}"  alt="" width="150">
                            </div>
                            <h4 class="text-center" style="margin-bottom: 20px;">Login</h4>
                            <h6>Welcome back! Log in to your account.</h6>
                            <div class="form-group">
                                <label>Email Address</label>
                                <div class="input-group">
                                    <span class="input-group-text material-symbols-outlined">
                                        mail
                                        </span>
                                    <input class="form-control
                                    @error('email')
                                        is-invalid
                                    @enderror
                                    " autofocus type="email" required=""
                                        placeholder="Test@gmail.com" name="email">
                                </div>
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror

                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <div class="input-group"><span class="input-group-text material-symbols-outlined">
                                    lock
                                    </span>
                                    <input class="form-control
                                    @error('password')
                                    is-invalid
                                     @enderror
                                    " type="password" name="password" required=""
                                        placeholder="*********" name="password">
                                    <div class="show-hide"><span class="show"> </span></div>
                                </div>
                                @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="d-block" for="chk-ani3"> <input class="checkbox_animated" id="chk-ani3" type="checkbox" style="margin-left: 5px;"> Remember me </label>
                                <a class="link" href="forget-password.html">Forgot password?</a>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary btn-block" type="submit" style="margin-top: 50px;">Masuk</button>
                            </div>
                            {{-- <div class="login-social-title">
                                <h5>Sign in with</h5>
                            </div>
                            <div class="form-group">
                                <ul class="login-social">
                                    <li><a href="../../login.html" target="_blank"><i data-feather="linkedin"></i></a>
                                    </li>
                                    <li><a href="../../login.html" target="_blank"><i data-feather="twitter"></i></a>
                                    </li>
                                    <li><a href="../../login.html" target="_blank"><i
                                                data-feather="facebook"></i></a></li>
                                    <li><a href="https://www.instagram.com/login" target="_blank"><i
                                                data-feather="instagram"> </i></a></li>
                                </ul>
                            </div>
                            <p>Don't have account?<a class="ms-2" href="sign-up.html">Create Account</a></p> --}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- page-wrapper end-->
    <!-- latest jquery-->

    <!-- Plugin used-->
</body>

</html>
