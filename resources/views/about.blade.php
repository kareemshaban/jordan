<!DOCTYPE html>
<html lang="en">

@include('layouts.header' , ['page_title' => 'About Us Page'])


<body>

@include('layouts.sub-header' , ['slag' => 2])

<!-- Page Content -->
<div class="page-heading header-text" @if($aboutHeader) style="background-image: url({{asset('images/About/' . $aboutHeader -> img)}})"
    @else style="background-image: url({{asset('assets/images/about_header_holder.jpg')}})"   @endif>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if($aboutHeader)
                    <h1>{{$aboutHeader -> title}}</h1>
                    <span>{{$aboutHeader -> subtitle}}</span>
                @else
                    <h1>About Us</h1>
                    <span>We have over 20 years of experience</span>
                @endif


            </div>
        </div>
    </div>
</div>


<div class="more-info about-info">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="more-info-content">
                    <div class="row">
                        <div class="col-md-6 align-self-center">
                            <div class="right-content">
                             @if($aboutData != null)   {!!  $aboutData -> section_txt  !!}@endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="left-image">
                                <img src="  {{ $aboutData != null ? asset('images/About' . '/' . $aboutData -> img) : asset('images/About/about-image.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@if($team)
<div class="team">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Our team <em>members</em></h2>
                    <span></span>
                </div>
            </div>
          @foreach($team as $member)
            <div class="col-md-4">
                <div class="team-item">
                    <img src="{{asset('images/Team' . '/' . $member -> img)}}" alt="">
                    <div class="down-content">
                        <h4>{{$member -> name}}</h4>
                        <span>{{$member -> role}}</span>
                        <p>{{$member -> description}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endif
@include('layouts.statitactis')
@include('layouts.opinions')



@include('layouts.footer')
</body>
</html>
