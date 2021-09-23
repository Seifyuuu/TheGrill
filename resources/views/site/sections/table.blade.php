<section class="dark-wrapper opaqued parallax" data-parallax="scroll" data-image-src="assets/img/bg/bg1.jpg" data-speed="0.8">
    <div class="section-inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb100">
                    <h2 class="section-heading">Book <span class="theme-accent-color">Your</span> Table</h2>
                    <hr class="thin-hr">
                    <h3 class="section-subheading secondary-font">Satisfaction, everytime.</h3>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mb100"> 
                <!-- Address, Phone & Email -->
                @foreach ($tables as $item )
                    
                <div class="col-md-5 col-md-offset-1 wow fadeIn">
                    <h3 class="mb30">Address</h3>
                    <p class="lead">{{$item->name}}</p>
                    <p class="lead">{{$item->address}}<br>
                    {{$item->address2}} </p>
                    <p class="lead">{{$item->num}}<br>
                </div>
                @endforeach


                <div class="col-md-5 col-sm-7 wow fadeIn">
                    <h3 class="mb30">Opening Times</h3>
                    <div class="row">
                      <div class="col-xs-5">
                        <ul class="list-unstyled weekdays">
                          <li>Monday</li>
                          <li>Tuesday</li>
                          <li>Wednesday</li>
                          <li>Thursday</li>
                          <li>Friday</li>
                          <li>Saturday</li>
                          <li>Sunday</li>
                        </ul>
                      </div>
                      <div class="col-xs-7">
                        <ul class="list-unstyled">
                            @foreach ($heures as $item )
                            <li>{{$item->time}}</li>
                            @endforeach
                        </ul>
                      </div>
                    </div>
                </div>                
            </div>

            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="row">
                        <div id="message" class="col-md-12"></div>
                        <form method="post" action="sendemail.php" id="contactform" class="form-group main-contact-form col-md-12 wow fadeIn" data-wow-delay="0.2s">
                            <input type="text" class="form-control col-md-4" name="name" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name." />
                            <input type="text" class="form-control col-md-4" name="email" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address." />
                            <input type="text" class="form-control col-md-4" name="website" placeholder="Your URL *" id="website" required data-validation-required-message="Please enter your web address." />
                            <textarea name="comments" class="form-control" id="comments" placeholder="Your Message *" required data-validation-required-message="Please enter a message."></textarea>
                            <input class="btn btn-primary btn-white mt30 pull-right" type="submit" name="submit" value="Submit" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

