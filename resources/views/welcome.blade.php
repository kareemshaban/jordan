<!DOCTYPE html>
<html lang="en">

@include('layouts.header' , ['page_title' => 'Home Page'])

<body>

<!-- ***** Preloader Start ***** -->
@include('layouts.sub-header' , ['slag' => 1])

<!-- Page Content -->
<!-- Banner Starts Here -->
<div class="main-banner header-text" id="top">
    @if(count($slides) > 0 )
    <div class="Modern-Slider">
         @foreach($slides as $slide)
        <div class="item ">
            <div class="img-fill" style="background-image: url({{asset('images/Slides/' . $slide -> img)}})">
                <div class="text-content" style="color: white">
                     {!! $slide -> slideText !!}

                    <a style="margin-top: 30px;" href="{{$slide -> inUrl != null ? route($slide -> inUrl) : $slide -> exUrl}}" class="filled-button">{{$slide -> btnText}}</a>
                </div>
            </div>
        </div>
        @endforeach

    </div>
        @else
        <div class="Modern-Slider">
            <!-- Item -->
            <div class="item item-0">
                <div class="img-fill">
                    <div class="text-content">
                        <p>Sed tincidunt dictum lobortis. Aenean tempus diam vel augue luctus dignissim. Nunc ornare leo torto

                            Sed tincidunt dictum lobortis. Aenean tempus diam vel augue luctus dignissim. Nunc ornare leo torto
                            Sed tincidunt dictum lobortis. Aenean tempus diam vel augue luctus dignissim. Nunc ornare leo torto
                        </p>
                        <a href="#" class="filled-button">Action</a>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
<!-- Banner Ends Here -->

<div class="request-form">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                @if($header)
               {!! $header -> callback_text !!}
                    @else
                <p style="color: white">Sed tincidunt dictum lobortis. Aenean tempus diam vel augue luctus dignissim. Nunc ornare leo torto</p>
                @endif
            </div>
            <div class="col-md-4">
                <a href="{{route('contact')}}" class="border-button">Contact Us</a>
            </div>
        </div>
    </div>
</div>




<div class="services">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    @if(!$blogSection)
                    <h2>Financial <em>Services</em></h2>
                    <span>Aliquam id urna imperdiet libero mollis hendrerit</span>
                        @else
                        <h2> {{$blogSection -> title}} <em>Section</em></h2>
                        <span>{{$blogSection -> sub_title}}</span>
                    @endif
                </div>
            </div>

             @foreach($blogs as $blog)
                <div class="col-md-4">
                    <div class="service-item">
                        <img src="{{asset('images/Blogs' . '/' . $blog -> img)}}" alt="">
                        <div class="down-content">
                            <h4>{{$blog -> title}}</h4>
                            <p>{{$blog -> short_details}}</p>
                            <a href="{{route('getBlog' , $blog -> id)}}" target="_blank" class="filled-button">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>


@include('layouts.statitactis')

@if($aboutSection)
<div class="more-info">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="more-info-content">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="left-image">
                                <img src="{{asset('images/AboutSection' . '/' . $aboutSection -> img)}}" alt="">
                            </div>
                        </div>
                        <div class="col-md-6 align-self-center">
                            <div class="right-content">
                                <h2>{{$aboutSection -> title}}</h2>
                                <p>{{$aboutSection -> details}}</p>
                                <a href="{{route('about')}}" target="_blank" class="filled-button">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif

@include('layouts.opinions')

@include('layouts.contact_form')


@include('layouts.clients')

<!-- Footer Starts Here -->
@include('layouts.footer')

</body>
</html>
