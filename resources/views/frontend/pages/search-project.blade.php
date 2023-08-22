@extends('frontend.frontend_master')

@section('content')


{{-- <h1>Search Projects for: {{$searchKey}}. found ({{$projects->count()}})</h1> --}}



<h1>Search Projects for: {{$searchKey}}. found ({{$projects->count()}})</h1>


<div class="tab-pane active" id="trending">

@if($projects->count() > 0)

@foreach($projects as $project)
<div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
    <div class="post-item position-relative h-100">
      <div class="post-img position-relative overflow-hidden">
        <img src="{{url('/uploads/project/'.$project->image)}}" class="img-fluid" alt="">
        
        
      </div>
      <div class="post-content d-flex flex-column">
        <h3 class="post-title">{{$project->name}}</h3>
         <h6>Description:-{{$project->description}}</h6>
        <h6>Location:-{{$project->location}}</h6>
        <h6>Employee:-{{$project->employee}}</h6>
        <h6>Start Time:-{{$project->start_date}}</h6>
        <h6>End Time:-{{$project->end_date}}</h6>
       
        
    
      <a href="{{route('ongoingproject.show',$project->id)}}" class="readmore stretched-link"><span>View</span><i class="bi bi-arrow-right"></i></a>
      </div>
    </div>
  </div>
@endforeach

@else

<p> Sorry ! Not project found </p>

@endif

</div> 
@endsection