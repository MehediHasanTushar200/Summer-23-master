@extends('frontend.frontend_master')
@section('content')


<section id="recent-blog-posts" class="recent-blog-posts">
  <div class="container" data-aos="fade-up">
    <div class=" section-header">
        <h2>Projects details</h2>
        <p>"Elevate Your Living with Tushar Real Estate."</p>
      </div>
    <div class="row gy-5">
    @foreach ($projects as $project)
          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="post-item position-relative h-100">
              <div class="post-img position-relative overflow-hidden">
                <img src="{{url('/uploads/project/'.$project->image)}}" class="img-fluid" alt="">
                
              </div>
              <div class="post-content d-flex flex-column">
                <h3 class="post-title">{{$project->name}}</h5>
               
                <h6>Location:-{{$project->location}}</h6>
                <h6>Employee:-{{$project->employee}}</h6>
                <h6>Start Time:-{{$project->start_date}}</h6>
                <h6>End Time:-{{$project->end_date}}</h6>
                <div class="meta d-flex align-items-center">     
              </div>
                <a href="{{route('project.showmore',$project->id)}}" class="readmore stretched-link"><span>View</span><i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div>
          @endforeach
        </div>
        </div>
      </section>

    @endsection