<section class="about-low-area section-padding">
    <div class="container">
        @foreach($companies as $company)
        <div class="row justify-content-between align-items-center">
            <div class="offset-xl-1 col-xl-5 col-lg-5 col-md-9 col-sm-11">
                <div class="about-right-cap">
                    <div class="about-right-img">
                        <img src="{{'/storage/'.$company->image}}" alt="">
                    </div>
                    <div class="img-cap">
                        <span>{{$company->years}}</span>
                        <p>Years of experience</p>
                    </div>
                </div>
            </div>
            <div class="offset-xl-1  col-xl-5 col-lg-6 col-md-10">
                <div class="about-caption about-bottom">
                    <div class="section-tittle mb-35">
                        {!!$company->title!!}
                    </div>
                  {!!$company->desc!!}
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
