<!DOCTYPE html>
<html lang="en" data-menu-color="brand">

    <head>
        <meta charset="utf-8" />
        <title>Logout | Ubold - Responsive Bootstrap 5 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('admin/assets/images/favicon.ico') }}">

		<!-- Theme Config Js -->
		<script src="{{ asset('admin/assets/js/head.js') }}"></script>

		<!-- Bootstrap css -->
		<link href="{{ asset('admin/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />

		<!-- App css -->
		<link href="{{ asset('admin/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />

		<!-- Icons css -->
		<link href="{{ asset('admin/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    </head>

    <body class="auth-fluid-pages pb-0">

        <div class="auth-fluid">
            <!--Auth fluid left content -->
            <div class="auth-fluid-form-box">
                <div class="align-items-center d-flex justify-content-center h-100">
                    <div class="p-3">

                        <!-- Logo -->
                        <div class="auth-brand text-center text-lg-start">
                            <div class="auth-brand">
                                {{--  <a href="index.html" class="logo logo-dark text-center">
                                    <span class="logo-lg">
                                        <img src="{{ asset('admin/assets/images/logo-dark.png') }}" alt="" height="22">
                                    </span>
                                </a>  --}}

                                {{--  <a href="index.html" class="logo logo-light text-center">
                                    <span class="logo-lg">
                                        <img src="{{ asset('admin/assets/images/logo-light.png') }}" alt="" height="22">
                                    </span>
                                </a>  --}}
                            </div>
                        </div>

                        <div class="text-center w-100">
                            <div class="mt-4">
                                <div class="logout-checkmark">
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130.2 130.2">
                                        <circle class="path circle" fill="none" stroke="#4bd396" stroke-width="6" stroke-miterlimit="10" cx="65.1" cy="65.1" r="62.1"/>
                                        <polyline class="path check" fill="none" stroke="#4bd396" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" points="100.2,40.2 51.5,88.8 29.8,67.5 "/>
                                    </svg>
                                </div>
                            </div>

                            <h3>See you again !</h3>
                            <p class="text-muted"> You are now successfully sign out. </p>
                            {{--  <p class="text-black-10">Back to <a href="{{ route('admin.login') }}" class="text-black ms-1"><b>Sign In</b></a></p>  --}}

                        </div>

                        <!-- Footer-->
                        <footer class="footer footer-alt">
                            {{--  <p class="text-muted">Don t have an account? <a href="auth-register-2.html" class="text-muted ms-1"><b>Sign Up</b></a></p>  --}}
                            <p class="text-black-10">Back to <a href="{{ route('admin.login') }}" class="text-black ms-1"><b>Sign In</b></a></p>
                        </footer>

                    </div> <!-- end .card-body -->
                </div> <!-- end .align-items-center.d-flex.h-100-->
            </div>
            <!-- end auth-fluid-form-box-->

            <!-- Auth fluid right content -->
            <div class="auth-fluid-right text-center">
                <div class="auth-user-testimonial">
                    <h2 class="mb-3 text-white">I love !</h2>
                    <p class="lead"><i class="mdi mdi-format-quote-open"></i>
                        I love my work, <br> I love the people I work with, <br> I do the best I can. <i class="mdi mdi-format-quote-close"></i>
                    </p>

                    <h5 class="text-white">
                        - Fadlisaad (Mandy Patinkin)
                    </h5>
                </div> <!-- end auth-user-testimonial-->
            </div>
            <!-- end Auth fluid right content -->
        </div>

    </body>
</html>
