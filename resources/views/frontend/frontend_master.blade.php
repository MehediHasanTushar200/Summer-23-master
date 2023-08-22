<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Tushar Real Estate Ltd.</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{URL::asset('frontend/assets/img/favicon.png')}}" rel="icon">
  <link href="{{URL::asset('frontend/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{URL::asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{URL::asset('rontend/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{URL::asset('frontend/assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
  <link href="{{URL::asset('frontend/assets/vendor/aos/aos.css" rel="stylesheet')}}">
  <link href="{{URL::asset('frontend/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{URL::asset('frontend/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

 {{-- toaster sms show --}}
  <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">

    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

 <!-- Toastr JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

 {{-- toaster sms show --}}

  <!-- Template Main CSS File -->
  <link href="{{URL::asset('frontend/assets/css/main.css')}}" rel="stylesheet">
 {{-- toaster css --}}
  <style>
    /* Toastr Styling */
    .toast {
        font-size: 16px;
        line-height: 1.6;
    }

    .toast-success {
        background-color: #51b74b;
    }

    .toast-error {
        background-color: #e74c3c;
    }

    .toast-success .toast-title {
        color: #51b74b;
    }

    .toast-error .toast-title {
        color: #e74c3c;
    }

    .toast-success svg {
        fill: #51b74b;
    }

    .toast-error svg {
        fill: #e74c3c;
    }
 </style>
 {{-- toaster css --}}

  <!-- =======================================================
  * Template Name: UpConstruction
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

          {{-- header start --}}
                @include('frontend.fixed.header')
          {{-- header end--}}




           <!-- start #main -->
               @yield('content')
           <!-- End #main -->



          <!-- ======= Footer ======= -->
              @include('frontend.fixed.footer')
          <!-- End Footer -->
<!-- Your other content -->

<script>
  // Check if the 'toastr' variable is set in the session
  @if(session()->has('toastr'))
      // Show the Toastr notification
      $(document).ready(function () {
          var type = "{{ session('toastr.type') }}";
          var message = "{{ session('toastr.message') }}";
          toastr[type](message, type.charAt(0).toUpperCase() + type.slice(1));
      });
  @endif
</script>

  <!-- Vendor JS Files -->
  <script src="{{URL::asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{URL::asset('frontend/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{URL::asset('frontend/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{URL::asset('frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{URL::asset('frontend/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{URL::asset('frontend/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{URL::asset('frontend/assets/vendor/php-email-form/validate.js')}}"></script>

  
  <!-- Template Main JS File -->
  <script src="{{URL::asset('frontend/assets/js/main.js')}}"></script>

</body>

</html>