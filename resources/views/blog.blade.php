<!DOCTYPE html>
<html lang="en">

@include('layouts.header' , ['page_title' => 'Blog Details Page'])


<body>

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

<!-- Page Content -->
<div class="container" style="min-height: 400px; padding-top: 50px ; padding-bottom: 50px;">
    <div class="row">
        <div class="col-12 text-center">
            <img src="{{asset('images/Blogs' . '/' . $blog -> img)}}">
            <h2 class="text-center" style="margin-bottom: 20px; margin-top: 20px;">{{$blog -> title}}</h2>
          <div style="margin-bottom: 20px; margin-top: 20px;">
              <p style="text-align: left; font-size: 17px;">{{$blog -> details}}</p>
          </div>

        </div>

    </div>
</div>


@include('layouts.footer')
</body>
</html>
