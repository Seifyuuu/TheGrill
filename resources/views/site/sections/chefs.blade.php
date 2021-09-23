<section class="dark-wrapper opaqued parallax" data-parallax="scroll" data-image-src="{{asset("img/bg/bg4.jpg")}}" data-speed="0.8">
    <div class="section-inner">
         <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb100">
                    <h2 class="section-heading">Our <span class="theme-accent-color">Acclaimed</span> Chefs</h2>
                    <hr class="thin-hr">
                    <h3 class="section-subheading secondary-font">Dedicated to excellence.</h3>
                </div>
            </div>
        </div>
        <div class="wow fadeIn" data-wow-delay="0.2s">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <ul class="owl-carousel-paged testimonial-owl wow fadeIn list-unstyled" data-items="3" data-items-tablet="[768,2]" data-items-mobile="[479,1]">
                            @foreach ($chefs as $chef )
                                
                            <li>
                                <div class="row hover-item">
                                    <div class="col-xs-12">
                                        <img src="{{asset("img/team/".$chef->img)}}" class="img-responsive smoothie" alt="">
                                    </div>
                                    <div class="col-xs-12 overlay-item-caption smoothie"></div>
                                    <div class="col-xs-12 hover-item-caption smoothie">
                                        <div class="vertical-center">
                                            <h3 class="smoothie"><a href="single-portfolio.html" title="view project">{{$chef->name}}</a></h3>
                                            <ul class="smoothie list-inline social-links wow fadeIn" data-wow-delay="0.2s">
                                                {{dd($chef->sociallinks())}}
                                                @foreach ($chef->sociallinks() as $link )
                                                <li>
                                                    <a href="{{$link->link}}"><i class="fa fa-{{$link->icon->name}}"></i></a>
                                                </li>
                                                @endforeach

                                                {{-- <li>
                                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fa fa-dribbble"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fa fa-behance"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                                </li> --}}
                                            </ul>
                                        </div>
                                    </div>
                                    <span class="col-xs-12 theme-accent-color-bg hover-bar"></span>
                                </div>
                            </li>
                            @endforeach
                            {{-- <li>
                                <div class="row hover-item">
                                    <div class="col-xs-12">
                                        <img src="{{asset("img/team/2.jpg")}}" class="img-responsive smoothie" alt="">
                                    </div>
                                    <div class="col-xs-12 overlay-item-caption smoothie"></div>
                                    <div class="col-xs-12 hover-item-caption smoothie">
                                        <div class="vertical-center">
                                            <h3 class="smoothie"><a href="single-portfolio.html" title="view project">Barry Scott</a></h3>
                                            <ul class="smoothie list-inline social-links wow fadeIn" data-wow-delay="0.2s">
                                                <li>
                                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fa fa-dribbble"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fa fa-behance"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <span class="theme-accent-color-bg hover-bar"></span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row hover-item">
                                    <div class="col-xs-12">
                                        <img src="{{asset("img/team/3.jpg")}}" class="img-responsive smoothie" alt="">
                                    </div>
                                    <div class="col-xs-12 overlay-item-caption smoothie"></div>
                                    <div class="col-xs-12 hover-item-caption smoothie">
                                        <div class="vertical-center">
                                            <h3 class="smoothie"><a href="single-portfolio.html" title="view project">Tom Smooth</a></h3>
                                            <ul class="smoothie list-inline social-links wow fadeIn" data-wow-delay="0.2s">
                                                <li>
                                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fa fa-dribbble"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fa fa-behance"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <span class="theme-accent-color-bg hover-bar"></span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row hover-item">
                                    <div class="col-xs-12">
                                        <img src="{{asset("img/team/4.jpg")}}" class="img-responsive smoothie" alt="">
                                    </div>
                                    <div class="col-xs-12 overlay-item-caption smoothie"></div>
                                    <div class="col-xs-12 hover-item-caption smoothie">
                                        <div class="vertical-center">
                                            <h3 class="smoothie"><a href="single-portfolio.html" title="view project">Harvey Wallace</a></h3>
                                            <ul class="smoothie list-inline social-links wow fadeIn" data-wow-delay="0.2s">
                                                <li>
                                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fa fa-dribbble"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fa fa-behance"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                                </li> --}}
                                            </ul>
                                        </div>
                                        <span class="theme-accent-color-bg hover-bar"></span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
