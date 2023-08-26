@extends('frontend.frontend_master')
@section('content')


    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('/frontend/assets/img/contact/image1.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Contact</h2>
        <ol>
          <li><a href="{{route('home')}}">Home</a></li>
          <li>Contact</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
          <div class="col-lg-6">
            <div class="info-item  d-flex flex-column justify-content-center align-items-center">
              <i class="fa fa-map"></i>
              <h3>Our Address</h3>
              <p>241,karim tower,uttara faidabad,sector:6,road:10</p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-3 col-md-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center">
              <i class="fa fa-envelope"></i>
              <h3>Email Us</h3>
              <p>tushar@gmail.com</p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-3 col-md-6">
            <div class="info-item  d-flex flex-column justify-content-center align-items-center">
              <i class="fa fa-phone"></i>
              <h3>Call Us</h3>
              <p>+880 1947481037</p>
            </div>
          </div>
          <!-- End Info Item -->

        </div>

        <div class="row gy-4 mt-1">
{{-- 
          <div class="col-lg-6 ">
            <iframe src="https://www.google.com/maps/place/Heaven+City-32/@23.8743678,90.412291,3a,86y,50.36h,86.95t/data=!3m6!1e1!3m4!1sA6PU2D9vj-SKj0nYhg64Lw!2e0!7i13312!8i6656!4m25!1m15!4m14!1m6!1m2!1s0x3755c4249dd4639d:0x1139c527894ee9a6!2sGreen+Spa+%7C+Thai+Massage+Spa,+8+Rabindra+Sarani,+Dhaka+1230!2m2!1d90.3984444!2d23.8679728!1m6!1m2!1s0x3755c4335bbfdf99:0xd2ef5342f4128220!2sFaidabad+Chowrasta,+Dhaka+1230!2m2!1d90.4117014!2d23.8753131!3m8!1s0x3755c57f0138b9c1:0x5279f895889ea993!8m2!3d23.8744656!4d90.4122998!10e5!14m1!1BCgIgAQ!16s%2Fg%2F11k6xrf6sb?entry=ttu" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div> --}}
          <!-- End Google Maps -->

          <div class="col-lg-6">
            <form action="{{route('frontend.contact.us.store')}}" method="post" role="form" class="php-email-form">
              @csrf
              <div class="row gy-4" >
                <div class="col-lg-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-lg-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>
    </section><!-- End Contact Section -->

@endsection