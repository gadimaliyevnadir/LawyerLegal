<div class="col-lg-4">
    <div class="blog_right_sidebar">
        <aside class="single_sidebar_widget search_widget">
            <form action="#">
                <div class="form-group m-0">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search Keyword">
                        <div class="input-group-append d-flex">
                            <button class="boxed-btn2" type="button">Search</button>
                        </div>
                    </div>
                </div>
            </form>
        </aside>
        <aside class="single_sidebar_widget post_category_widget">
            <h4 class="widget_title" style="color: #0f0f0f;">Category</h4>
            <ul class="list cat-list">
                @foreach ($categories as $category)
                    <li>
                        <a href="{{ route('front.blogs', $category->id) }}" class="d-flex">
                            <p>{!! $category->getTranslation('title', app()->getLocale()) !!}</p>
                            <p>({{ $category->blog()->count() }})</p>
                        </a>
                    </li>
                @endforeach
            </ul>
        </aside>

        <aside class="single_sidebar_widget tag_cloud_widget">
            <h4 class="widget_title" style="color: #2d2d2d;">Tag Clouds</h4>
            <ul class="list">
                @foreach ($tags as $tag)
                    <li>
                        <a href="{{route('front.blogtags',$tag->slug)}}">{!!$tag->name!!}</a>
                    </li>
                @endforeach

            </ul>
        </aside>

    </div>
</div>
