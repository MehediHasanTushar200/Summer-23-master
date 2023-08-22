@extends('frontend.frontend_master')
@section('content')


<section id="recent-blog-posts" class="recent-blog-posts">
  <div class="container" data-aos="fade-up">
    <div class=" section-header">
        <h2>Property details</h2>
        <p>"Elevate Your Living with Tushar Real Estate."</p>
      </div>
    <div class="row gy-5">
    @foreach ($properties as $property)
          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="post-item position-relative h-100">
              <div class="post-img position-relative overflow-hidden">
                <img src="{{url('/uploads/property/'.$property->image)}}" class="img-fluid" alt="">
                {{-- <span class="post-date">December 12</span> --}}
              </div>
              <div class="post-content d-flex flex-column">

                <h3 class="post-title">{{$property->status}}</h5>
                <h6>Name:-{{$property->project->name}}</h6>
                <h6>Location:-{{$property->address}}</h6>
                <h6>Price per squre feet:-{{$property->price}}  BDT</h6>
                
                <div class="meta d-flex align-items-center">     
              </div>
                <a href="{{route('property.view',$property->id)}}" class="readmore stretched-link"><span>view</span><i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div>
          @endforeach
        </div>
        </div>
      </section>

    @endsection