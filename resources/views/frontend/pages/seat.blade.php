@extends('frontend.master')


@section('content')



<section class="other-issue-area section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-70 col-lg-9">
                <div class="title text-center">
                    <h1 class="mb-10">Other issues we can help you </h1>
                    <p>passenger can saw available seats</p>
                </div>
            </div>
        </div>
        <div class="row">

        
        @foreach($seats as $key=> $seat)
            <div class="col-md-4">
                <div class="single-destination relative">
                    <div class="thumb relative">
                        <div class="overlay overlay-bg"></div>
                        <img class="img-fluid" src="{{url('uploads/'.$seat->image)}}" alt="">
                       
                    </div>
                    <div class="desc">
                        <a href="#" class="price-btn"></a>
                        <h4></h4>
                        <p>{{$seat->seat_class}}</p>
                        <p>{{$seat->seat_type}}</p>
                        <p>{{$seat->seat_price}}</p>
                    </div>
                </div>
            </div>
            @endforeach
    </div>
</section>






@endsection