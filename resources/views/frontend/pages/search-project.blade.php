@extends('frontend.frontend_master')

@section('content')


<h1>Search Projects for: {{$searchKey}}. found ({{$allprojects->count()}})</h1>


{{-- 
<h1>Search Projects for: {{$searchKey}}. found ({{$projects->count()}})</h1>


<div class="tab-pane active" id="trending">

@if($projects->count() > 0)

@foreach($projects as $project)
    <div class="col-md-3 col-sm-4">

        <div class="single-project">

            <div class="project-block">

                <img src="{{url('/uploads/project/'.$project->image)}}" alt="" class="thumbnail">

                <div class="project-description text-center">

                    <p class="title">{{$project->name}}</p>

                    <p class="price">{{$project->price}} BDT</p>

                </div>

                <div class="product-hover">

                    <ul>

                        <li><a href="single-product.html"><i class="fa fa-cart-arrow-down"></i></a></li>

                        <li><a href=""><i class="fa fa-arrows-h"></i></a></li>

                        <li><a href=""><i class="fa fa-heart-o"></i></a></li>

                    </ul>

                </div>

            </div>

        </div>

    </div>
@endforeach

@else

<p> Sorry ! Not product found </p>

@endif

</div> --}}
@endsection