<div class="want-wrapper">
    <div class="container">
        <section class="wantToWork-area">
            <div class="row align-items-center justify-content-between">
                <div class="col-xl-5 col-lg-5 col-md-12">
                    <div class="wants-wrapper">
                        <blockquote>
                            <img src="{{'/storage/'.$jacson->image}}" alt="">
                        </blockquote>
                        <div class="wantToWork-caption wantToWork-caption2">
                            {!!$jacson->fullname!!}
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-12">
                    <div class="contact-now d-flex align-items-center flex-wrap f-right">
                        <span>Call For a Free Consulting</span>
                        <a href="#" class="btn2 wantToWork-btn "><i class="fas fa-phone-alt"></i>{{$jacson->phone}}</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>