<section class="dark-wrapper opaqued parallax" data-parallax="scroll" data-image-src="{{asset("img/bg/bg10.jpg")}}" data-speed="0.8">
    <div class="section-inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb100">
                    <h2 class="section-heading">Our <span class="theme-accent-color">Happy</span> Customers</h2>
                    <hr class="thin-hr">
                    <h3 class="section-subheading secondary-font">Satisfaction, everytime.</h3>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ul class="owl-carousel-paged testimonial-owl wow fadeIn list-unstyled" data-items="1" data-items-desktop="[1200,1]" data-items-desktop-small="[980,1]" data-items-tablet="[768,1]" data-items-mobile="[479,1]">
                        
                        
                        
                        
                        
                    





                        @foreach ($customers as $item )
                        <li>
                            <div class="row">
                                <div class="col-xs-8 col-xs-offset-2 item-caption">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <img src="{{asset($item->photo)}}" class="img-responsive testimonial-author" alt="">
                                        </div>
                                        <div class="col-sm-10">                                                
                                            <h4>{{$item->name}}</h4>
                                            <p>{{$item->text}}</p>
                                            <ul class="list-inline">
                                                @if ($item->rating == 1)
                                                <li><i class="fa fa-star theme-accent-color"></i></li>
                                                @endif
                                                    @if ($item->rating == 2)
                                                    <li><i class="fa fa-star theme-accent-color"></i></li>
                                                    <li><i class="fa fa-star theme-accent-color"></i></li>

                                                    @endif
                                                        @if ($item->rating == 3)
                                                        <li><i class="fa fa-star theme-accent-color"></i></li>
                                                        <li><i class="fa fa-star theme-accent-color"></i></li>
                                                        <li><i class="fa fa-star theme-accent-color"></i></li>

                                                        @endif
                                                            @if ($item->rating == 4)
                                                            <li><i class="fa fa-star theme-accent-color"></i></li>
                                                            <li><i class="fa fa-star theme-accent-color"></i></li>
                                                            <li><i class="fa fa-star theme-accent-color"></i></li>
                                                            <li><i class="fa fa-star theme-accent-color"></i></li>

                                                            @endif
                                                                @if ($item->rating == 5)
                                                                <li><i class="fa fa-star theme-accent-color"></i></li>
                                                                <li><i class="fa fa-star theme-accent-color"></i></li>
                                                                <li><i class="fa fa-star theme-accent-color"></i></li>
                                                                <li><i class="fa fa-star theme-accent-color"></i></li>
                                                                <li><i class="fa fa-star theme-accent-color"></i></li>
                                                                @endif
                                                
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        @endforeach
                        




                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>