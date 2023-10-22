@extends('front.layout.app')

@section('content')
<main>

    <div class="slider-area">
        @foreach($banners as $banner)
        <div style="background-image: url('/storage/{{$banner->image}}');" class="slider-height2 hero-overly02 d-flex align-items-center">
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



    <section class="contact-section">
        <div class="container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24269.264169968264!2d49.9138544!3d40.50494465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40308babedd73c39%3A0xd65b78ebddda6acc!2zTcmZaMmZbW3JmWRsaQ!5e0!3m2!1saz!2saz!4v1694682195541!5m2!1saz!2saz" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div class="row">
                <div class="col-12">
                    <h2 class="contact-title">Get in Touch</h2>
                    @if(session()->has('type'))
                    <h1 class="alert text-success">{{session('message')}}</h1>
                    @endif
                </div>
                <div class="col-lg-8">
                    <form class="form-contact contact_form " action="{{route('front.contactForm')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control w-100"  name="message" cols="30" rows="9" placeholder=" Enter Message">{{old('message')}}</textarea>
                                    @error('message')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="name" type="text" value="{{old('name')}}" placeholder="Enter your name">
                                    @error('name')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" value="{{old('email')}}" name="email" type="email" placeholder="Email">
                                    @error('email')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" name="subject" value="{{old('subject')}}" type="text" placeholder="Enter Subject">
                                    @error('subject')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="button button-contactForm boxed-btn">Send</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    @foreach($addresses as $address)
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="{{$address->icon}}"></i></span>
                        <div class="media-body">
                            <h3>{{$address->title}}</h3>
                            <p>{{$address->subtitle}}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

</main>

@endsection
