<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from coderthemes.com/abstack/layouts/green/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Jan 2020 20:38:39 GMT -->
<head>
    <meta charset="utf-8" />
    <title>{{$gn->site_name}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset($gn->site_icon)}}">

    <!-- App css -->
    <link href="{{asset('assets/dashboard/')}}/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/dashboard/')}}/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/dashboard/')}}/css/app.min.css" rel="stylesheet" type="text/css" />
    @yield('css')
</head>

<body>

<!-- Begin page -->
<div id="wrapper">


    <!-- Topbar Start -->
    <div class="navbar-custom">
        <ul class="list-unstyled topnav-menu float-right mb-0">


            <li class="dropdown notification-list">
                <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    @if(!empty(Auth::user()->image))
                        <img src="{{asset(Auth::user()->image)}}" alt="user-image" class="rounded-circle">
                    @else
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcR0SF5sKostY8H2aEocS6QaDEgGm2qISmCTeFvb3-mDix8QN-Pz" alt="user-image" class="rounded-circle">
                    @endif                    <span class="ml-1">{{Auth::user()->name}} <i class="mdi mdi-chevron-down"></i> </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                    <!-- item-->
                    <div class="dropdown-header noti-title">
                        <h6 class="text-overflow m-0">Welcome !</h6>
                    </div>

                    <!-- item-->
                    <a href="{{route('admin.profile')}}" class="dropdown-item notify-item">
                        <i class="fe-user"></i>
                        <span>Profile</span>
                    </a>


                    <!-- item-->
                    <a href="{{route('admin.change.pass')}}" class="dropdown-item notify-item">
                        <i class="fe-lock"></i>
                        <span>Change Password</span>
                    </a>

                    <div class="dropdown-divider"></div>

                    <!-- item-->
                    <a href="{{route('admin.logout')}}" class="dropdown-item notify-item">
                        <i class="fe-log-out"></i>
                        <span>Logout</span>
                    </a>

                </div>
            </li>


        </ul>

        <!-- LOGO -->
        <div class="logo-box">
            <a href="{{route('admin.dashboard')}}" class="logo text-center">
                        <span class="logo-lg">
<img src="{{asset($gn->site_logo)}}" alt="" style="height: 90px;width: 100px">

                        </span>
                <span class="logo-sm">
                            <!-- <span class="logo-sm-text-dark">U</span> -->

                        </span>
            </a>
        </div>

        <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
            <li>
                <button class="button-menu-mobile waves-effect waves-light">
                    <i class="fe-menu"></i>
                </button>
            </li>



        </ul>
    </div>
    <!-- end Topbar -->


    <!-- ========== Left Sidebar Start ========== -->
    <div class="left-side-menu">

        <div class="slimscroll-menu">

            <!--- Sidemenu -->
            <div id="sidebar-menu">

                <ul class="metismenu" id="side-menu">

                    <li class="menu-title">Main Menu</li>

                    <li>
                        <a href="{{route('admin.dashboard')}}">
                            <i class="fe-airplay"></i>
                            <span> Dashboard </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('admin.payment.gateway')}}">
                            <i class="fe-airplay"></i>
                            <span> Payment Gateway </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('admin.plan')}}">
                            <i class="fe-airplay"></i>
                            <span> Plan </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('admin.deposit.hostory')}}">
                            <i class="fe-airplay"></i>
                            <span> Deposit History </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('admin.users')}}">
                            <i class="fe-airplay"></i>
                            <span> Users </span>
                        </a>
                    </li>

                    <li>
                        <a href="javascript: void(0);">
                            <i class="fe-briefcase"></i>
                            <span> Percentage Withdraw </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="{{route('admin.percentage.withdraw')}}">Pending</a></li>
                            <li><a href="{{route('admin.percentage.withdraw.complete')}}">Complete</a></li>
                            <li><a href="{{route('admin.percentage.withdraw.rejected')}}">Rejected</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript: void(0);">
                            <i class="fe-briefcase"></i>
                            <span> Capital Withdraw </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="{{route('admin.capital.withdraw')}}">Pending</a></li>
                            <li><a href="{{route('admin.capital.withdraw.complete')}}">Complete</a></li>
                            <li><a href="{{route('admin.capital.withdraw.rejected')}}">Rejected</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{route('admin.general.setting')}}">
                            <i class="fe-airplay"></i>
                            <span> General Settings </span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript: void(0);">
                            <i class="fe-briefcase"></i>
                            <span> Frontend Controller </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="{{route('admin.front.home')}}">Home</a></li>
                            <li><a href="{{route('admin.home.how.it.works')}}">Home How It Works</a></li>
                            <li><a href="{{route('admin.home.our.features')}}">Home Our Features</a></li>
                            <li><a href="{{route('admin.testimonials')}}">Testimonials</a></li>
                            <li><a href="{{route('admin.aboutus.page')}}">About Us Page</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{route('admin.contact')}}">
                            <i class="fe-airplay"></i>
                            <span>Contact </span>
                        </a>
                    </li>





                </ul>

            </div>
            <!-- End Sidebar -->

            <div class="clearfix"></div>

        </div>
        <!-- Sidebar -left -->

    </div>
    <!-- Left Sidebar End -->

    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">

              @yield('admin')

            </div> <!-- end container-fluid -->

        </div> <!-- end content -->



        <!-- Footer Start -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <?php
                        $time = \Carbon\Carbon::now()->format('Y');
                        ?>
                        {{$time}} &copy; {{$gn->site_name}}
                    </div>

                </div>
            </div>
        </footer>
        <!-- end Footer -->

    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->

</div>
<!-- END wrapper -->

<!-- Right Sidebar -->

<!-- /Right-bar -->

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<!-- Vendor js -->
<script src="{{asset('assets/dashboard/')}}/js/vendor.min.js"></script>

<!-- Chart JS -->
<script src="{{asset('assets/dashboard/')}}/libs/chart-js/Chart.bundle.min.js"></script>

<!-- Init js -->

<!-- App js -->
<script src="{{asset('assets/dashboard/')}}/js/app.min.js"></script>
@yield('js')

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@include('layouts.message')
</body>

<!-- Mirrored from coderthemes.com/abstack/layouts/green/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Jan 2020 20:39:58 GMT -->
</html>
