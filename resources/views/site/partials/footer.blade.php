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
                        <ul class="list-inline social-links wow fadeIn" data-wow-delay="0.2s" >
                    @foreach ($footer->sociallinks()->where('footer_id','!=',null)->get() as $link )
                        <li>
                            <a href="{{$link}}"><i class="fa fa-{{$link->icon->name}}"></i></a>
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