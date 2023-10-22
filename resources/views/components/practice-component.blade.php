<div class="our-practice-area section-bg section-padding">
    <div class="container">
        <div class="row justify-content-center mb-25">
            <div class="col-xl-12">

                <div class="section-tittle text-center">
                    <h2>Our Practice Area</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-8">
                <div class="row">
                    @foreach($practices as $practice)
                    <div class="col-lg-6 col-md-6 col-sm-6 p-0">
                        <div class="single-services1 text-center">
                            <div class="services-ion">
                                <img src="{{'/storage/'.$practice->icon}}" alt="">
                            </div>
                            <div class="services-cap">
                                <h5><a href="#">{!!$practice->title!!}</a></h5>
                                <p>{!!$practice->desc!!}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-xl-4 col-lg-12 col-md-12">
                <div class="form-wrapper">
                    <div class="form-tittle mb-30">
                        <h2>Get Free Quote</h2>
                        @if(session()->has('type'))
                        <h1 class="alert text-success">{{session('message')}}</h1>
                        @endif
                    </div>
                    <form action="{{route('front.quoteForm')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-xl-12 col-lg-6">
                                <div class="form-box mb-10">
                                    <input type="text" value="{{old('name')}}" name="name" placeholder="Your name">
                                </div>
                                @error('name')
                                <span class="text-danger" style="color:chartreuse;">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col-xl-12 col-lg-6">
                                <div class="form-box mb-10">
                                    <input type="email" value="{{old('email')}}" name="email" placeholder="Email">
                                </div>
                                @error('email')
                                <span class="text-danger" style="color:chartreuse;">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="col-xl-12 col-lg-12">
                                <div class="single-form">
                                    <div class="select-option">
                                        <select name="familyLaw" class="form-select">
                                            <option @selected(old('familyLaw')=='' ) value="">Family Law</option>
                                            <option @selected(old('familyLaw')=='Family Law 1' ) value="Family Law 1">Family Law 1</option>
                                            <option @selected(old('familyLaw')=='Family Law 2' ) value="Family Law 2">Family Law 2</option>
                                            <option @selected(old('familyLaw')=='Family Law 3' ) value="Family Law 3">Family Law 3</option>
                                        </select>
                                    </div>
                                </div>
                                @error('familyLaw')
                                <span class="text-danger" style="color:chartreuse;">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col-xl-12 col-lg-12">
                                <div class="form-box mb-10">
                                    <textarea name="message" style="color:chartreuse;" placeholder="Message">{{old('message')}}</textarea>
                                </div>
                                @error('message')
                                <span class="text-danger" style="color:chartreuse;">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col-lg-12">
                                <button class="btn submit-btn"> Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
