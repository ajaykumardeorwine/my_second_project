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

    <div id="page-container" class="sidebar-o sidebar-inverse enable-page-overlay side-scroll page-header-fixed">
        @include('layouts.partilas.header')
      
        @yield('content')
        @include('layouts.partilas.footer')
    </div>
    @include('layouts.partilas.scripts.js_scripts')
    @stack('scripts')
</body>


</html>
