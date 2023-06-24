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

    @include('layouts.sidebar' , ['slag' => 4 , 'subSlage' => 16])

    <div class="page-wrapper">

        @include('layouts.breadcrumb' , ['page_title' => 'Dashboard' , 'route' => 'home' , 'parent' => 'Home' , 'child' => 'Contact Page / Contact Info'])
        <div class="container-fluid">

            <div class="card">
                <div class="card-header">
                    <div class="col-6 text-left">
                        <h5 class="card-title">Contact Data </h5>
                    </div>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('storeContactInfo') }}" enctype="multipart/form-data" id="myForm" style="width: 90%; display: block; margin: auto">
                        @csrf

                        <div class="row" style="align-items: end;">
                            <div class="col-6">
                                <div class="form-group">

                                    <label> phone Text</label>
                                    <input class="form-control" type="text" name="phone_txt" id="phone_txt" @if($data)   value="{{$data -> phone_txt}}" @endif >

                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">

                                    <label> phone Number</label>
                                    <input class="form-control" type="text" name="phone" id="phone" @if($data)   value="{{$data -> phone}}" @endif >

                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label> Email Text</label>
                                    <input class="form-control" type="text" name="email_txt" id="email_txt" @if($data)   value="{{$data -> email_txt}}" @endif >
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label> Email Address</label>
                                    <input class="form-control" type="text" name="email" id="email" @if($data)   value="{{$data -> email}}" @endif >
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label> Location 1 Address</label>
                                    <input class="form-control" type="text" name="location1_txt" id="location1_txt"  @if($data)  value="{{$data -> location1_txt}}" @endif>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label> Location Latitudes</label>
                                    <input class="form-control" type="number" step="any" name="location1_lat" id="location1_lat" @if($data)  value="{{$data -> location1_lat}}" @endif>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label> Location Longitude</label>
                                    <input class="form-control" type="number" step="any" name="location1_lang" id="location1_lang" @if($data)  value="{{$data -> location1_lang}}" @endif>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label> Location 2 Address</label>
                                    <input class="form-control" type="text" name="location2_txt" id="location2_txt"  @if($data)  value="{{$data -> location2_txt}}" @endif>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label> Location Latitudes</label>
                                    <input class="form-control" type="number" step="any" name="location2_lat" id="location2_lat" @if($data)  value="{{$data -> location2_lat}}" @endif>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label> Location Longitude</label>
                                    <input class="form-control" type="number" step="any" name="location2_lang" id="location2_lang" @if($data)  value="{{$data -> location2_lang}}" @endif>
                                </div>
                            </div>
                        </div>

                        <input type="hidden"   value="{{$data != null ? $data -> id : 0}}"  id="id" name="id">
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

            $("#img").change(function(){
                readURL(this);
            });
        </script>
    </div>
</div>

</body>
</html>
