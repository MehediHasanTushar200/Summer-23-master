@extends('frontend.frontend_master')
@section('content')


    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('/frontend/assets/img/header/picture4.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Project Details</h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Project Details</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Projet Details Section ======= -->
    <section id="project-details" class="project-details">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="position-relative h-100">
          <div class="slides-1 portfolio-details-slider swiper">
            <div class="swiper-wrapper align-items-center">

              <div class="swiper-slide">
                    <img  src="{{url('/uploads/project/'.$projects->image)}}" alt="">
              </div>

            </div>
            <div class="swiper-pagination"></div>
          </div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>

        </div>

        <div class="row justify-content-between gy-4 mt-4">

          <div class="col-lg-8">
            <div class="portfolio-description">
              <h2>This is an Project information</h2>
              

              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <h6>Description:-{{$projects->description}}</h6>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                
              </div>

             
            </div>
          </div>

          <div class="col-lg-3">
            <div class="portfolio-info">
              <h3>Project information</h3>
              <ul>
                <li><strong>Project name:-</strong> <span>{{$projects->name}}</span></li>
                <li><strong>Location:-</strong> <span>{{$projects->location}}</span></li>
                <li><strong>Start Time:-</strong> <span>{{$projects->start_date}}</span></li>
                <li><strong>End Time:-</strong> <span>{{$projects->end_date}}</span></li>

                {{-- <li><strong>End Time:-</strong> <a href="#">www.example.com</a></li> --}}
                {{-- <li><a href="#" class="btn-visit align-self-start">Booking</a></li> --}}
              </ul>
            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- End Projet Details Section -->


@endsection