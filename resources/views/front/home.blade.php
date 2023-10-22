@extends('front.layout.app')

@section('content')



<div class="slider-area position-relative">
    <div class="slider-active">
        @foreach($sliders as $slider)
        <div style="background-image:url('storage/{{$slider->image}}');" class="single-slider hero-overly slider-height  d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-6 col-xl-7 col-lg-8 col-md-8 col-sm-10">

                        <div class="hero-caption">
                            <h1 data-animation="fadeInUp" data-delay=".2s">{!!$slider->title!!}</h1>
                            <p data-animation="fadeInUp" data-delay=".4s">{!!$slider->subtitle!!}</p>
                            <a href="{{route('front.practiceArea')}}" class="btn hero-btn" data-animation="fadeInUp" data-delay=".8s">Our Practice Area</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<x-company-component />

<x-practice-component />

<x-combo-component />


<x-jacson-kalish-component />

@endsection
