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

    @include('layouts.sidebar' , ['slag' => 5 , 'subSlage' => 13])

    <div class="page-wrapper">

        @include('layouts.breadcrumb' , ['page_title' => 'Dashboard' , 'route' => 'home' , 'parent' => 'Home' , 'child' => 'Services Page / Header'])
        <div class="container-fluid">

            <div class="card">
                <div class="card-header">
                    <div class="col-6 text-left">
                        <h5 class="card-title">Header Data </h5>
                    </div>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('storeServiceHeaderData') }}" enctype="multipart/form-data" id="myForm" style="width: 90%; display: block; margin: auto">
                        @csrf

                        <div class="row" style="align-items: end;">
                            <div class="col-6">
                                <div class="form-group">

                                    <label>Header Title</label>
                                    <input class="form-control" id="title" name="title" type="text" value="{{$serviceHeader != null ? $serviceHeader -> title : ''}}">

                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">

                                    <label>Header SubTitle</label>
                                    <input class="form-control" id="subtitle" name="subtitle" type="text" value="{{$serviceHeader != null ? $serviceHeader -> subtitle : ''}}">

                                </div>
                            </div>

                        </div>


                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="custom-file">
                                                <input type="file" class="form-control" id="img"   name="img"  accept="image/png, image/jpeg" >
                                                <label class="custom-file-label" for="img1" id="path1">Header Background Image  <span style="color:red;">*</span></label>
                                            </div>

                                        </div>
                                        <div class="col-6 text-right" style="display: flex;justify-content: end;">
                                            <img src="{{ $serviceHeader == null ? asset('assets/images/about_header_holder.jpg') : asset('images/Services' . '/' . $serviceHeader -> img) }}" id="img1-tag" width="30%" height="auto" class="profile-img"/>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                        <input type="hidden" id="id" name="id"  value="{{$serviceHeader != null ? $serviceHeader -> id : 0}}"  >


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
