<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-6 footer-item">
                <img src="{{ $header == null ?  asset('assets/images/white_logo.png') : asset('/images/Logo') . '/' . $header -> white_logo}}">
                <p>{{$footer -> about_txt}}</p>
                <ul class="social-icons">

                    @if($header)
                        @if($header -> facebook)
                            <li><a href="{{$header -> facebook}}"><i class="fa fa-facebook"></i></a></li>
                        @endif
                        @if($header -> twitter)
                            <li><a href="{{$header -> twitter}}"><i class="fa fa-twitter"></i></a></li>
                        @endif
                        @if($header -> linkedin)
                            <li><a href="{{$header -> linkedin}}"><i class="fa fa-linkedin"></i></a></li>
                        @endif
                        @if($header -> whatsapp)
                            <li><a href="{{$header -> whatsapp}}"><i class="fa fa-whatsapp"></i></a></li>
                        @endif
                        @if($header -> instegram)
                            <li><a href="{{$header -> instegram}}"><i class="fa fa-instagram"></i></a></li>
                        @endif
                        @if($header -> g_mail)
                            <li><a href="{{$header -> g_mail}}"><i class="fa fa-mail-forward"></i></a></li>
                        @endif


                    @else
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                    @endif



                </ul>
            </div>

            <div class="col-md-6 footer-item last-item">
                <h4>Contact Us</h4>
                <div class="contact-form">
                    <form id="contact footer-contact" action="" method="post">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <fieldset>
                                    <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <fieldset>
                                    <input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="E-Mail Address" required="">
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
</footer>

<div class="sub-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>Copyright &copy; 2023 {{$footer -> company_name}} .</p>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript -->
<script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Additional Scripts -->
<script src="{{asset('assets/js/custom.js')}}"></script>
<script src="{{asset('assets/js/owl.js')}}"></script>
<script src="{{asset('assets/js/slick.js')}}"></script>
<script src="{{asset('assets/js/accordions.js')}}"></script>


