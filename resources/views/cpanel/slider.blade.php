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

    @include('layouts.sidebar' , ['slag' => 2 , 'subSlage' => 1])

    <div class="page-wrapper">

        @include('layouts.breadcrumb' , ['page_title' => 'Dashboard' , 'route' => 'home' , 'parent' => 'Home' , 'child' => 'Home Page / Slider'])
        <div class="container-fluid">

            <div class="card">
                <div class="card-header">
                    <div class="col-6 text-left">
                        <h5 class="card-title">Slide Data </h5>
                    </div>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('storeSliderData') }}" enctype="multipart/form-data" id="myForm" style="width: 90%; display: block; margin: auto">
                       @csrf

                        <div class="row" style="align-items: end;">
                            <div class="col-8">
                                <div class="form-group">
                                      <input type="hidden" name="id" id="id">
                                    <label><strong>Slide Text</strong></label>

                                    <textarea class="wysihtml5 form-control" name="slideText" id="slideText" placeholder="Enter Slide Text" rows="12"></textarea>

                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label> Button Text</label>
                                    <input class="form-control" name="btnText" id="btnText" placeholder="Button Text">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label> Internal Url</label>
                                    <select class="form-select" name="inUrl" id="inUrl">
                                        <option value="index">Home Page</option>
                                        <option value="about">About Page</option>
                                        <option value="contact">Contact Page</option>
                                        <option value="services">Services Page</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label> External Url</label>
                                    <input class="form-control" name="exUrl" id="exUrl" placeholder="http://xxxx.example">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-6">
                                    <div class="custom-file">
                                        <input type="file" class="form-control" id="img"   name="img"  accept="image/png, image/jpeg" >
                                        <label class="custom-file-label" for="img1" id="path1">Slide Image   <span style="color:red;">*</span></label>
                                    </div>

                                </div>
                                <div class="col-6 text-right" style="display: flex;justify-content: end;">
                                    <img src="{{asset('assets/images/slider.jpg')}}" id="img1-tag" width="30%" height="auto" class="profile-img"/>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <button class="btn btn-primary text-white"  type="submit"  style="width: 200px; display: block; margin: auto; padding: 10px; font-size: 18px;"> Save </button>
                        </div>




                    </form>
                </div>

            </div>
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-6 text-left">
                            <h5 class="card-title">Page Slides </h5>
                        </div>
                    </div>

                </div>
                <div class="card-body">

                    <div class="table-responsive">
                        <table
                            id="zero_config"
                            class="table table-striped table-bordered"
                        >
                            <thead>
                            <tr>
                                <th class="text-center">Image</th>
                                <th class="text-center">Text</th>
                                <th class="text-center">Button Text</th>
                                <th class="text-center">Internal Route</th>
                                <th class="text-center">External Route</th>
                                <th class="text-center">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($slides as $slide )
                                <tr>
                                    <td class="text-center" style="vertical-align: middle;"><img src="{{asset('images/Slides/' . $slide -> img )}}" width="200px"></td>
                                    <td class="text-center" style="vertical-align: middle;">{!! $slide -> slideText !!}</td>
                                    <td class="text-center" style="vertical-align: middle;">{{$slide -> btnText}}</td>
                                    <td class="text-center" style="vertical-align: middle;">
                                        @if ($slide ->inUrl== 'index')
                                            Home Page
                                        @elseif($slide -> inUrl == 'about')
                                            About Page

                                        @elseif($slide -> inUrl == 'contact')
                                            Contact Page

                                        @elseif($slide -> inUrl == 'services')

                                            Services Page
                                        @endif

                                    </td>
                                    <td class="text-center" style="vertical-align: middle;">{{$slide -> exUrl}}</td>
                                    <td class="text-center" style="vertical-align: middle;">
                                        <a href="{{route('deleteSlide' , $slide -> id)}}">
                                            <button class="btn btn-danger" > <i class="fa fa-trash"></i> Delete  </button>
                                        </a>
                                        <br>
                                        <br>
                                        <button class="btn btn-info btnEdit" value="{{$slide -> id}}"> <i class="fa fa-pencil"></i> Edit  </button>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        @include('layouts.cpanel_footer')
        <script>
            $("#zero_config").DataTable();
        </script>
        <script type="text/javascript">
            $(document).ready(function (){

                document.getElementById('id').value = 0;
                document.getElementById('btnText').value = '' ;
                document.getElementById('inUrl').value = '' ;
                document.getElementById('exUrl').value = '' ;

                $('iframe').contents().find('.wysihtml5-editor').html('');

               $(document).on('click' , '.btnEdit' , function (){
                   const id = this.value ;
                   $.ajax({
                       type: 'get',
                       url: 'getSlide' + '/' + id,
                       dataType: 'json',

                       success: function (response) {
                         document.getElementById('id').value = response.id ;
                         document.getElementById('btnText').value = response.btnText ;
                           document.getElementById('inUrl').value = response.inUrl ;
                           document.getElementById('exUrl').value = response.exUrl ;

                           $('iframe').contents().find('.wysihtml5-editor').html(response.slideText);

                           var img = '../images/Slides/' + response.img;
                           $("#img1-tag").attr('src', img);



                       }
                   });

               });


            });


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
