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
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">

                   
                    <a  id="navbarDropdown" href="#" role="button"  data-bs-toggle="dropdown" aria-expanded="false">
                         <img src="/uploads/login/TUSHAR.PNG" alt="Logo" class="logo-img"   role= "button"style="width: 50px;  hight:50px" >
                         {{-- <i class="fas fa-user fa-fw"></i> --}}
                         {{-- class="nav-link dropdown-toggle" --}}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <form action="{{route('admin.logout.form')}}" method="post">
                            @csrf
                             <li><button type="submit" class="dropdown-item" >Logout</button></li>
                        </form>
                    </ul>
                </li>
            </ul>
        </nav>
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
