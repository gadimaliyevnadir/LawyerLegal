@extends('front.layout.app')

@section('content')
<div class="slider-area">
    @foreach($banners as $banner)
    <div style="background-image: url('/storage/{{$banner->image}}');" class="slider-height2  hero-overly02 d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6 col-md-8">
                    <div class="hero-caption hero-caption2">
                        <h2>{!!$banner->title!!}</h2>
                        <p>{!!$banner->desc!!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
<x-practice-component/>
<x-jacson-kalish-component />
@endsection
