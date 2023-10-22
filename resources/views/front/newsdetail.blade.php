@extends('front.layout.app')

@section('content')
<div class="container-fluid bg-light overflow-hidden px-lg-0" style="margin: 6rem 0;">
    <div class="container feature px-lg-0">
        <div class="row g-0 mx-lg-0">
            <div class="col-lg-6 feature-text py-5 wow fadeIn" data-wow-delay="0.5s">
                <div class="p-lg-5 ps-lg-0" style="text-align: center;margin-top:80px">
                    <div class="section-title text-start">
                        <h1 class="display-5 mb-4">{!!$news->title!!}</h1>
                    </div>
                    <p class="mb-4 pb-2">{!!$news->desc!!}</p>
                </div>
            </div>
            <div class="col-lg-6 pe-lg-0" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="position-absolute img-fluid w-100 h-100" src="{{asset('storage/'.$news->image)}}" style="object-fit: cover;" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
