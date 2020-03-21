<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }} </title>

    <!-- Bootstrap -->
    <link href="{{asset('UI/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('UI/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('UI/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{asset('UI/vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="{{asset('UI/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{asset('UI/vendors/jqvmap/dist/jqvmap.min.css')}}" rel="stylesheet" />
    <!-- bootstrap-daterangepicker -->
    <link href="{{asset('UI/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('UI/build/css/custom.min.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">

            <div class="col-md-3 left_col">

                <div class="left_col scroll-view">

                    <div class="navbar nav_title" style="border: 0;">
                        <a href="/" class="site_title"><i class="fa fa-shopping-cart"></i> <span>{{ config('app.name') }}</span></a>
                    </div>

                    <div class="clearfix"></div>

                    <!-- menu profile quick info -->
                    @guest
                    <div class="profile clearfix">
                        <div class="profile_info">
                            <span class="p-5"> Please log in</span>
                        </div>
                    </div>
                    @else
                    <div class="profile clearfix">
                        <div class="profile_pic">
                            <img src="https://www.shareicon.net/data/2016/05/24/770117_people_512x512.png" alt="profile" class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Welcome,</span>
                            <h2>{{Auth::user()->name}}</h2>
                        </div>
                    </div>
                    @endguest
                    <!-- /menu profile quick info -->

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <h3>Explore</h3>
                            <ul class="nav side-menu">
                                <li>
                                    <a href="/"><i class="fa fa-home"></i> Home</a>
                                </li>
                                <li>
                                    <a href="/products-list"><i class="fa fa-archive"></i> Explore products</a>
                                </li>
                                <li>
                                    <a href="/buyers"><i class="fa fa-users"></i> Explore buyers </a>
                                </li>
                                <li><a href="/orders"><i class="fa fa-shopping-cart"></i> Pending orders</a>
                                </li>
                            </ul>
                        </div>
                        <div class="menu_section">
                            <h3>Create</h3>
                            <ul class="nav side-menu">
                                <li>
                                    <a href="/product/create"><i class="fa fa-archive"></i> Product </a>
                                </li>

                            </ul>
                        </div>
                      

                    </div>
                    <!-- /sidebar menu -->

                </div>

            </div>


            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <nav>
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>

                        <ul class="nav navbar-nav navbar-right">
                            @guest
                            <li>
                                <a href="{{route('register')}}" class="btn btn-light">Register</a>
                            </li>
                            <li>
                                <a href="{{route('login')}}" class="btn btn-light ">Log in</a>
                            </li>
                            @else
                            <li class="">
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <img src="https://www.shareicon.net/data/2016/05/24/770117_people_512x512.png" alt="">{{Auth::user()->name}}
                                    <span class=" fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu pull-right">
                                    <li>
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            <i class="fa fa-sign-out pull-right"></i> {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </li>
                            @endguest
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- /top navigation -->

            @yield('content')


        </div>
    </div>

    
</body>
<!-- jQuery -->
<script src="{{asset('UI/vendors/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('UI/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset('UI/vendors/fastclick/lib/fastclick.js')}}"></script>
    <!-- NProgress -->
    <script src="{{asset('UI/vendors/nprogress/nprogress.js')}}"></script>
    <!-- Chart.js -->
    <script src="{{asset('UI/vendors/Chart.js/dist/Chart.min.js')}}"></script>
    <!-- gauge.js -->
    <script src="{{asset('UI/vendors/gauge.js/dist/gauge.min.js')}}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{asset('UI/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
    <!-- iCheck -->
    <script src="{{asset('UI/vendors/iCheck/icheck.min.js')}}"></script>
    <!-- Skycons -->
    <script src="{{asset('UI/vendors/skycons/skycons.js')}}"></script>
    <!-- Flot -->
    <script src="{{asset('UI/vendors/Flot/jquery.flot.js')}}"></script>
    <script src="{{asset('UI/vendors/Flot/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('UI/vendors/Flot/jquery.flot.time.js')}}"></script>
    <script src="{{asset('UI/vendors/Flot/jquery.flot.stack.js')}}"></script>
    <script src="{{asset('UI/vendors/Flot/jquery.flot.resize.js')}}"></script>
    <!-- Flot plugins -->
    <script src="{{asset('UI/vendors/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
    <script src="{{asset('UI/vendors/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
    <script src="{{asset('UI/vendors/flot.curvedlines/curvedLines.js')}}"></script>
    <!-- DateJS -->
    <script src="{{asset('UI/vendors/DateJS/build/date.js')}}"></script>
    <!-- JQVMap -->
    <script src="{{asset('UI/vendors/jqvmap/dist/jquery.vmap.js')}}"></script>
    <script src="{{asset('UI/vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
    <script src="{{asset('UI/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{asset('UI/vendors/moment/min/moment.min.js')}}"></script>
    <script src="{{asset('UI/vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{asset('UI/build/js/custom.min.js')}}"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script>
  $(document).ready( function () {
    $('#productsTable').DataTable();
} );
</script>

</html>