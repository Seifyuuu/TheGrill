
        <section id="about" class="top-border-me">
            <div class="section-inner">

                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center mb100">                        
                            <h2 class="section-heading">A <span class="theme-accent-color">Warm</span> Welcome</h2>
                            <hr class="thin-hr">
                            <h3 class="section-subheading secondary-font">Were very happy to see you.</h3>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="container">
                        <div class="row col-md-offset-1">
                            @foreach ($abouts as $item)
                                
                           
                            <div class="col-md-5">
                                <h2 class="mb50">{{$item->titre1}}<span class="theme-accent-color">{{$item->titre2}}</span></h2>
                                <p class="lead">{{$item->texte1}}</p>
                                <p>{{$item->texte2}}</p>
                            </div>
                            @endforeach
                        </div>
                    </div>

                </div>

            </div>
        </section>