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


        <section class="blog_area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mb-5 mb-lg-0">
                        @if ($blogs->count() > 0)
                            <div class="blog_left_sidebar">
                                @foreach ($blogs as $blog)
                                    <article class="blog_item">
                                        <div class="blog_item_img">
                                            <img class="card-img rounded-0" src="{{ asset('/storage/' . $blog->image) }}"
                                                alt="">
                                        </div>
                                        <div class="blog_details">
                                            <a class="d-inline-block" href="blog_details.html">
                                                {!! $blog->title !!}
                                            </a>
                                            {!! $blog->desc !!}
                                            <ul class="blog-info-link">
                                                @foreach ($blog->tags as $tag)
                                                <li>
                                                    <span>{!! $tag->getTranslation('name', app()->getLocale()) !!}</span>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </article>
                                @endforeach
                                {{ $blogs->links('admin.partials.pagination') }}
                            </div>
                        @else
                            <div>
                                <h1>Hec bir element tapilmadi</h1>
                            </div>
                        @endif
                    </div>
                    <x-blog-category-component />
                </div>
            </div>
        </section>

    </main>
@endsection
