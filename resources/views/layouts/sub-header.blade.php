<div id="preloader">
    <div class="jumper">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<!-- ***** Preloader End ***** -->

<!-- Header -->
<div class="sub-header">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-xs-12">
                <ul class="left-info">
                    @if($header)
                        <li><a href="#"><i class="fa fa-clock-o"></i>{{$header -> start_day }} - {{$header -> end_day }} {{$header -> start_time }} - {{$header -> end_time }}</a></li>
                        <li><a href="#"><i class="fa fa-phone"></i>{{$header -> contact_phone }}</a></li>
                        @else
                        <li><a href="#"><i class="fa fa-clock-o"></i>Mon-Fri 09:00-17:00</a></li>
                        <li><a href="#"><i class="fa fa-phone"></i>090-080-0760</a></li>
                    @endif

                </ul>
            </div>
            <div class="col-md-4">
                <ul class="right-icons">
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
        </div>
    </div>
</div>

<header class="">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{{route('index')}}" style="margin-top: 0">

                @if(! $header)
                <div class="img_logo" style="height: 80px;width: 300px; "></div>
                    @else
                    <input type="hidden" value="{{ asset('/images/Logo') . '/' . $header -> white_logo}}" id="white_logo">
                    <input type="hidden" value="{{ asset('/images/Logo')  . '/'. $header -> colored_logo}}" id="colored_logo">
                    <div class="img_logo_dynamic" id="img_logo_dynamic" style=" height: 80px;width: 300px; "></div>
                @endif

            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item @if($slag == 1) active @endif">
                        <a class="nav-link" href="{{route('index')}}">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item @if($slag == 2) active @endif">
                        <a class="nav-link " href="{{route('about')}}">About Us</a>
                    </li>
                    <li class="nav-item @if($slag == 3) active @endif">
                        <a class="nav-link " href="{{route('services')}}">Our Services</a>
                    </li>
                    <li class="nav-item @if($slag == 4) active @endif">
                        <a class="nav-link " href="{{route('contact')}}">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>

<script type="text/javascript">
    $(document).ready(function (){
        var img_logo_dynamic = document.getElementById('img_logo_dynamic');
             var img =    document.getElementById('white_logo').value;
        img_logo_dynamic.style.background = `url(${img})`;

    });

    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        var box = $('.header-text').height();
        var header = $('header').height();
        var img_logo_dynamic = document.getElementById('img_logo_dynamic');

        if (scroll >= box - header) {
            $("header").addClass("background-header");
            var img =    document.getElementById('colored_logo').value;
            img_logo_dynamic.style.background = `url(${img})`;

        } else {
            $("header").removeClass("background-header");
            var img =    document.getElementById('white_logo').value;
            img_logo_dynamic.style.background = `url(${img})`;


        }
    });
</script>
