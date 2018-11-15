<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('images/icon.png')}}" type="image/ico" />
    {{--<link rel="icon" href="images/favicon.ico" type="image/ico" />--}}

    <title>Storymoja </title>

    <!-- Bootstrap -->
    <link href="{{asset('vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Bootstrap Colorpicker -->
    <link href="{{asset('/vendors/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css')}}" rel="stylesheet">

    <link href="{{asset('/vendors/cropper/dist/cropper.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    {{--<link href="{{asset('vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">--}}
    <!-- NProgress -->
    <link href="{{asset('vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{asset('vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">

    <!-- bootstrap-wysiwyg -->
    <link href="{{asset('vendors/google-code-prettify/bin/prettify.min.css')}}" rel="stylesheet">


    <link href="{{asset('vendors/select2/dist/css/select2.min.css')}}" rel="stylesheet">
    <!-- Switchery -->
    <link href="{{asset('vendors/switchery/dist/switchery.min.css')}}" rel="stylesheet">
    <!-- starrr -->
    <link href="{{asset('vendors/starrr/dist/starrr.css')}}" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="{{asset('vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('build/css/custom.min.css')}}" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="{{asset('vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{asset('vendors/jqvmap/dist/jqvmap.min.css')}}" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{asset('vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('build/css/custom.min.css')}}" rel="stylesheet">
    <!-- Ion.RangeSlider -->
    <link href="{{asset('vendors/normalize-css/normalize.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/ion.rangeSlider/css/ion.rangeSlider.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/ion.rangeSlider/css/ion.rangeSlider.skinFlat.css')}}" rel="stylesheet">

    <!-- Datatables -->
    <link href="{{asset('vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/mycss/davis.css')}}">

    <style>

    </style>


</head>

<body class="nav-md">

{{--status in sessions--}}
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif



<div class="container body">
    <div class="main_container">
        <div class="col-md-3  left_col ">
            <div class="left_col scroll-view  ">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="#" class="site_title"><i class="fa fa-book"></i> <span>Storymoja</span></a>
                </div>

                <div class="clearfix"></div>


                <!-- menu profile quick info -->
                <div class="profile clearfix">
                    <div class="profile_pic">
                        <img src="{{asset('images/admin/profile-pictures/'.Auth::user()->avatar)}}" alt="Avatar" class="img-circle profile_img">
                        {{--<img src="images/admin/profile-pictures/{{Auth::user()->avatar}}" alt="..." class="img-circle profile_img">--}}
                    </div>
                    <div class="profile_info">
                        <span>Welcome,</span>
                        <h2>{{Auth::user()->name}}</h2>
                    </div>
                </div>
                <!-- /menu profile quick info -->

                <br />

            <!-- sidebar menu -->

                <div   id="sidebar-menu" class="main_menu_side hidden-print main_menu ">
                    <div class="menu_section ">
                        <h3>General</h3>
                        <ul class="nav side-menu ">
                            <li><a href="{{route('home')}}"><i class="fa fa-home"></i> HOME</a>

                            </li>
                            {{--regions--}}
                            <li><a><i class="fa fa-globe"></i> Regions <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">

                                    <li> <a href="{{url('admin/view-regions')}}"> <i class="fa fa-globe"></i> View All regions</a></li>

                                    {{--edit a subregion and delete--}}
                                    <li> <a href="{{url('admin/view-subregions')}}"> <i class="fa fa-globe"></i> View All Counties</a></li>
                                    <li> <a href="{{url('admin/view-subcounties')}}"> <i class="fa fa-globe"></i> View All Sub Counties</a></li>


                                </ul>
                            </li>

                            <li><a><i class="fa fa-users"></i> Administrators <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="{{url('admin/authorize/user')}}"> <i class="fa fa-user"></i> Add an Admin</a></li>

                                    {{--edit and delete a regional manager--}}
                                    <li> <a href="{{url('admin/admins')}}"> <i class="fa fa-users"></i> View All Admins</a></li>
                                </ul>

                           </li>


                            <li><a><i class="fa fa-building"></i> Institutions <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="{{url('admin/view/public/primary')}}"> <i class="fa fa-building"></i> Public Primary Schools</a></li>

                                    <li><a href="{{url('admin/view/private/primary')}}"> <i class="fa fa-building"></i> Private Primary Schools</a></li>

                                    {{--edit a region and delete--}}
                                    <li> <a href="{{url('admin/view/private/secondary')}}"> <i class="fa fa-building"></i> Private Secondary Schools</a></li>
                                    <li> <a href="{{url('admin/view/public/secondary')}}"> <i class="fa fa-building"></i> Public Secondary Schools</a></li>

                                    {{--edit a subregion and delete--}}
                                    <li> <a href="{{url('admin/view/ngos')}}"> <i class="fa fa-building"></i> NGO's</a></li>
                                    <li> <a href="{{url('admin/view/counties')}}"> <i class="fa fa-building-o"></i> County Offices</a></li>
                                    <li> <a href="{{url('admin/view/bookshops')}}"> <i class="fa fa-book"></i> Bookshops</a></li>
                                    <li> <a href="{{url('admin/view/ecds')}}"> <i class="fa fa-child"></i> ECD/Kindergartens/Nursery</a></li>




                                </ul>
                            </li>



                        </ul>

                    </div>
                    <div class="menu_section">
                        <h3>More</h3>
                        <ul class="nav side-menu">
                            <li><a href="{{url('admin/view/allreps')}}"><i class="fa fa-users"></i> Sales reps and Institutions uploaded</a></li>
                            <li><a><i class="fa fa-globe"></i> Regional Reports  <span class="fa fa-chevron-down"></span>  </a>
                            <ul class="nav child_menu">
                                <li><a href="{{url('admin/coast/details')}}"> Coast </a></li>
                                <li><a href="{{url('admin/rift')}}"> Rift Valley </a></li>
                                <li><a href="{{url('admin/nairobi')}}"> Nairobi </a></li>
                                <li><a href="{{url('admin/central')}}"> Central </a></li>
                                <li><a href="{{url('admin/western')}}"> Western </a></li>
                                <li><a href="{{url('admin/nyanza')}}"> Nyanza </a></li>
                                <li><a href="{{url('admin/northeastern')}}"> North Eastern </a></li>
                                <li><a href="{{url('admin/eastern')}}"> Eastern </a></li>


                            </ul>
                            </li>
                            <li><a> <i class="fa fa-building"></i> Schools <span class="fa fa-chevron-down" ></span> </a>
                                <ul class="nav child_menu">
                                    <li><a href="{{url('admin/coast/view/schools')}}"> <i class="fa fa-globe"></i> Coast </a></li>
                                    <li><a href="{{url('admin/rift/view/schools')}}"> <i class="fa fa-globe"></i> Rift Valley </a></li>
                                    <li><a href="{{url('admin/nairobi/view/schools')}}"> <i class="fa fa-globe"></i> Nairobi </a></li>
                                    <li><a href="{{url('admin/central/view/schools')}}"> <i class="fa fa-globe"></i> Central </a></li>
                                    <li><a href="{{url('admin/western/view/schools')}}"> <i class="fa fa-globe"></i> Western </a></li>
                                    <li><a href="{{url('admin/nyanza/view/schools')}}"> <i class="fa fa-globe"></i> Nyanza </a></li>
                                    <li><a href="{{url('admin/northeastern/view/schools')}}"> <i class="fa fa-globe"></i> North Eastern </a></li>
                                    <li><a href="{{url('admin/eastern/view/schools')}}"> <i class="fa fa-globe"></i> Eastern </a></li>

                                </ul>
                            </li>

                            <li><a href="{{url('admin/inventory')}}" > <i class="fa fa-book"></i>Storymoja Books </a></li>
                            <li><a href="{{url('admin/addpage')}}" > <i class="fa fa-plus"></i>Add book </a></li>
                            <li><a href="{{url('admin/orders')}}" > <i class="fa fa-reorder"></i>Orders </a></li>
                        </ul>
                    </div>

                </div>
                {{--<!-- /sidebar menu -->--}}

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
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <img src="{{asset('images/admin/profile-pictures/'.Auth::user()->avatar)}}" alt="Avatar"> {{Auth::user()->name}}
                                {{--<img src="images/admin/profile-pictures/{{Auth::user()->avatar}}" alt="Avatar"> {{Auth::user()->name}}--}}
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                                <li><a href="{{url('/admin/profile')}}"> Profile</a></li>

                                <li>
                                    <a href="{{url('logout')}}"
                                       onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"><i class="fa fa-sign-out pull-right"></i> Log Out
                                    </a>

                                    <form id="logout-form" action="{{url('/logout')}}" method="post">

                                        {{csrf_field()}}
                                    </form>
                                </li>
                            </ul>
                        </li>


                    </ul>
                </nav>
            </div>
        </div>

        <!-- /top navigation -->

        <!-- page content -->
    @yield('content')


    <!-- /page content -->

        <!-- footer content -->
        <footer>
            <div class="pull-left">
                Storymoja Africa
            </div>
            <div class="pull-right">
                 <a href="https://storymojaafrica.co.ke">Storymojaafrica.co.ke</a>
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>
</div>

<!-- jQuery -->
<script src="{{asset('vendors/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('vendors/fastclick/lib/fastclick.js')}}"></script>
<!-- NProgress -->
<script src="{{asset('vendors/nprogress/nprogress.js')}}"></script>
<!-- Chart.js -->
<script src="{{asset('vendors/Chart.js/dist/Chart.min.js')}}}"></script>
<!-- gauge.js -->
<script src="{{asset('vendors/gauge.js/dist/gauge.min.js')}}"></script>
<!-- bootstrap-progressbar -->
<script src="{{asset('vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
<!-- iCheck -->
<script src="{{asset('vendors/iCheck/icheck.min.js')}}"></script>
<!-- Skycons -->
<script src="{{asset('vendors/skycons/skycons.js')}}"></script>
<!-- Flot -->
<script src="{{asset('vendors/Flot/jquery.flot.js')}}"></script>
<script src="{{asset('vendors/Flot/jquery.flot.pie.js')}}"></script>
<script src="{{asset('vendors/Flot/jquery.flot.time.js')}}"></script>
<script src="{{asset('vendors/Flot/jquery.flot.stack.js')}}"></script>
<script src="{{asset('vendors/Flot/jquery.flot.resize.js')}}"></script>
<!-- Flot plugins -->
<script src="{{asset('vendors/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
<script src="{{asset('vendors/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
<script src="{{asset('vendors/flot.curvedlines/curvedLines.js')}}"></script>
<!-- DateJS -->
<script src="{{asset('vendors/DateJS/build/date.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('vendors/jqvmap/dist/jquery.vmap.js')}}"></script>
<script src="{{asset('vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
<script src="{{asset('vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
<!-- bootstrap-daterangepicker -->
<script src="{{asset('vendors/moment/min/moment.min.js')}}"></script>
<script src="{{asset('vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

<!-- Custom Theme Scripts -->
<script src="{{asset('build/js/custom.min.js')}}"></script>

<!-- jquery.inputmask -->
<script src="{{asset('vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js')}}"></script>
<!-- jQuery Knob -->
<script src="{{asset('vendors/jquery-knob/dist/jquery.knob.min.js')}}"></script>
<!-- Cropper -->
{{--<script src="{{asset('vendors/cropper/dist/cropper.min.js')}}"></script>--}}
<script src="{{asset('js/axios/axios.min.js')}}"></script>



@yield('scripts')

{{--initialize datepicker--}}
<script>
    $('#myDatepicker').datetimepicker();

    $('#myDatepicker2').datetimepicker({
        format: 'DD.MM.YYYY'
    });

    $('#myDatepicker3').datetimepicker({
        format: 'hh:mm A'
    });

    $('#myDatepicker4').datetimepicker({
        ignoreReadonly: true,
        allowInputToggle: true
    });

    $('#datetimepicker6').datetimepicker();

    $('#datetimepicker7').datetimepicker({
        useCurrent: false
    });

    $("#datetimepicker6").on("dp.change", function(e) {
        $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
    });

    $("#datetimepicker7").on("dp.change", function(e) {
        $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
    });


</script>

</body>
</html>
