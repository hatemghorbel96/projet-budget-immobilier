<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="utf-8">
    <title>{{ config('app.name', 'Budget Immobilier ') }}</title>
    <!-- SEO Meta Tags-->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Finder - Directory &amp; Listings Bootstrap Template">
    <meta name="keywords" content="bootstrap, business, directory, listings, e-commerce, car dealer, city guide, real estate, job board, user account, multipurpose, ui kit, html5, css3, javascript, gallery, slider, touch">
    <meta name="author" content="Createx Studio">
    
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon and Touch Icons-->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('favicon-16x16.png')}}">
    <link rel="manifest" href="site.webmanifest">
    <link rel="mask-icon" color="#5bbad5" href="safari-pinned-tab.svg">
    <meta name="msapplication-TileColor" content="#766df4">
    <meta name="theme-color" content="#ffffff">
    <!-- Page loading styles-->
   
    <!-- Page loading scripts-->
   
    <!-- Vendor Styles-->
    <link rel="stylesheet" href="{{asset('front/assets/vendor/simplebar/dist/simplebar.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/vendor/nouislider/dist/nouislider.min.css')}}" >
    <link rel="stylesheet"  href="{{asset('front/assets/vendor/tiny-slider/dist/tiny-slider.css')}}"/>
    <!-- Main Theme Styles + Bootstrap-->

   <link rel="stylesheet" href="{{asset('front/assets/vendor/lightgallery/css/lightgallery-bundle.min.css')}}" >
    <link rel="stylesheet" href="{{asset('front/assets/vendor/flatpickr/dist/flatpickr.min.css')}}"  >
    <link rel="stylesheet" href="{{asset('front/assets/css/theme.min.css')}}" >
    <!-- Google Tag Manager-->
   
  </head>
  <!-- Body-->
  <body >
   
    
    <!-- Page loading spinner-->
    {{-- <div class="page-loading active">
      <div class="page-loading-inner">
        <div class="page-spinner"></div><span>Loading...</span>
      </div>
    </div> --}}
    <main class="page-wrapper">
      <!-- Sign In Modal-->
      @php
      $route = Route::current()->getName();
      @endphp
      <!-- Navbar-->
      @if($route ==  'login')
      @else
      @include('front.body.header')
      @endif
      <!-- Page content-->
      <!-- Property cost calculator modal-->
      {{-- @include('front.body.modals') --}}
      @yield('main')
    </main>
    <!-- Footer-->
    
    @if($route ==  'login')
    @else
    @include('front.body.footer')
    @endif
    <!-- Back to top button-->
    <a class="btn-scroll-top" href="#top" data-scroll><span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span><i class="btn-scroll-top-icon fi-chevron-up">   </i></a>
    <!-- Vendor scrits: js libraries and plugins-->
    <script src="{{asset('front/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('front/assets/vendor/simplebar/dist/simplebar.min.js')}}"></script>
    <script src="{{asset('front/assets/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js')}}"></script>
    <script src="{{asset('front/assets/vendor/nouislider/dist/nouislider.min.js')}}"></script>
    <script src="{{asset('front/assets/vendor/tiny-slider/dist/min/tiny-slider.js')}}"></script>
    <!-- Main theme script-->




    <script src="{{asset('front/assets/vendor/lightgallery/lightgallery.min.js')}}"></script>
    <script src="{{asset('front/assets/vendor/lightgallery/plugins/fullscreen/lg-fullscreen.min.js')}}"></script>
    <script src="{{asset('front/assets/vendor/lightgallery/plugins/zoom/lg-zoom.min.js')}}"></script>
    <script src="{{asset('front/assets/vendor/lightgallery/plugins/thumbnail/lg-thumbnail.min.js')}}"></script>
    <script src="{{asset('front/assets/vendor/flatpickr/dist/flatpickr.min.js')}}"></script>



    <script src="{{asset('front/assets/js/theme.min.js')}}"></script>
 
    
  </body>


</html>