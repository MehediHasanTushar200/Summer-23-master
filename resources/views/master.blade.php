<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Tushar Real Estate Ltd.</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="{{URL::asset('backend/css/styles.css')}}" rel="stylesheet" />
{{-- for icon link eidte ,update ,delet --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>

    
   <!-- top bar start -->
           @include('backend.fixed.header')
   <!-- top bar end -->

            <!-- Navbar-->
            
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <!-- sidebar start -->
                     @include('backend.fixed.sidebar')
                <!-- sidebar end -->
            </div>

            <div id="layoutSidenav_content">
                <main>  
                     <!-- dashboard start -->

                        @yield('content')

                     <!-- dashboard end -->
                </main>
                         <!-- footer start -->

                            @include('backend.fixed.footer')
                                        
                         <!-- footer enb -->
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{URL::asset('/backend/js/scripts.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="{{URL::asset('/backend/assets/demo/chart-area-demo.js')}}"></script>
        <script src="{{URL::asset('/backend/assets/demo/chart-bar-demo.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="{{URL::asset('js/datatables-simple-demo.js')}}"></script>
    </body>
</html>
