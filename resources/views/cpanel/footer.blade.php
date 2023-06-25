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

    @include('layouts.sidebar' , ['slag' => 2 , 'subSlage' => 9])

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
                    <form method="POST" action="{{ route('storeFooterData') }}"  id="myForm" style="width: 90%; display: block; margin: auto">
                        @csrf

                        <div class="row" style="align-items: end;">
                            <div class="col-12">
                                <div class="form-group">

                                    <label>Company Name</label>
                                    <input class="form-control" id="company_name" name="company_name" type="text" value="{{$data != null ? $data -> company_name : ''}}">

                                </div>
                            </div>

                        </div>
                        <div class="row" style="align-items: end;">
                            <div class="col-12">
                                <div class="form-group">

                                    <label>Company About </label>
                                    <textarea class="form-control-lg" id="about_txt" name="about_txt" rows="12" style="width: 100%">{{$data != null ? $data -> about_txt : ''}}</textarea>

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
