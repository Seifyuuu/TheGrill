

        <div class="container-fluid">
            <div class="row">
                @foreach ( $services as $item )
                @if ($item->id ==1)
                    <div class="col-sm-6 nopadding-lr dark-wrapper opaqued background-cover left-half" style="background-image: url('{{asset("img/bg/bg5.jpg")}}');"> 
                @else
                    <div class="col-sm-6 nopadding-lr dark-wrapper opaqued background-cover left-half" style="background-image: url('{{asset("img/bg/bg10.jpg")}}');"> 
                    
                @endif
                    
                <div class="dark-opaqued-half section-inner pad-sides-60 match-height" data-mh="promo-inner">
                    <h3 class="mb50">{{$item->titre1}} <span class="theme-accent-color">{{$item->titre2}}</span></h3>
                    <p class="lead mb50">{{$item->texte}}</p>
                    <div class="spacer-180"></div>
                    @if ($item->id === 1)
                        <p class="mt30"><a href="#contact" class="btn btn-primary btn-red page-scroll">{{$item->texteBtn}}</a>
                        @else
                        <p class="mt30"><a href="#contact" class="btn btn-primary btn-white page-scroll">{{$item->texteBtn}}</a>  
                        </p>
                    @endif    
                </div>
                </div>              
                @endforeach
                    


                </div>
            </div>
        </div>