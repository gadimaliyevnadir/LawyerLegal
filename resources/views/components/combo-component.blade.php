<div class="contact-wrappers">
    <div class="container">
        <div class="wants-wrapper">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8 col-md-9">
                    @foreach($abouts as $about)
                    <div class="wantToWork-caption text-center">
                        <h2>Why Choose Us?</h2>
                        <p>{!!$about->title!!}</p>
                        <p class="pera-bottom">{!!$about->subtitle!!}</p>
                        <a href="{{route('front.practiceArea')}}" class="btn">Learn More</a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

<div class="brand-area border-top">
    <div class="container">
        <div class="row justify-content-center align-items-end">
            <div class="col-xl-8">
                <div class="brand-active  pt-50 pb-40">
                    @foreach($brends as $brend)
                    <div class="single-brand">
                        <img src="{{asset('storage/'.$brend->image)}}" alt="">
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@foreach($clients as $client)
<div class="testimonial-area testimonial-padding section-img-bg2" data-background="{{'/storage/'.$client->image}}">
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-xl-6 col-lg-8 col-md-9">
                <div class="h1-testimonial-active">

                    <div class="single-testimonial">
                        <div class="testimonial-caption ">
                            <div class="testimonial-top-cap">
                                <h2>{!!$client->title!!}</h2>
                                <p>{!!$client->subtitle!!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach

<div class="services-area section-padding">
    <div class="container">
        <div class="row justify-content-center mb-50">
            <div class="col-xl-6 col-lg-6 col-md-10">

                <div class="section-tittle text-center">
                    <h2>Recent News</h2>
                    <!-- <p>Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new.</p> -->
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($newses as $news)
            <div class="offset-xl-1 col-lg-5 col-md-6 col-sm-10">
                <div class="single-services">
                    <div class="services-img">
                        <img src="{{'/storage/'.$news->image}}" alt="">
                    </div>
                    <div class="services-caption">
                        <span>{!!$news->title!!}</span>
                        {!!$news->desc!!}
                        <a href="{{route('front.newsDetail',$news->id)}}" class="browse-btn">Read More</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
