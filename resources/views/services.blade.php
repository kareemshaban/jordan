<!DOCTYPE html>
<html lang="en">

@include('layouts.header' , ['page_title' => 'Services Page'])

<body>

@include('layouts.sub-header' , ['slag' => 3])
<!-- Page Content -->
<div class="page-heading header-text" @if($serviceHeader) style="background-image: url({{asset('images/Services/' . $serviceHeader -> img)}})"
     @else style="background-image: url({{asset('assets/images/about_header_holder.jpg')}})"   @endif>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if($serviceHeader)
                    <h1>{{$serviceHeader -> title}}</h1>
                    <span>{{$serviceHeader -> subtitle}}</span>
                @else
                    <h1>Our Services</h1>
                    <span>..............</span>
                @endif


            </div>
        </div>
    </div>
</div>

<div class="single-services">
    <div class="container">
        <div class="row" id="tabs">
            <div class="col-md-4">
                <ul>
                    @foreach($services as $service)
                    <li><a href='#tabs-{{$service -> id}}'>{{$service -> name}}<i class="fa fa-angle-right"></i></a></li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-8">
                <section class='tabs-content'>
                    @foreach($services as $service)
                    <article id='tabs-{{$service -> id}}'>
                        <img src="{{asset('images/Services/' . $service -> img)}}" alt="">
                        <h4>{{$service -> name}}</h4>
                         <p> {{$service -> details}}</p>
                    </article>
                    @endforeach

                </section>
            </div>
        </div>
    </div>
</div>

@include('layouts.contact_form')

@include('layouts.clients')


@include('layouts.footer')

</body>
</html>
