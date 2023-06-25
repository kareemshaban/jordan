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

    @include('layouts.sidebar' , ['slag' => 3 , 'subSlage' => 12])

    <div class="page-wrapper">

        @include('layouts.breadcrumb' , ['page_title' => 'Dashboard' , 'route' => 'home' , 'parent' => 'Home' , 'child' => 'About Page / Team'])
        <div class="container-fluid">

            <div class="card">
                <div class="card-header">
                    <div class="col-6 text-left">
                        <h5 class="card-title">Team Member Data </h5>
                    </div>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('storeTeam') }}" enctype="multipart/form-data" id="myForm" style="width: 90%; display: block; margin: auto">
                        @csrf

                        <div class="row" style="align-items: end;">
                            <div class="col-6">
                                <div class="form-group">

                                    <label>Member Name</label>
                                    <input class="form-control" name="name" id="name" placeholder="member name">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Member Role</label>
                                    <input class="form-control" name="role" id="role" placeholder="member role">
                                </div>
                            </div>
                        </div>

                        <div class="row" style="width: 100%">
                            <div class="col-12">
                                <div class="form-group">
                                    <label> Member Details</label>
                                    <textarea id="description" name="description" rows="12" style="width: 100%"></textarea>
                                </div>
                            </div>


                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-6">
                                    <div class="custom-file">
                                        <input type="file" class="form-control" id="img"   name="img"  accept="image/png, image/jpeg" required>
                                        <label class="custom-file-label" for="img1" id="path1">Slide Image   <span style="color:red;">*</span></label>
                                    </div>

                                </div>
                                <div class="col-6 text-right" style="display: flex;justify-content: end;">
                                    <img src="{{asset('assets/images/team_img_holder.jpg')}}" id="img1-tag" width="30%" height="auto" class="profile-img"/>
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
                            <h5 class="card-title">Team Members </h5>
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
                                <th class="text-center">Name</th>
                                <th class="text-center">Role</th>
                                <th class="text-center">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($team as $member )
                                <tr>
                                    <td class="text-center" style="vertical-align: middle;"><img src="{{asset('images/Team/' . $member -> img )}}" width="200px"></td>
                                    <td class="text-center" style="vertical-align: middle;">{{$member -> name}} </td>
                                    <td class="text-center" style="vertical-align: middle;">{{$member -> role}}</td>

                                    <td class="text-center" style="vertical-align: middle;">
                                        <a href="{{route('deleteTeam' , $member -> id)}}">
                                            <button class="btn btn-danger" > <i class="fa fa-trash"></i> Delete  </button>
                                        </a>

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
