@extends('frontend.frontend_master')
@section('content')


    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('/frontend/assets/img/header/picture5.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Project Details</h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Project Details</li>
        </ol>

      </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- ======= Projet Details Section ======= -->
    <section id="project-details" class="project-details">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="position-relative h-100">
          <div class="slides-1 portfolio-details-slider swiper">
            <div class="swiper-wrapper align-items-center">

              <div class="swiper-slide">
                    <img  src="{{url('/uploads/project/'.$project->image)}}" alt="">
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
              <h2>This is an Project description</h2>
             
              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <li><strong>Project description:-</strong> <span>{{$project->description}}</span></li>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="portfolio-info">
              <h3>Project information</h3>
              <ul>
                <li><strong>Project name:-</strong> <span>{{$project->name}}</span></li>
                <li><strong>Location:-</strong> <span>{{$project->location}}</span></li>
                <li><strong>Start Time:-</strong> <span>{{$project->start_date}}</span></li>
                <li><strong>End Time:-</strong> <span>{{$project->end_date}}</span></li>

                {{-- <li><strong>End Time:-</strong> <a href="#">www.example.com</a></li> --}}
                {{-- <li><a href="#" class="btn-visit align-self-start">Booking</a></li> --}}
              </ul>
            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- End Projet Details Section -->

  </main>
  <!-- End #main -->

  {{-- <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> --}}

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>


@endsection