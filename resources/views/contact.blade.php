<!DOCTYPE html>
<html lang="en">

@include('layouts.header' , ['page_title' => 'Contact Us Page'])
<body>

@include('layouts.sub-header' , ['slag' => 4])

<!-- Page Content -->
<div class="page-heading header-text" @if($contactHeader) style="background-image: url({{asset('images/Contact/' . $contactHeader -> img)}})"
     @else style="background-image: url({{asset('assets/images/about_header_holder.jpg')}})"   @endif>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if($contactHeader)
                    <h1>{{$contactHeader -> title}}</h1>
                    <span>{{$contactHeader -> subtitle}}</span>
                @else
                    <h1>Contact Us</h1>
                    <span>We have over 20 years of experience</span>
                @endif


            </div>
        </div>
    </div>
</div>

<div class="contact-information">
    <div class="container">
        @if($contactInfo)
            <div class="row">
                <div class="col-md-3">
                    <div class="contact-item">
                        <i class="fa fa-phone"></i>
                        <h4>Phone</h4>
                        <p>{{$contactInfo -> phone_txt}}</p>
                        <a href="tel:{{$contactInfo -> phone}}">{{$contactInfo -> phone}}</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="contact-item">
                        <i class="fa fa-envelope"></i>
                        <h4>Email</h4>
                        <p>{{$contactInfo -> email_txt}}</p>
                        <a href = "mailto:{{$contactInfo -> email}}">{{$contactInfo -> email}}</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="contact-item">
                        <i class="fa fa-map-marker"></i>
                        <h4>Location</h4>
                        <p>{{$contactInfo -> location1_txt}}</p>

                        <a href="https://www.google.com/maps/search/?api=1&query={{$contactInfo -> location1_lat}},{{$contactInfo ->location1_lang}}" target="_blank">View on Google Maps</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="contact-item">
                        <i class="fa fa-map-marker"></i>
                        <h4>Location</h4>
                        <p>{{$contactInfo -> location2_txt}}</p>

                        <a href="https://www.google.com/maps/search/?api=1&query={{$contactInfo -> location2_lat}},{{$contactInfo ->location2_lang}}" target="_blank">View on Google Maps</a>
                    </div>
                </div>
            </div>
        @else
            <div class="row">
                <div class="col-md-3">
                    <div class="contact-item">
                        <i class="fa fa-phone"></i>
                        <h4>Phone</h4>
                        <p>Vivamus ut tellus mi. Nulla nec cursus elit, id vulputate nec cursus augue.</p>
                        <a href="#">090-080-0760</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="contact-item">
                        <i class="fa fa-envelope"></i>
                        <h4>Email</h4>
                        <p>Vivamus ut tellus mi. Nulla nec cursus elit, id vulputate nec cursus augue.</p>
                        <a href="#">info@company.com</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="contact-item">
                        <i class="fa fa-map-marker"></i>
                        <h4>Location</h4>
                        <p>1020 New Mountain Street<br>Forest Park, FP 11220</p>
                        <br>
                        <a href="#">View on Google Maps</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="contact-item">
                        <i class="fa fa-map-marker"></i>
                        <h4>Location</h4>
                        <p>1020 New Mountain Street<br>Forest Park, FP 11220</p>
                        <br>
                        <a href="#">View on Google Maps</a>
                    </div>
                </div>
            </div>
        @endif

    </div>
</div>

<div class="callback-form contact-us">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Send us a <em>message</em></h2>
                    <span>We are happy to share your ideas and inquiries with us</span>
                </div>
            </div>
            <div class="col-md-12">
                <div class="contact-form">
                    <form id="contact" action="" method="get">
                        <div class="row">
                            <div class="col-lg-4 col-md-12 col-sm-12">
                                <fieldset>
                                    <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-4 col-md-12 col-sm-12">
                                <fieldset>
                                    <input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="E-Mail Address" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-4 col-md-12 col-sm-12">
                                <fieldset>
                                    <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="filled-button">Send Message</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@include('layouts.clients')


@include('layouts.footer')

</body>
</html>
