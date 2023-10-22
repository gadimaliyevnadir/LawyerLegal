<header>
    <div class="header-area">
        <div class="main-header ">
            <div class="header-top d-none d-sm-block">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="d-flex justify-content-between flex-wrap align-items-center">
                                <div class="header-info-left">
                                    <ul>
                                        <li>Location: 76/A, Kings road, NY</li>
                                        <li>Mail Us: <a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                data-cfemail="fc909d8b85998ecbcabc9b919d9590d29f9391">[email&#160;protected]</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="header-info-right">
                                    <ul class="header-social">
                                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li> <a href="#"><i class="fab fa-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom  header-sticky">
                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between flex-wrap position-relative">

                        <div class="left-side d-flex align-items-center">
                            <div class="logo">
                                <a href="{{ route('front.home') }}"><img src="/assets/img/logo/logo.png"
                                        alt=""></a>
                            </div>

                            <div class="main-menu d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="{{ route('front.home') }}">Home</a></li>
                                        <li><a href="{{ route('front.practiceArea') }}">Practice Area</a></li>
                                        <li><a href="{{ route('front.about') }}">About</a></li>
                                        <li><a href="{{ route('front.blog') }}">Blog</a>
                                            <ul class="submenu">
                                                <li><a href="{{ route('front.blog') }}">Blog</a></li>
                                                <li><a href="{{ route('front.blogDetails') }}">Blog Details</a></li>
                                                <li><a href="{{ route('front.elements') }}">Elements</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ route('front.contact') }}">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="header-right-btn f-right  ml-15">

                            @foreach ($locales as $key => $locale)
                                <a href="{{LaravelLocalization::localizeUrl(url()->current(),$key)}}" class="btn_2">{{ strtoupper($key) }}</a>
                            @endforeach
                            <a href="#" class="header-btn2">Call Us: <span> +1 (78) 673 3567</span></a>
                        </div>

                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
