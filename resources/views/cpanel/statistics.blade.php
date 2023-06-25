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

    @include('layouts.sidebar' , ['slag' => 2 , 'subSlage' => 5])

    <div class="page-wrapper">

        @include('layouts.breadcrumb' , ['page_title' => 'Dashboard' , 'route' => 'home' , 'parent' => 'Home' , 'child' => 'Home Page / Slider'])
        <div class="container-fluid">

            <div class="card">
                <div class="card-header">
                    <div class="col-6 text-left">
                        <h5 class="card-title">Statistics Data </h5>
                    </div>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('storeStatisticsData') }}" enctype="multipart/form-data" id="myForm" style="width: 90%; display: block; margin: auto">
                        @csrf

                        <div class="row" style="align-items: end;">
                            <div class="col-12">
                                <div class="form-group">

                                    <label><strong>Statistics Text</strong></label>

                                    <textarea class="wysihtml5 form-control" name="text" placeholder="Enter Statistics Text" rows="12">@if($data){!! $data -> text !!} @endif </textarea>

                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label> counter1 Text</label>
                                    <input class="form-control" type="text" name="count1_txt" id="count1_txt" @if($data)   value="{{$data -> count1_txt}}" @endif >
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label> counter1 Value</label>
                                    <input class="form-control" type="number" name="count1_value" id="count1_value" @if($data)   value="{{$data -> count1_value}}" @endif >
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label> counter2 Text</label>
                                    <input class="form-control" type="text" name="count2_txt" id="count2_txt"  @if($data)  value="{{$data -> count2_txt}}" @endif>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label> counter2 Value</label>
                                    <input class="form-control" type="number" name="count2_value" id="count2_value" @if($data)  value="{{$data -> count2_value}}" @endif>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label> counter3 Text</label>
                                    <input class="form-control" type="text" name="count3_txt" id="count3_txt" @if($data)  value="{{$data -> count3_txt}}" @endif>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label> counter3Value</label>
                                    <input class="form-control" type="number" name="count3_value" id="count3_value" @if($data)  value="{{$data -> count3_value}}" @endif>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label> counter4 Text</label>
                                    <input class="form-control" type="text" name="count4_txt" id="count4_txt" @if($data)  value="{{$data -> count4_txt}}" @endif>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label> counter3Value</label>
                                    <input class="form-control" type="number" name="count4_value" id="count4_value" @if($data)  value="{{$data -> count4_value}}" @endif>
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
