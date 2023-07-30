<!-- ======= Header ======= -->
<!-- ======= Header ======= -->
<header id="header" class="header d-flex align-items-center fixed-top">
  <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="{{route('home')}}" class="logo d-flex align-items-center">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <!-- <img src="assets/img/logo.png" alt=""> -->
          <img src="{{ url::asset('frontend/assets/img/header/TUSHAR.PNG') }}" alt="Logo">

          <h1><span>Tushar Real Estate Ltd.</span></h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
          <ul>
        
              <li><a href="{{route('about.us')}}">About</a></li>



              <li class="dropdown">
                <a href="#"><span>Project</span> 
                  <i class="bi bi-chevron-down dropdown-indicator"></i>
                </a>
                <ul class="dropdown-menu">
                  <li><a href="{{route('show.project.type','Upcoming')}}">Upcoming</a></li>
                  
                  <li><a href="{{route('show.project.type','Ongoing')}}">Ongoing</a></li>
                  <li><a href="{{route('show.project.type','Completed')}}">Completed</a></li>

                </ul>
                
              </li>
              



              <li class="dropdown">
                <a href="#"><span>Property</span> 
                  <i class="bi bi-chevron-down dropdown-indicator"></i>
                </a>
                <ul class="dropdown-menu">
                  <li><a href="{{route('show.property.type','Luxury Properties')}}">Luxury Properties</a></li>                  
                  <li><a href="{{route('show.property.type','Residential Properties')}}">Residential Properties</a></li>
                  <li><a href="{{route('show.property.type','Commercial Properties')}}">Commercial Properties</a></li>
                </ul>    
              </li>

              {{-- show.property.type --}}

              <li class="dropdown">
                <a href="#"><span>Appoinment</span> 
                    <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                  <ul>
                          @foreach($cats as $cat)
                          <li><a href="">{{$cat->name}}</a></li>
                          @endforeach
                      </li>
                      <li><a href="#">Dropdown 2</a></li>
                  </ul>
              </li>

              <li><a href="{{ route('contact.us') }}">Contact</a></li>


              <li><a type="button" class="btn btn-success" href="{{route('user.login')}}">Login</a></li>
           

              


              
          </ul>
          
      </nav><!-- .navbar -->

  </div>
</header><!-- End Header -->

<!-- End Header -->
 <style>
  .header {
    background-color: #000; /* Set your desired background color here */
    padding: 15px 0;
    z-index: 9999;
    text-emphasis: none;
}

.hero {
    margin-top: 70px; /* Adjust this value to give space below the fixed header */
}

.fixed-top {
    position: fixed;
    top: 0;
    width: 100%;
}

    
    /* Target the navigation links and remove text styling */
    .navbar ul li a {
      /* color: inherit; */
      text-decoration: none;
    }


 </style>