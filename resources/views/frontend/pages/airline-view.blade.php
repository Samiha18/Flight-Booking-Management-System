@extends('frontend.master')


@section('content')



<section class="popular-destination-area section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-70 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">Popular Airlines</h1>
                    <p>We all live in an age that belongs to the young at heart. Life that is becoming extremely fast, day.</p>
                </div>
            </div>
        </div>

        <div class="row">

            
            <div class="col-md-4">
                <div class="single-destination relative">
                    <div class="thumb relative">
                        <div class="overlay overlay-bg"></div>
                        <img class="img-fluid" src="{{url('uploads/'.$airlines->image)}}" alt="">
                    </div>
                    <div class="desc">
                        <a href="{{route('single.airline',$airlines->id)}}" class="price-btn">$150</a>
                        <h4>Airlines</h4>
                        <p>Paraguay</p>
                    </div>
                </div>
            </div>
        
        </div>
    </div>
    </div>
    </div>
</section>






@endsection