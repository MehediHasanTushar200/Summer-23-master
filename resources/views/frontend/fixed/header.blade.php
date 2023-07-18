<!-- ======= Header ======= -->
<header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <img src="{{ asset('frontend/assets/img/header/TUSHAR.PNG') }}" alt="Logo">

        <h1>Tushar Real Estate Ltd<span>.</span></h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.html" class="active">Home</a></li>
          <li><a href="services.html">Services</a></li>
          <li><a href="projects.html">Projects</a></li>
          
          <li class="dropdown"><a href="#"><span>Category</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            
            <ul>
             
              <li class="dropdown">
                <a href="#"><span>Category</span>
                   <i class="bi bi-chevron-down dropdown-indicator"></i></a>

                   @foreach($cats as $cat)
                         <li><a href="">{{$cat->name}}</a></li>
                   @endforeach
              </li>

            <li><a href="#">Dropdown 2</a></li>
              
            </ul>
          </li>
          <li><a href="{{ route('contact.us') }}">Contact</a></li>
         
          <li><a   type="button" class="btn btn-success" href="{{route('user.login')}}">Login</a></li>
         
         <li> <a  type="button" class="btn btn-success" href="{{route('user.registration')}}">Registration</a></li>
        
        </ul>


      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">

    <div class="info d-flex align-items-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <h2 data-aos="fade-down">Welcome to <span>
                Tushar Real Estate Ltd.</span></h2>
            <p data-aos="fade-up">Welcome to Tushar Real Estate Ltd., your trusted partner in the world of real estate. With our experienced team and personalized service, we make your property dreams a reality. and contact us today to experience the Tushar Real Estate Ltd. </p>
            <a data-aos="fade-up" data-aos-delay="200" href="#get-started" class="btn-get-started">Get Started</a>
          </div>
        </div>
      </div>
    </div>
    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

      <div class="carousel-item active" style="background-image: url(frontend/assets/img/header/picture1.jpg)"></div>
      <div class="carousel-item" style="background-image: url(frontend/assets/img/header/picture2.jpg)"></div>
      <div class="carousel-item" style="background-image: url(frontend/assets/img/header/picture3.jpg)"></div>
      <div class="carousel-item" style="background-image: url(frontend/assets/img/header/picture4.jpg)"></div>
      <div class="carousel-item" style="background-image: url(frontend/assets/img/header/picture5.jpg)"></div>

      <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>

  </section>