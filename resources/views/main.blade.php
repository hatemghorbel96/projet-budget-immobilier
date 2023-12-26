<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="utf-8">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- SEO Meta Tags-->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Finder - Directory &amp; Listings Bootstrap Template">
    <meta name="keywords" content="bootstrap, business, directory, listings, e-commerce, car dealer, city guide, real estate, job board, user account, multipurpose, ui kit, html5, css3, javascript, gallery, slider, touch">
    <meta name="author" content="Createx Studio">
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon and Touch Icons-->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">
    <link rel="mask-icon" color="#5bbad5" href="safari-pinned-tab.svg">
    <meta name="msapplication-TileColor" content="#766df4">
    <meta name="theme-color" content="#ffffff">
    <!-- Page loading styles-->
   
    <!-- Page loading scripts-->
  
    <!-- Vendor Styles-->
    <link rel="preload" href="{{asset('front/assets/vendor/simplebar/dist/simplebar.min.css')}}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="{{asset('front/assets/vendor/nouislider/dist/nouislider.min.css')}}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="stylesheet" media="screen" href="{{asset('front/assets/vendor/tiny-slider/dist/tiny-slider.css')}}"/>
    <!-- Main Theme Styles + Bootstrap-->

    <link rel="preload" href="{{asset('front/assets/vendor/lightgallery/css/lightgallery-bundle.min.css')}}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="{{asset('front/assets/vendor/flatpickr/dist/flatpickr.min.css')}}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="{{asset('front/assets/css/theme.min.css')}}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <!-- Google Tag Manager-->
    <style>
      .page-loading {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100%;
        -webkit-transition: all .4s .2s ease-in-out;
        transition: all .4s .2s ease-in-out;
        background-color: #fff;
        opacity: 0;
        visibility: hidden;
        z-index: 9999;
      }
      .page-loading.active {
        opacity: 1;
        visibility: visible;
      }
      .page-loading-inner {
        position: absolute;
        top: 50%;
        left: 0;
        width: 100%;
        text-align: center;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
        -webkit-transition: opacity .2s ease-in-out;
        transition: opacity .2s ease-in-out;
        opacity: 0;
      }
      .page-loading.active > .page-loading-inner {
        opacity: 1;
      }
      .page-loading-inner > span {
        display: block;
        font-size: 1rem;
        font-weight: normal;
        color: #666276;;
      }
      .page-spinner {
        display: inline-block;
        width: 2.75rem;
        height: 2.75rem;
        margin-bottom: .75rem;
        vertical-align: text-bottom;
        border: .15em solid #bbb7c5;
        border-right-color: transparent;
        border-radius: 50%;
        -webkit-animation: spinner .75s linear infinite;
        animation: spinner .75s linear infinite;
      }
      @-webkit-keyframes spinner {
        100% {
          -webkit-transform: rotate(360deg);
          transform: rotate(360deg);
        }
      }
      @keyframes spinner {
        100% {
          -webkit-transform: rotate(360deg);
          transform: rotate(360deg);
        }
      }
      
    </style>
  </head>
  <!-- Body-->
  <body>
   
    
    <!-- Page loading spinner-->
    <div class="page-loading active">
      <div class="page-loading-inner">
        <div class="page-spinner"></div><span>Loading...</span>
      </div>
    </div>
    <main class="page-wrapper">
      <!-- Sign In Modal-->
      
      <!-- Navbar-->
      @include('front.body.header')
      <!-- Page content-->
      <!-- Property cost calculator modal-->
      @include('front.body.modals')
      @yield('main')
    </main>
    <!-- Footer-->
    @include('front.body.footer')
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
    <script>
      (function () {
        window.addEventListener('load', function () {
          var preloader = document.querySelector('.page-loading');
          preloader.classList.remove('active');
          setTimeout(function () {
            preloader.remove();
          }, 200); // Adjust the timeout as needed
        });
      })();
    </script>
    
  </body>


</html>