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

    @include('layouts.sidebar' , ['slag' => 2 , 'subSlage' => 6])

    <div class="page-wrapper">

        @include('layouts.breadcrumb' , ['page_title' => 'Dashboard' , 'route' => 'home' , 'parent' => 'Home' , 'child' => 'Home Page / Header'])
        <div class="container-fluid">

            <div class="card">
                <div class="card-header">
                    <div class="col-6 text-left">
                        <h5 class="card-title">About Section  Data </h5>
                    </div>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('storeAboutSectionData') }}" enctype="multipart/form-data" id="myForm" style="width: 90%; display: block; margin: auto">
                        @csrf

                        <div class="row" style="align-items: end;">
                            <div class="col-12">
                                <div class="form-group">

                                    <label>Section Title</label>
                                    <input class="form-control" id="title" name="title" type="text" value="{{$data != null ? $data -> title : ''}}">

                                </div>
                            </div>

                        </div>
                        <div class="row" style="align-items: end;">
                            <div class="col-12">
                                <div class="form-group">

                                    <label>Section Details</label>
                                  <textarea class="form-control-lg" id="details" name="details" rows="12" style="width: 100%">{{$data != null ? $data -> details : ''}}</textarea>

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
                                                <label class="custom-file-label" for="img1" id="path1">Section Image img <span style="color:red;">*</span></label>
                                            </div>

                                        </div>
                                        <div class="col-6 text-right" style="display: flex;justify-content: end;">
                                            <img src="{{ $data == null ? asset('assets/images/about_section_holder.png') : asset('images/AboutSection/' . $data -> img) }}" id="img1-tag" width="30%" height="auto" class="profile-img"/>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                        <input type="hidden" id="id" name="id"  value="{{$data != null ? $data -> id : 0}}"  >


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
