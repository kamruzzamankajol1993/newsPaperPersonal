<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta property="og:url"           content="{{ url()->current() }}" />
    <meta property="og:type"          content="NEWS" />
    @if(Route::is('singlePost'))
    <meta property="og:title"         content="{{ $news->title }}" />
    <meta property="og:description"   content="{!!  substr(strip_tags($bangladeshPartOnes->paragraph), 0, 100) !!}" />
    <meta property="og:image"         content="{{ asset('/') }}{{ $news->cover_image }}"  />
    @else
    <meta property="og:title"         content="TV19 Online" />
    <meta property="og:description"   content="tv19online.com is one of the most reliable and popular local daily newspaper. We provide latest reliable local news about various categories for 24/7 days." />
    <meta property="og:image"         content="{{ asset('/') }}{{ $logo }}"  />
    @endif


<meta property="og:image:width" content="200"/>
<meta property="og:image:height" content="200"/>

   <title>@yield('title')</title>
   <link rel="icon" href="{{ asset('/') }}{{ $icon }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- CSS
	============================================ -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('/') }}public/newfront/css/bootstrap.min.css">
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{ asset('/') }}public/newfront/css/font-awesome.min.css">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('/') }}public/newfront/css/plugins.css">
    <!-- ycp -->
    <link rel="stylesheet" href="{{ asset('/') }}public/newfront/css/ycp.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('/') }}public/newfront/style.css">
    <!-- Modernizer JS -->
    <script src="{{ asset('/') }}public/newfront/js/vendor/modernizr-3.11.2.min.js"></script>
</head>

<body>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v18.0&appId=771937424778588" nonce="Bkc3btIf"></script>
<!-- Main Wrapper -->
<div id="main-wrapper">

   @include('new_front.include.header')

   @include('new_front.include.breaking')


@yield('body')


    @include('new_front.include.footer')

</div>


<!-- JS
============================================ -->

<!-- jQuery JS -->
<script src="{{ asset('/') }}public/newfront/js/vendor/jquery-3.6.0.min.js"></script>
<script src="{{ asset('/') }}public/newfront/js/vendor/jquery-migrate-3.3.2.min.js"></script>
<!-- Bootstrap JS -->
<script src="{{ asset('/') }}public/newfront/js/bootstrap.bundle.min.js"></script>
<!-- Plugins JS -->
<script src="{{ asset('/') }}public/newfront/js/plugins.js"></script>
<!-- ycp JS -->
<script src="{{ asset('/') }}public/newfront/js/ycp.js"></script>
<!-- Main JS -->
<script src="{{ asset('/') }}public/newfront/js/main.js"></script>

</body>

</html>
