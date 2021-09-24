<section>
    <div id="mapwrapper"></div>  
</section>

<footer class="white-wrapper">
    @foreach ($footers as $footer )
        
    <div class="container-fluid">
        <div class="row text-center">
            <div class="col-md-12 wow fadeIn mb30" data-wow-delay="0.2s">
                <span class="copyright">{{$footer->copyright}}</span>
            </div>
            <div class="col-md-12">
                <ul class="list-inline social-links wow fadeIn" data-wow-delay="0.2s">
                    @foreach ($footer->icons()->get() as $icon )

                        <li>
                            <a href="{{$footer->sociallinks()->get()[$icon->id-1]}}"><i class="fa fa-{{$icon->name}}"></i></a>
                        </li>
                    @endforeach
                   
                </ul>
            </div>
        </div>
    </div>
    @endforeach
</footer>

<div id="bottom-frame"></div>

<a href="#" id="back-to-top"><i class="fa fa-long-arrow-up"></i></a>

</div>