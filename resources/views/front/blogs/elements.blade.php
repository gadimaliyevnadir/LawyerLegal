@extends('front.layout.app')


@section('content')
    <main>

        <div class="slider-area">
            @foreach ($banners as $banner)
                <div style="background-image: url('/storage/{{ $banner->image }}');"
                    class="slider-height2 hero-overly02 d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-5 col-lg-6 col-md-8">
                                <div class="hero-caption hero-caption2">
                                    <h2>{!! $banner->title !!}</h2>
                                    <p>{!! $banner->desc !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>


        <section class="sample-text-area">
            <div class="container box_1170">
                <h3 class="text-heading">Text Sample</h3>
                {!! $textsample->desc !!}
            </div>
        </section>
        <div class="whole-wrap">
            <div class="container box_1170">
                <div class="section-top-border">
                    <h3 class="mb-30">Left Aligned</h3>
                    <div class="row">
                        <div class="col-md-3">
                            <img src="{{ '/storage/' . $leftaligned->image }}" alt="" class="img-fluid">
                        </div>
                        <div class="col-md-9 mt-sm-20">
                            {!! $leftaligned->desc !!}
                        </div>
                    </div>
                </div>

                <div class="section-top-border text-right">
                    <h3 class="mb-30">Right Aligned</h3>
                    <div class="row">
                        <div class="col-md-9">
                            {!! $rightaligned->desc !!}
                        </div>
                        <div class="col-md-3">
                            <img src="{{ '/storage/' . $rightaligned->image }}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="section-top-border">
                    <h3 class="mb-30">Definition</h3>
                    <div class="row">
                        @foreach ($definitions as $definition)
                            <div class="col-md-4">
                                <div class="single-defination">
                                    <h4 class="mb-20">{{ $definition->title }}</h4>
                                    {!! $definition->desc !!}
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="section-top-border">
                    <h3 class="mb-30">Block Quotes</h3>
                    <div class="row">
                        <div class="col-lg-12">
                            <blockquote class="generic-blockquote">
                                {!! $blockquote->desc !!}
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection
