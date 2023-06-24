<!DOCTYPE html>
<html dir="ltr" lang="en">
@include('layouts.cpanel_header')

<body>
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
    <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
    </div>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div
    id="main-wrapper"
    data-layout="vertical"
    data-navbarbg="skin5"
    data-sidebartype="full"
    data-sidebar-position="absolute"
    data-header-position="absolute"
    data-boxed-layout="full"
>

    @include('layouts.cpanel_subheader')

    @include('layouts.sidebar' , ['slag' => 2 , 'subSlage' => 2])

    <div class="page-wrapper">

        @include('layouts.breadcrumb' , ['page_title' => 'Dashboard' , 'route' => 'home' , 'parent' => 'Home' , 'child' => 'Home Page / Header'])
        <div class="container-fluid">

            <div class="card">
                <div class="card-header">
                    <div class="col-6 text-left">
                        <h5 class="card-title">Slide Data </h5>
                    </div>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('storeheaderData') }}" enctype="multipart/form-data" id="myForm" style="width: 90%; display: block; margin: auto">
                        @csrf

                        <div class="row" style="align-items: end;">
                            <div class="col-6">
                                <div class="form-group">

                                    <label>Start Day</label>
                                    <select id="start_day" name="start_day" class="form-control">
                                        <option id="Sat" value="Sat" @if($header) @if($header -> start_day == "Sat") selected @endif     @endif  >Saturday </option>
                                        <option id="Sun" value="Sun" @if($header) @if($header -> start_day == "Sun") selected @endif     @endif >Sunday </option>
                                        <option id="Mon" value="Mon" @if($header) @if($header -> start_day == "Mon") selected @endif     @endif >Monday </option>
                                        <option id="Tues" value="Tues" @if($header) @if($header -> start_day == "Tues") selected @endif     @endif >Tuesday </option>
                                        <option id="Wed" value="Wed" @if($header) @if($header -> start_day == "Wed") selected @endif     @endif >Wednesday </option>
                                        <option id="Thurs" value="Thurs" @if($header) @if($header -> start_day == "Thurs") selected @endif     @endif >Thursday </option>
                                        <option id="Fri" value="Fri" @if($header) @if($header -> start_day == "Fri") selected @endif     @endif > Friday </option>

                                    </select>

                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">

                                    <label>Start Day</label>
                                    <select id="end_day" name="end_day" class="form-control">
                                        <option id="Sat" value="Sat" @if($header) @if($header -> end_day == "Sat") selected @endif     @endif  >Saturday </option>
                                        <option id="Sun" value="Sun" @if($header) @if($header -> end_day == "Sun") selected @endif     @endif >Sunday </option>
                                        <option id="Mon" value="Mon" @if($header) @if($header -> end_day == "Mon") selected @endif     @endif >Monday </option>
                                        <option id="Tues" value="Tues" @if($header) @if($header -> end_day == "Tues") selected @endif     @endif >Tuesday </option>
                                        <option id="Wed" value="Wed" @if($header) @if($header -> end_day == "Wed") selected @endif     @endif >Wednesday </option>
                                        <option id="Thurs" value="Thurs" @if($header) @if($header -> end_day == "Thurs") selected @endif     @endif >Thursday </option>
                                        <option id="Fri" value="Fri" @if($header) @if($header -> end_day == "Fri") selected @endif     @endif > Friday </option>

                                    </select>

                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-group">
                                    <label> Start Time</label>
                                    <input class="form-control" type="time" name="start_time" id="start_time" @if($header)  value="{{$header -> start_time}}" @else   value="12:30" @endif>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label> End Time</label>
                                    <input class="form-control" type="time" name="end_time" id="end_time"  @if($header)  value="{{$header -> end_time}}" @else   value="12:30" @endif>
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="form-group">
                                    <label> Header Phone</label>
                                    <input class="form-control" type="text" name="contact_phone" id="contact_phone" @if($header)  value="{{$header -> contact_phone}}"  @endif>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group">
                                    <label> Facebook</label>
                                    <input class="form-control" type="text" name="facebook" id="facebook" @if($header)  value="{{$header -> facebook}}"  @endif>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label> Twitter</label>
                                    <input class="form-control" type="text" name="twitter" id="twitter" @if($header)  value="{{$header -> twitter}}"  @endif>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label> linkedin</label>
                                    <input class="form-control" type="text" name="linkedin" id="linkedin" @if($header)  value="{{$header -> linkedin}}" @endif>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-group">
                                    <label> whatsapp</label>
                                    <input class="form-control" type="text" name="whatsapp" id="whatsapp" @if($header)  value="{{$header -> whatsapp}}" @endif>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label> instagram</label>
                                    <input class="form-control" type="text" name="instegram" id="instegram" @if($header)  value="{{$header -> instegram}}" @endif>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label> G-Mail</label>
                                    <input class="form-control" type="text" name="g_mail" id="g_mail" @if($header)  value="{{$header -> g_mail}}" @endif>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">

                                    <label><strong>Callback Text</strong></label>

                                    <textarea class="wysihtml5 form-control" name="callback_text" placeholder="Enter Callback Text">{!! $header != null ? $header ->  callback_text : ''!!}</textarea>

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="custom-file">
                                                <input type="file" class="form-control" id="white_logo"   name="white_logo"  accept="image/png, image/jpeg" >
                                                <label class="custom-file-label" for="img1" id="path1">White Logo Transparent 300 * 80 px   <span style="color:red;">*</span></label>
                                            </div>

                                        </div>
                                        <div class="col-6 text-right" style="display: flex;justify-content: end;">
                                            <img src="{{ $header == null ? asset('assets/images/white_logo.png') : asset('images/Logo/' . $header -> white_logo) }}" id="img1-tag" width="30%" height="auto" class="profile-img"/>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="custom-file">
                                                <input type="file" class="form-control" id="colored_logo"   name="colored_logo"  accept="image/png, image/jpeg" >
                                                <label class="custom-file-label" for="img1" id="path1">colored Logo Transparent 300 * 80 px   <span style="color:red;">*</span></label>
                                            </div>

                                        </div>
                                        <div class="col-6 text-right" style="display: flex;justify-content: end;">
                                            <img   src="{{ $header == null  ?asset('assets/images/logo_colored.png') : asset('images/logo/' . $header -> colored_logo)}}" id="img2-tag" width="30%" height="auto" class="profile-img"/>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                           <input type="hidden" id="id" name="id"  value="{{$header != null ? $header -> id : 0}}"  >


                        <div class="row">
                            <button class="btn btn-primary text-white"  type="submit"  style="width: 200px; display: block; margin: auto; padding: 10px; font-size: 18px;"> Save </button>
                        </div>




                    </form>
                </div>

            </div>


        </div>
        @include('layouts.cpanel_footer')
        <script>
            $("#zero_config").DataTable();
        </script>
        <script type="text/javascript">
            function readURL(input , i) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('#img1-tag').attr('src', e.target.result);

                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }

            $("#white_logo").change(function(){
                readURL(this);
            });


            function readURL2(input , i) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('#img2-tag').attr('src', e.target.result);

                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }

            $("#colored_logo").change(function(){
                readURL2(this);
            });
        </script>
    </div>
</div>

</body>
</html>
