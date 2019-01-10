<!DOCTYPE html>
<!-- 
Template Name: Pangong - Responsive Bootstrap 4 Admin Dashboard Template
Author: Hencework
Contact: https://hencework.ticksy.com/
License: You must have a valid license purchased only from themeforest to legally use the template for your project.
-->
<html lang="en">


<!-- Mirrored from hencework.com/theme/pangong/classic/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Dec 2018 04:38:32 GMT -->
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Improving India Login</title>
    <meta name="description" content="A responsive bootstrap 4 admin dashboard template by hencework" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Custom CSS -->
    <link href="{{asset('public/backend/dist/css/style.css')}}" rel="stylesheet" type="text/css">
</head>

<body>
<!-- Preloader -->
<div class="preloader-it">
    <div class="loader-pendulums"></div>
</div>
<!-- /Preloader -->

<!-- HK Wrapper -->
<div class="hk-wrapper">

    <!-- Main Content -->
    <div class="hk-pg-wrapper hk-auth-wrapper">
        <header class="d-flex justify-content-between align-items-center">
            <a class="d-flex auth-brand" href="#">
                <img class="brand-img" src="{{asset('public/backend/dist/img/logo-dark.png')}}" alt="brand" />
            </a>
            <div class="btn-group btn-group-sm">
                <a href="#" class="btn btn-outline-secondary">Help</a>
                <a href="#" class="btn btn-outline-secondary">About Us</a>
            </div>
        </header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-5 pa-0">
                    <div id="owl_demo_1" class="owl-carousel dots-on-item owl-theme">
                        <div class="fadeOut item auth-cover-img overlay-wrap" style="background-image:url({{asset('public/backend/dist/img/bg2.jpg')}});">
                            <div class="auth-cover-info py-xl-0 pt-100 pb-50">
                                <div class="auth-cover-content text-center w-xxl-75 w-sm-90 w-xs-100">
                                    <h1 class="display-3 text-white mb-20">Understand and look deep into nature.</h1>
                                    <p class="text-white">The purpose of lorem ipsum is to create a natural looking block of text (sentence, paragraph, page, etc.) that doesn't distract from the layout. Again during the 90s as desktop publishers bundled the text with their software.</p>
                                </div>
                            </div>
                            <div class="bg-overlay bg-trans-dark-50"></div>
                        </div>
                        <div class="fadeOut item auth-cover-img overlay-wrap" style="background-image:url({{asset('public/backend/dist/img/bg1.jpg')}});">
                            <div class="auth-cover-info py-xl-0 pt-100 pb-50">
                                <div class="auth-cover-content text-center w-xxl-75 w-sm-90 w-xs-100">
                                    <h1 class="display-3 text-white mb-20">Experience matters for good applications.</h1>
                                    <p class="text-white">The passage experienced a surge in popularity during the 1960s when Letraset used it on their dry-transfer sheets, and again during the 90s as desktop publishers bundled the text with their software.</p>
                                </div>
                            </div>
                            <div class="bg-overlay bg-trans-dark-50"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 pa-0">
                    <div class="auth-form-wrap py-xl-0 py-50">
                        <div class="auth-form w-xxl-55 w-xl-75 w-sm-90 w-xs-100">



                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <label class="label">Username</label>
                                    <div class="input-group">
                                        <input type="email" id="email" name="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Username">

                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                        @endif
                                        <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="label">Password</label>
                                    <div class="input-group">
                                        <input type="password" id="password" name="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="*********">


                                            <div class="input-group-append">
                                                <span class="input-group-text"><span class="feather-icon"><i data-feather="eye-off"></i></span></span>
                                            </div>

                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary submit-btn btn-block">Login</button>
                                </div>
                                <div class="form-group d-flex justify-content-between">
                                    <div class="form-check form-check-flat mt-0">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" {{ old('remember') ? 'checked' : '' }}> Keep me signed in
                                        </label>
                                    </div>
                                    <a href="{{ route('password.request') }}" class="text-small forgot-password text-black">Forgot Password</a>
                                </div>

                                <div class="text-block text-center my-3">
                                    <span class="text-small font-weight-semibold">Not a member ?</span>
                                    <a href="register.html" class="text-black text-small">Create new account</a>
                                </div>
                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Main Content -->

</div>
<!-- /HK Wrapper -->

<!-- jQuery -->
<script src="{{asset('public/backend/vendors/jquery/dist/jquery.min.js')}}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{asset('public/backend/vendors/popper.js/dist/umd/popper.min.js')}}"></script>
<script src="{{asset('public/backend/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>

<!-- Slimscroll JavaScript -->
<script src="{{asset('public/backend/dist/js/jquery.slimscroll.js')}}"></script>

<!-- Fancy Dropdown JS -->
<script src="{{asset('public/backend/dist/js/dropdown-bootstrap-extended.js')}}"></script>

<!-- Owl JavaScript -->
<script src="{{asset('public/backend/vendors/owl.carousel/dist/owl.carousel.min.js')}}"></script>

<!-- FeatherIcons JavaScript -->
<script src="{{asset('public/backend/dist/js/feather.min.js')}}"></script>

<!-- Init JavaScript -->
<script src="{{asset('public/backend/dist/js/init.js')}}"></script>
<script src="{{asset('public/backend/dist/js/login-data.js')}}"></script>
</body>


<!-- Mirrored from hencework.com/theme/pangong/classic/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Dec 2018 04:38:33 GMT -->
</html>