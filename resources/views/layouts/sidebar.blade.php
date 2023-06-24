<aside class="left-sidebar" data-sidebarbg="skin5">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav" class="pt-4">
                <li class="sidebar-item @if($slag == 1) active @endif">
                    <a
                        class="sidebar-link waves-effect waves-dark sidebar-link "
                        href="{{route('home')}}"
                        aria-expanded="false"
                    ><i class="mdi mdi-view-dashboard"></i
                        ><span class="hide-menu">Dashboard</span></a
                    >
                </li>
                <li class="sidebar-item @if($slag == 2) active @endif">
                    <a
                        class="sidebar-link has-arrow waves-effect waves-dark"
                        href="javascript:void(0)"
                        aria-expanded="false"
                    ><i class="mdi mdi-receipt"></i
                        ><span class="hide-menu">Home Page </span></a
                    >
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="{{route('slider')}}" class="sidebar-link  @if($subSlage == 1) active @endif"
                            ><i class="mdi mdi-note-outline"></i
                                ><span class="hide-menu"> Slider Settings </span></a
                            >
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route('header')}}" class="sidebar-link @if($subSlage == 2) active @endif"
                            ><i class="mdi mdi-note-plus"></i
                                ><span class="hide-menu"> Header Settings </span></a
                            >
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route('blogSection')}}" class="sidebar-link @if($subSlage == 3) active @endif"
                            ><i class="mdi mdi-note-plus"></i
                                ><span class="hide-menu"> Blog Section </span></a
                            >
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route('blogs')}}" class="sidebar-link @if($subSlage == 4) active @endif"
                            ><i class="mdi mdi-note-plus"></i
                                ><span class="hide-menu"> Blogs  </span></a
                            >
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route('statistics')}}" class="sidebar-link @if($subSlage == 5) active @endif"
                            ><i class="mdi mdi-note-plus"></i
                                ><span class="hide-menu"> Statistics  </span></a
                            >
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route('aboutSection')}}" class="sidebar-link @if($subSlage == 6) active @endif"
                            ><i class="mdi mdi-note-plus"></i
                                ><span class="hide-menu"> About Section  </span></a
                            >
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route('opinions')}}" class="sidebar-link @if($subSlage == 7) active @endif"
                            ><i class="mdi mdi-note-plus"></i
                                ><span class="hide-menu"> Opinions Section  </span></a
                            >
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route('clients')}}" class="sidebar-link @if($subSlage == 8) active @endif"
                            ><i class="mdi mdi-note-plus"></i
                                ><span class="hide-menu"> Our Clients Section  </span></a
                            >
                        </li>




                    </ul>
                </li>
                <li class="sidebar-item @if($slag == 3) active @endif">
                    <a
                        class="sidebar-link has-arrow waves-effect waves-dark"
                        href="javascript:void(0)"
                        aria-expanded="false"
                    ><i class="mdi mdi-receipt"></i
                        ><span class="hide-menu">About Page </span></a
                    >
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="{{route('aboutHeader')}}" class="sidebar-link @if($subSlage == 10) active @endif"
                            ><i class="mdi mdi-note-outline"></i
                                ><span class="hide-menu"> Page Header </span></a
                            >
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route('aboutUsSection')}}" class="sidebar-link @if($subSlage == 11) active @endif"
                            ><i class="mdi mdi-note-plus"></i
                                ><span class="hide-menu"> About Us Section </span></a
                            >
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route('team')}}" class="sidebar-link @if($subSlage == 12) active @endif"
                            ><i class="mdi mdi-note-plus"></i
                                ><span class="hide-menu"> Team Members </span></a
                            >
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item @if($slag == 4) active @endif">
                    <a
                        class="sidebar-link has-arrow waves-effect waves-dark"
                        href="javascript:void(0)"
                        aria-expanded="false"
                    ><i class="mdi mdi-receipt"></i
                        ><span class="hide-menu">Contact Page </span></a
                    >
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="{{route('contactHeader')}}" class="sidebar-link  @if($subSlage == 15) active @endif"
                            ><i class="mdi mdi-note-outline"></i
                                ><span class="hide-menu"> Page Header  </span></a
                            >
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route('contactInfo')}}" class="sidebar-link @if($subSlage == 15) active @endif"
                            ><i class="mdi mdi-note-plus"></i
                                ><span class="hide-menu"> Contact Information </span></a
                            >
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item @if($slag == 5) active @endif">
                    <a
                        class="sidebar-link has-arrow waves-effect waves-dark"
                        href="javascript:void(0)"
                        aria-expanded="false"
                    ><i class="mdi mdi-receipt"></i
                        ><span class="hide-menu">Services Page </span></a
                    >
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="{{route('serviceHeader')}}" class="sidebar-link @if($subSlage == 13) active @endif"
                            ><i class="mdi mdi-note-outline"></i
                                ><span class="hide-menu"> Header Settings </span></a
                            >
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route('service')}}" class="sidebar-link @if($subSlage == 14) active @endif"
                            ><i class="mdi mdi-note-plus"></i
                                ><span class="hide-menu"> Services Settings </span></a
                            >
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item @if($slag == 6) active @endif">
                    <a
                        class="sidebar-link has-arrow waves-effect waves-dark"
                        href="javascript:void(0)"
                        aria-expanded="false"
                    ><i class="mdi mdi-receipt"></i
                        ><span class="hide-menu">General Settings </span></a
                    >
                    <ul aria-expanded="false" class="collapse first-level">

                        <li class="sidebar-item">
                            <a href="{{route('footer')}}" class="sidebar-link @if($subSlage == 9) active @endif"
                            ><i class="mdi mdi-note-plus"></i
                                ><span class="hide-menu"> Footer Settings </span></a
                            >
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
