<!DOCTYPE html>
<html lang="en" class="no-focus">

<head>
    <meta name="description"
        content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework">
    <meta property="og:site_name" content="Codebase">
    <meta property="og:description"
        content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Codebase - Bootstrap 4 Admin Template &amp; UI Framework</title>
    @include('layouts.partilas.scripts_css')
    @stack('styles')
</head>

<body>
    <div id="page-container" class="main-content-boxed">

        <!-- Main Container -->
        <main id="main-container">

            <!-- Page Content -->
            <div class="bg-gd-emerald">
                <div class="hero-static content content-full bg-white invisible" data-toggle="appear">
                    <!-- Header -->
                    <div class="py-30 px-5 text-center">
                        <a class="link-effect font-w700" href="index.html">
                            <i class="si si-fire"></i>
                            <span class="font-size-xl text-primary-dark">code</span><span class="font-size-xl">base</span>
                        </a>
                        <h1 class="h2 font-w700 mt-50 mb-10">Create New Account</h1>
                        <h2 class="h4 font-w400 text-muted mb-0">Please add your details</h2>
                    </div>
                    <!-- END Header -->

                    <!-- Sign Up Form -->
                    <div class="row justify-content-center px-5">
                        <div class="col-sm-8 col-md-6 col-xl-4">
                            <!-- jQuery Validation functionality is initialized with .js-validation-signup class in js/pages/op_auth_signup.min.js which was auto compiled from _es6/pages/op_auth_signup.js -->
                            <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
                            <form class="js-validation-signup" action="{{ route('register.custom') }}" method="post">
                                @csrf
                                <div class="form-group row">
                                    <div class="col-12">
                                        <div class="form-material floating">
                                            <input type="text" class="form-control" id="name" name="name">
                                            <label for="signup-username">Username</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12">
                                        <div class="form-material floating">
                                            <input type="email" class="form-control" id="email" name="email">
                                            <label for="signup-email">Email</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12">
                                        <div class="form-material floating">
                                            <input type="password" class="form-control" id="password" name="password">
                                            <label for="signup-password">Password</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12">
                                        <div class="form-material floating">
                                            <input type="password" class="form-control" id="password" name="password">
                                            <label for="signup-password-confirm">Password Confirmation</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row text-center">
                                    <div class="col-12">
                                        <label class="css-control css-control-primary css-checkbox">
                                            <input type="checkbox" class="css-control-input" id="signup-terms" name="signup-terms">
                                            <span class="css-control-indicator"></span>
                                            I agree to Terms &amp; Conditions
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group row gutters-tiny">
                                    <div class="col-12 mb-10">
                                        <button type="submit" class="btn btn-block btn-hero btn-noborder btn-rounded btn-alt-success">
                                            <i class="si si-user-follow mr-10"></i> Sign Up
                                        </button>
                                    </div>
                                    <div class="col-6">
                                        <a class="btn btn-block btn-noborder btn-rounded btn-alt-secondary" href="#" data-toggle="modal" data-target="#modal-terms">
                                            <i class="si si-book-open text-muted mr-10"></i> Read Terms
                                        </a>
                                    </div>
                                    <div class="col-6">
                                        <a class="btn btn-block btn-noborder btn-rounded btn-alt-secondary" href="{{ route('login') }}">
                                            <i class="si si-login text-muted mr-10"></i> Sign In
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- END Sign Up Form -->
                </div>
            </div>
            <!-- END Page Content -->

        </main>
        <!-- END Main Container -->
    </div>
    <script src="{{asset('/assets/js/codebase.core.min.js')}}"></script>

    <!--
        Codebase JS

        Custom functionality including Blocks/Layout API as well as other vital and optional helpers
        webpack is putting everything together at assets/_es6/main/app.js
    -->
    <script src="{{asset('/assets/js/codebase.app.min.js')}}"></script>

    <!-- Page JS Plugins -->
    <script src="{{asset('/assets/js/plugins/jquery-validation/jquery.validate.min.js')}}"></script>

    <!-- Page JS Code -->
    <script src="{{asset('/assets/js/pages/op_auth_signup.min.js')}}"></script>
</body>
</html>