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

   @include('layouts.sidebar' , ['slag' => 1 , 'subSlage' => 0])

    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
           @include('layouts.breadcrumb' , ['page_title' => 'Dashboard' , 'route' => 'home' , 'parent' => 'Home' , 'child' => 'Dashboard'])
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Sales Cards  -->
            <!-- ============================================================== -->
            <div class="row" hidden>
                <!-- Column -->
                <div class="col-md-6 col-lg-2 col-xlg-3">
                    <div class="card card-hover">
                        <div class="box bg-cyan text-center">
                            <h1 class="font-light text-white">
                                <i class="mdi mdi-view-dashboard"></i>
                            </h1>
                            <h6 class="text-white">Dashboard</h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-4 col-xlg-3">
                    <div class="card card-hover">
                        <div class="box bg-success text-center">
                            <h1 class="font-light text-white">
                                <i class="mdi mdi-chart-areaspline"></i>
                            </h1>
                            <h6 class="text-white">Charts</h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-2 col-xlg-3">
                    <div class="card card-hover">
                        <div class="box bg-warning text-center">
                            <h1 class="font-light text-white">
                                <i class="mdi mdi-collage"></i>
                            </h1>
                            <h6 class="text-white">Widgets</h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-2 col-xlg-3">
                    <div class="card card-hover">
                        <div class="box bg-danger text-center">
                            <h1 class="font-light text-white">
                                <i class="mdi mdi-border-outside"></i>
                            </h1>
                            <h6 class="text-white">Tables</h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-2 col-xlg-3">
                    <div class="card card-hover">
                        <div class="box bg-info text-center">
                            <h1 class="font-light text-white">
                                <i class="mdi mdi-arrow-all"></i>
                            </h1>
                            <h6 class="text-white">Full Width</h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <!-- Column -->
                <div class="col-md-6 col-lg-4 col-xlg-3">
                    <div class="card card-hover">
                        <div class="box bg-danger text-center">
                            <h1 class="font-light text-white">
                                <i class="mdi mdi-receipt"></i>
                            </h1>
                            <h6 class="text-white">Forms</h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-2 col-xlg-3">
                    <div class="card card-hover">
                        <div class="box bg-info text-center">
                            <h1 class="font-light text-white">
                                <i class="mdi mdi-relative-scale"></i>
                            </h1>
                            <h6 class="text-white">Buttons</h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-2 col-xlg-3">
                    <div class="card card-hover">
                        <div class="box bg-cyan text-center">
                            <h1 class="font-light text-white">
                                <i class="mdi mdi-pencil"></i>
                            </h1>
                            <h6 class="text-white">Elements</h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-2 col-xlg-3">
                    <div class="card card-hover">
                        <div class="box bg-success text-center">
                            <h1 class="font-light text-white">
                                <i class="mdi mdi-calendar-check"></i>
                            </h1>
                            <h6 class="text-white">Calnedar</h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-2 col-xlg-3">
                    <div class="card card-hover">
                        <div class="box bg-warning text-center">
                            <h1 class="font-light text-white">
                                <i class="mdi mdi-alert"></i>
                            </h1>
                            <h6 class="text-white">Errors</h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
            </div hi>
            <!-- ============================================================== -->
            <!-- Sales chart -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-md-flex align-items-center">
                                <div>
                                    <h4 class="card-title">Site Analysis</h4>
                                    <h5 class="card-subtitle">Overview of Site Analysis</h5>
                                </div>
                            </div>
                            <div class="row">
                                <!-- column -->
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="bg-dark p-10 text-white text-center">
                                                <i class="mdi mdi-account fs-3 mb-1 font-16"></i>
                                                <h5 class="mb-0 mt-1">{{$data['total_users'] }}</h5>
                                                <small class="font-light">Total Users</small>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="bg-dark p-10 text-white text-center">
                                                <i class="mdi mdi-plus fs-3 font-16"></i>
                                                <h5 class="mb-0 mt-1">{{$data['new_users'] }}</h5>
                                                <small class="font-light">New Users</small>
                                            </div>
                                        </div>
                                        <div class="col-6 mt-3">
                                            <div class="bg-dark p-10 text-white text-center">
                                                <i class="mdi mdi-web fs-3 mb-1 font-16"></i>
                                                <h5 class="mb-0 mt-1">{{$data['total_countries']}}</h5>
                                                <small class="font-light">Total Countries</small>
                                            </div>
                                        </div>
                                        <div class="col-6 mt-3">
                                            <div class="bg-dark p-10 text-white text-center">
                                                <i class="mdi mdi-web fs-3 mb-1 font-16"></i>
                                                <h5 class="mb-0 mt-1">{{$data['new_countries']}}</h5>
                                                <small class="font-light">New Countries</small>
                                            </div>
                                        </div>
                                        <div class="col-6 mt-3">
                                            <div class="bg-dark p-10 text-white text-center">
                                                <i class="mdi mdi-email fs-3 mb-1 font-16"></i>
                                                <h5 class="mb-0 mt-1">{{$data['total_emails']}}</h5>
                                                <small class="font-light">Total Emails</small>
                                            </div>
                                        </div>
                                        <div class="col-6 mt-3">
                                            <div class="bg-dark p-10 text-white text-center">
                                                <i class="mdi mdi-email-alert fs-3 mb-1 font-16"></i>
                                                <h5 class="mb-0 mt-1">{{$data['new_emails']}}</h5>
                                                <small class="font-light">New Emails</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- column -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-md-flex align-items-center">
                                <div>
                                    <h4 class="card-title">Site visitors</h4>
                                    <h5 class="card-subtitle">Overview of Site Visitors</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="table-responsive">
                                <table
                                    id="zero_config"
                                    class="table table-striped table-bordered"
                                >
                                    <thead>
                                    <tr>
                                        <th class="text-center">IP</th>
                                        <th class="text-center">Country</th>
                                        <th class="text-center">Visits Count</th>
                                        <th class="text-center">Last Visit</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($visits as $visit)
                                        <td class="text-center">{{$visit -> id}}</td>
                                        <td class="text-center">{{$visit -> country}}</td>
                                        <td class="text-center">{{$visit -> visit_count}}</td>
                                        <td class="text-center">{{$visit -> last_visit}}</td>

                                    @endforeach
                                    </tbody>
                                </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Sales chart -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Recent comment and chats -->
            <!-- ============================================================== -->

            <!-- ============================================================== -->
            <!-- Recent comment and chats -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
       @include('layouts.cpanel_footer')
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->

</body>
</html>
