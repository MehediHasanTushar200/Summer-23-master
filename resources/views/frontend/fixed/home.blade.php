@extends('frontend.frontend_master')
@section('content')



<section id="hero" class="hero">

  <div class="info d-flex align-items-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 text-center">
          <h2 data-aos="fade-down">Welcome to <span>
              Tushar Real Estate Ltd.</span></h2>
          {{-- search button --}}
              <form action="{{route('search')}}">
              
              <div class="input-group rounded">
              
                <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                <span class="input-group-text border-0" id="search-addon">
                  <i type="button" class="fas fa-search"></i>
                </span>
              
              </div>
            
              </form> 



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
    {{-- "{{URL::asset('frontend/assets/vendor/php-email-form/validate.js')}}" --}}

    <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
    </a>

    <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
    </a>

  </div>

</section>
<main id="main">



    <!-- ======= Get Started Section ======= -->
    <section id="get-started" class="get-started section-bg">
      <div class="container">

        <div class="row justify-content-between gy-4">

          <div class="col-lg-6 d-flex align-items-center" data-aos="fade-up">
            <div class="content">
              <h3>Minus hic non reiciendis ea possimus at quia.</h3>
              <p>Rem id rerum. Debitis deserunt quidem delectus expedita ducimus dolor. Aut iusto ipsa. Eos ipsum nobis ipsa soluta itaque perspiciatis fuga ipsum perspiciatis. Eum amet fugiat totam nisi possimus ut delectus dicta.
              <p>Aliquam velit deserunt autem. Inventore et saepe. Tenetur suscipit eligendi labore culpa eos. Deserunt porro magni qui necessitatibus dolorem at animi cupiditate.</p>
            </div>
          </div>

          <div class="col-lg-5" data-aos="fade">
            <form action="forms/quote.php" method="post" class="php-email-form">
              <h3>Get a quote</h3>
              <p>Vel nobis odio laboriosam et hic voluptatem. Inventore vitae totam. Rerum repellendus enim linead sero park flows.</p>
              <div class="row gy-3">

                <div class="col-md-12">
                  <input type="text" name="name" class="form-control" placeholder="Name" required>
                </div>

                <div class="col-md-12 ">
                  <input type="email" class="form-control" name="email" placeholder="Email" required>
                </div>
                <div class="col-md-12">
                  <input type="text" class="form-control" name="phone" placeholder="Phone" required>
                </div>
                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                </div>
                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your quote request has been sent successfully. Thank you!</div>
                  <button type="submit">Get a quote</button>
                </div>
              </div>
            </form>
          </div><!-- End Quote Form -->
        </div>
      </div>
    </section><!-- End Get Started Section -->



{{-- card for 6 card add with logo green colour --}}
<!DOCTYPE html>
<html>
<head>
  <title>Real Estate Company</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <style>
    .card-container {
      display: flex;
      justify-content: space-between;
    }

    .card {
      text-align: center;
      max-width: 150px;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      color: green; /* Set the text color to green */
    }

    .card-icon {
      font-size: 40px;
      margin-bottom: 10px;
      color: green; /* Set the icon color to green */
    }
  </style>
</head>
<body>
  <div class="card-container">
    <div class="card">
      <i class="fas fa-map-marked-alt card-icon"></i>
      <div class="card-title">Prime Locations</div>
    </div>
    <div class="card">
      <i class="fas fa-tools card-icon"></i>
      <div class="card-title">Highest Quality Materials</div>
    </div>
    <div class="card">
      <svg class="card-icon" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50">
        <path fill="#489a5d" d="M 21.5,-0.5 C 23.8333,-0.5 26.1667,-0.5 28.5,-0.5C 32.8886,7.47244 30.5552,11.1391 21.5,10.5C 18.8333,6.83333 18.8333,3.16667 21.5,-0.5 Z"></path>
        <path fill="#499b5e" d="M 21.5,10.5 C 22.7311,11.7177 23.8978,13.051 25,14.5C 26.3822,20.1278 27.5489,25.7945 28.5,31.5C 30.2624,31.3573 31.9291,31.6906 33.5,32.5C 35.594,29.9693 38.2607,29.1359 41.5,30C 43.7983,35.4318 46.4649,40.5985 49.5,45.5C 49.5,46.8333 49.5,48.1667 49.5,49.5C 40.8333,49.5 32.1667,49.5 23.5,49.5C 24.0142,43.6259 26.6809,39.1259 31.5,36C 29.6179,33.8918 27.2846,32.5585 24.5,32C 23.9011,30.3775 23.2344,28.8775 22.5,27.5C 22.719,28.675 22.3857,29.675 21.5,30.5C 20.3914,29.4104 19.3914,29.4104 18.5,30.5C 21.2219,36.157 22.2219,42.157 21.5,48.5C 19.8561,48.7135 18.3561,48.3802 17,47.5C 17.0942,41.5409 15.0942,36.5409 11,32.5C 9.19574,37.5797 7.19574,42.5797 5,47.5C 3.64387,48.3802 2.14387,48.7135 0.5,48.5C 1.6647,39.9976 3.6647,31.6643 6.5,23.5C 5.08601,22.376 3.58601,21.376 2,20.5C 1.33333,19.5 1.33333,18.5 2,17.5C 4.54018,15.2953 6.70685,12.7953 8.5,10C 12.8868,9.29375 17.2201,9.46042 21.5,10.5 Z M 22.5,27.5 C 21.3172,26.4955 19.9839,25.6622 18.5,25C 21.2755,20.7498 22.6088,21.5831 22.5,27.5 Z M 9.5,17.5 C 9.48269,19.0281 8.81602,19.5281 7.5,19C 8.0442,18.2828 8.71087,17.7828 9.5,17.5 Z"></path>
      </svg>
      <div class="card-title">High Grade Construction</div>
    </div>
    <div class="card">
      <i class="fas fa-user-tie card-icon"></i>
      <div class="card-title">21 Years of Experience</div>
    </div>
    <div class="card">
      <i class="fas fa-home card-icon"></i>
      <div class="card-title">Over 6000 Apartments</div>
    </div>
    <div class="card">
      <i class="fas fa-pencil-ruler card-icon"></i>
      <div class="card-title">Modern Design Choices</div>
    </div>
  </div>
</body>
</html>

{{-- end card --}}


{{-- 2nd card---------------------------------------------------------------------------------- --}}
  <!DOCTYPE html>
  <html>
  <head>
      <title>Your Page Title</title>
      <style>
         
          .elementor-widget-image img {
              filter: grayscale(0%); /* This makes the logo green */
          }
         
          .elementor-widget-heading b {
              color: green; /* This makes the text green */
          }
      </style>
  </head>
  <body>
{{-- image middle ----------------------------------------------------------------------------------}}
    <section class="elementor-section elementor-top-section elementor-element elementor-element-6673d4b elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="6673d4b" data-element_type="section">
      <div class="elementor-container elementor-column-gap-default two_elementor_element">
          <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-306fbc4 two_elementor_element" data-id="306fbc4" data-element_type="column">
              <div class="elementor-widget-wrap elementor-element-populated two_elementor_element">
                  <div class="elementor-element elementor-element-d214df0 elementor-widget elementor-widget-image two_elementor_element" data-id="d214df0" data-element_type="widget" data-widget_type="image.default">
                      <div class="elementor-widget-container two_elementor_element">
                          <div class="image-wrapper" style="position: relative; overflow: hidden;">
                              <img  width="2000" height="600" src="frontend/assets/img/header/picture2.jpg" data-src="" class="lazy attachment-large size-large wp-image-21068 two_bg entered loaded" alt="" srcset="" data-srcset="" data-sizes="(max-width: 1024px) 100vw, 1024px">
                              <div class="image-hover-border"></div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  
  <style>

      .image-wrapper {
          position: relative;
          overflow: hidden;
      }
  
      .image-wrapper img {
          transition: transform 0.3s ease-in-out;
      }
      .image-hover-border {
          position: absolute;
          top: 0;
          left: 0;
          right: 0;
          bottom: 0;
          border: 3px solid transparent;
          pointer-events: none;
      }
  
      .image-wrapper:hover .image-hover-border {
          border: 3px solid #ffffff; /* Set the desired border color */
      }
  </style>
{{-- end image middle ---------------------------------------------------------------------------}}

{{-- 3 card iteam in 2nd card line --------------------------------------------------------------}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <style>
        /* Add CSS styles here */
        .elementor-section {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .elementor-column {
            width: calc(33.33% - 20px); /* 3 columns with 20px spacing */
            margin-bottom: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            overflow: hidden;
            transition: box-shadow 0.3s ease;
        }

        .elementor-column:hover {
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .elementor-counter {
            padding: 20px;
            text-align: center;
        }

        .elementor-counter-title {
            font-size: 18px;
            font-weight: bold;
            margin-top: 10px;
        }

        .elementor-counter-number-wrapper {
            font-size: medium;
            font-weight: bold;
        }

        .elementor-button-wrapper {
            margin-top: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="elementor-section">
        <div class="elementor-column">
            <div class="elementor-counter">
                <div class="elementor-counter-number-wrapper">
                    <span class="elementor-counter-number-prefix"></span>
                    <span class="elementor-counter-number" data-duration="2000" data-to-value="253" data-from-value="253"
                        data-delimiter="," style="font-size: medium; font-weight: bold;">253</span>
                    <span class="elementor-counter-number-suffix"></span>
                </div>
                <div class="elementor-counter-title">Completed Projects</div>
            </div>
            <div class="elementor-button-wrapper">
                <a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-grow"
                    href="">
                    <span class="elementor-button-content-wrapper">
                        <span class="elementor-button-text">View Projects</span>
                    </span>
                </a>
            </div>
        </div>

        <div class="elementor-column">
            <div class="elementor-counter">
                <div class="elementor-counter-number-wrapper">
                    <span class="elementor-counter-number-prefix"></span>
                    <span class="elementor-counter-number" data-duration="2000" data-to-value="52" data-from-value="52"
                        data-delimiter="," style="font-size: medium; font-weight: bold;">52</span>
                    <span class="elementor-counter-number-suffix"></span>
                </div>
                <div class="elementor-counter-title">On-going Projects</div>
            </div>
            <div class="elementor-button-wrapper">
                <a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-grow"
                    href="">
                    <span class="elementor-button-content-wrapper">
                        <span class="elementor-button-text">View Projects</span>
                    </span>
                </a>
            </div>
        </div>

        <div class="elementor-column">
            <div class="elementor-counter">
                <div class="elementor-counter-number-wrapper">
                    <span class="elementor-counter-number-prefix"></span>
                    <span class="elementor-counter-number" data-duration="2000" data-to-value="8" data-from-value="8"
                        data-delimiter="," style="font-size: large; font-weight: bold;">8</span>
                    <span class="elementor-counter-number-suffix"></span>
                </div>
                <div class="elementor-counter-title">Upcoming Projects</div>
            </div>
            <div class="elementor-button-wrapper">
                <a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-grow"
                    href="">
                    <span class="elementor-button-content-wrapper">
                        <span class="elementor-button-text">View Projects</span>
                    </span>
                </a>
            </div>
        </div>
    </div>
</body>
</html>



{{--  end 3 card iteam in 2nd card line------------------------------------------------------------------------}}
                      </section>
                      <div class="elementor-element elementor-element-dcd0759 elementor-widget elementor-widget-text-editor two_elementor_element" data-id="dcd0759"
                          data-element_type="widget" data-widget_type="text-editor.default">
                          <div class="elementor-widget-container two_elementor_element">
                          </div>
                      </div>
                      <div class="elementor-element elementor-element-b18508a elementor-widget elementor-widget-heading two_elementor_element" data-id="b18508a"
                          data-element_type="widget" data-widget_type="heading.default">
                          <div class="elementor-widget-container two_elementor_element">
                              <h2 class="elementor-heading-title elementor-size-default two_elementor_element"><b class="two_elementor_element">Tushar Real Estate Ltd. - Top Real Estate Company in BD</b></h2>
                          </div>
                      </div>

                      <div class="elementor-element elementor-element-7b42b87 elementor-widget elementor-widget-text-editor two_elementor_element" data-id="7b42b87"
                          data-element_type="widget" data-widget_type="text-editor.default">
                          <div class="elementor-widget-container two_elementor_element">
                              <p class="two_elementor_element">Welcome to Tushar Real Estate Ltd.,
                                 one of the top real estate developer companies in Bangladesh, 
                                 serving as a pioneer in the industry since 2002.
                                  Led by the esteemed Architect Abdus Salam,
                                   who holds the position of Founder and Managing Director.
                                    Tushar Real Estate has garnered immense praise for its aesthetic
                                     architecture and dedication to delivering prestigious and luxury living spaces in Dhaka city. 
                                     With an impressive track record of 253 successfully handed over projects and a vision
                                     for the future with 52 ongoing and 8 upcoming projects, 
                                     Tushar Real Estate has firmly established itself as a leader in the real estate sector of Bangladesh.
                                     At Tushar Real Estate, we focus on constructing homes and workspaces in prime and attractive locations,
                                      including- Gulshan, Banani, Baridhara, Dhanmondi, Uttara, and Mirpur of Dhaka city.
                                      Our emphasis lies in achieving sound construction practices while upholding aesthetic design principles.
                                       This commitment has earned us the reputation of being the top real estate company in Dhaka, 
                                       dedicated to creating homes that exemplify quality and luxury.</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
  </body>
  </html>
  {{-- end 2nd card .................................................................................--}}



    <!-- ======= Constructions Section ======= -->
    {{-- <section id="constructions" class="constructions">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Constructions</h2>
          <p>Nulla dolorum nulla nesciunt rerum facere sed ut inventore quam porro nihil id ratione ea sunt quis dolorem dolore earum</p>
        </div>
        <div class="row gy-4">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg" style="background-image: url(assets/img/constructions-1.jpg);"></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">Eligendi omnis sunt veritatis.</h4>
                    <p>Fuga in dolorum et iste et culpa. Commodi possimus nesciunt modi voluptatem placeat deleniti adipisci. Cum delectus doloribus non veritatis. Officia temporibus illo magnam. Dolor eos et.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg" style="background-image: url(assets/img/constructions-2.jpg);"></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">Possimus ut sed velit assumenda</h4>
                    <p>Sunt deserunt maiores voluptatem autem est rerum perferendis rerum blanditiis. Est laboriosam qui iste numquam laboriosam voluptatem architecto. Est laudantium sunt at quas aut hic. Eum dignissimos.</p>
                  </div>
                </div>
              </div>
            </div>           
          </div>
       
        </div>
      </div>
    </section> --}}
    <!-- End Constructions Section -->
{{-- card show karim tower 4------------------------------------------------------------- --}}
    <style>
      .card {
        height: 120%;
      }
    
      .card-img-top {
        height: 200px; /* Adjust the height as needed */
        object-fit: cover; /* Ensures the image fills the entire container */
      }
    
      .card-body {
        height: 150px; /* Adjust the height as needed */
      }
    </style>



<section id="services" class="services section-bg">
  <div class="container" data-aos="fade-up">   
    <div class="section-header">
      <h2>Project</h2>
      <p>Your Trusted Real Estate Partner</p>
    </div> 
    <div class="row gy-4">
    
      {{-- @foreach($allprojects as $Project)
      <div class="col-md-3"> <!-- Use col-md-3 to display four cards in one row on medium-sized screens -->
        <div class="card">
          <img src="{{url('/uploads/project/'.$Project->image)}}" class="card-img-top" alt="Project Image">
          <div class="card-body">
            <h5 class="card-title">Karim tower</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="{{route('project.show',$Project->id)}}" class="btn btn-primary">view</a>
          </div>
        </div>
      </div>
      <style>
       .card {
          position: relative;
          overflow: hidden;
          transition: transform 0.3s, box-shadow 0.3s;
          border: 1px solid #ccc;
          border-radius: 10px;
        }
        
        .card:hover {
          transform: scale(1.05);
          box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
          border-color: #ff7f50; /* Change the border color to your desired color */
        }
        
        .card-img-top {
          transition: transform 0.3s;
        }
        
        .card:hover .card-img-top {
          transform: scale(1.1);
        }       
        </style>           
     @endforeach --}}
    </div>   
  </div>
</section>

{{-- end show card karim  tower------------------------------------------------------------------------ --}}
    <!-- ======= Our Projects Section ======= -->
    {{-- <section id="projects" class="projects">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2> Ongoing Our Projects</h2>
          <p>Tushar Real Estate Ltd is proud to present its ongoing projects, 
            showcasing a commitment to excellence in the real estate industry. 
            With a focus on quality and innovation, 
            these projects aim to offer modern living spaces equipped with state-of-the-art amenities.
             Each development is thoughtfully designed to cater to diverse lifestyles,
              ensuring a harmonious blend of luxury, comfort, and sustainability.</p>
        </div>
        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">
          <ul class="portfolio-flters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
          </ul>
        </div>
    </section> --}}
   
    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-blog-posts" class="recent-blog-posts">
      <div class="container" data-aos="fade-up">

  
    
     <div class=" section-header">
      
        <h2> Our Ongoing Projects</h2>
        <p>Tushar Real Estate Ltd is proud to present its ongoing projects, 
          showcasing a commitment to excellence in the real estate industry. 
          With a focus on quality and innovation, 
          these projects aim to offer modern living spaces equipped with state-of-the-art amenities.
           Each development is thoughtfully designed to cater to diverse lifestyles,
            ensuring a harmonious blend of luxury, comfort, and sustainability.</p>
      </div>

      <div class="row gy-5">
        @foreach ($projects as $project)
        <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="post-item position-relative h-100">
            <div class="post-img position-relative overflow-hidden">
              <img src="{{url('/uploads/project/'.$project->image)}}" class="img-fluid" alt="">
              <span class="post-date">December 12</span>
            </div>
            <div class="post-content d-flex flex-column">
              <h3 class="post-title">Eum ad dolor et. Autem aut fugiat debitis</h3>
              <div class="meta d-flex align-items-center">
                <div class="d-flex align-items-center">
                  <i class="bi bi-person"></i> <span class="ps-2">Julia Parker</span>
                </div>
                <span class="px-3 text-black-50">/</span>
                <div class="d-flex align-items-center">
                  <i class="bi bi-folder2"></i> <span class="ps-2">Politics</span>
                </div>
              </div>
              <hr>
              <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
        </div>
        @endforeach
        <!-- End post item -->
      </div>
      </div>
    </section>
    <!-- End Recent Blog Posts Section -->
    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>
  </main>
@endsection