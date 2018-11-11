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
    {{--<link href="{{asset('vendors/parsleyjs/bower_components/bootstrap/dist/css/bootstrap.css')}}" rel="stylesheet">--}}

    <!-- Font Awesome -->
    <link href="{{asset('vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{asset('vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">

    <!-- bootstrap-wysiwyg -->
    <link href="{{asset('vendors/google-code-prettify/bin/prettify.min.css')}}" rel="stylesheet">

    <link href="{{asset('vendors/normalize-css/normalize.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/ion.rangeSlider/css/ion.rangeSlider.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/ion.rangeSlider/css/ion.rangeSlider.skinFlat.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/select2/dist/css/select2.min.css')}}" rel="stylesheet">
    <!-- Switchery -->
    <link href="{{asset('vendors/switchery/dist/switchery.min.css')}}" rel="stylesheet">
    <!-- starrr -->
    <link href="{{asset('vendors/starrr/dist/starrr.css')}}" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="{{asset('vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">


    <!-- Bootstrap Colorpicker -->
    <link href="{{asset('vendors/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css')}}" rel="stylesheet">

    <link href="{{asset('vendors/cropper/dist/cropper.min.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('build/css/custom.min.css')}}" rel="stylesheet">

    <link href="{{asset('vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css')}}" rel="stylesheet">


    <!-- bootstrap-progressbar -->
    <link href="{{asset('vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{asset('vendors/jqvmap/dist/jqvmap.min.css')}}" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{asset('vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('build/css/custom.min.css')}}" rel="stylesheet">


</head>

<body class="nav-md">

@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col ">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    {{--<a href="#" class="site_title"><img src="{{asset('images/Logo.jpg')}}"> <span>Storymoja</span></a>--}}
                    <a href="#" class="site_title"><i class="fa fa-book"></i> <span>Storymoja</span></a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile clearfix">
                    <div class="profile_pic">
                        <img src="{{asset('images/user/profile-pictures/'.Auth::user()->avatar)}}" alt="Avatar" class="img-circle profile_img">
                    </div>
                    <div class="profile_info">
                        <span>Welcome,</span>
                        <h2>{{Auth::user()->name}}</h2>
                    </div>
                </div>
                <!-- /menu profile quick info -->

                <br />



            <!-- sidebar menu -->


                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h3>General</h3>
                        <ul class="nav side-menu">
                            <li>
                                <a href="{{url('mainform')}}"><i class="fa fa-home"></i> Home (main-form)
                                </a>
                            </li>
                            <li><a href="{{url('profile')}}"><i class="fa fa-user"></i> My profile </a>
                            </li>
                            <li><a href="{{url('institutions')}}"><i class="fa fa-clone"></i> Institutions visited </a>
                            </li>
                            <li><a href="{{url('orderpage')}}"> <i class="fa fa-shopping-bag"> </i> Place Order </a> </li>


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
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <img src="{{asset('images/user/profile-pictures/'.Auth::user()->avatar)}}" alt="Avatar"> {{Auth::user()->name}}
                                {{--<img src="images/user/profile-pictures/{{Auth::user()->avatar}}" alt=""> {{Auth::user()->name}}--}}
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                                <li><a href="{{url('profile')}}"> Profile</a></li>

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

                        {{--the messages icon in the top right nav bar--}}

                        <li role="presentation">
                            <a href="{{url('shopping-cart')}}">
                                <i class="fa fa-shopping-cart"> Shopping Cart</i>
                                <span class="badge bg-green">{{Session::has('cart') ? Session::get('cart')->totalQty : ''}}</span>
                            </a>

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






{{--<!-- Custom Theme Scripts -->--}}
<script src="{{asset('build/js/custom.min.js')}}"></script>



{{--<!-- jquery.inputmask -->--}}
<script src="{{asset('vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js')}}"></script>


<script src="{{asset('vendors/moment/min/moment.min.js')}}"></script>

<script src="{{asset('vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js')}}"></script>



{{--initialize datepicker--}}
<script>
    $(function () {
        $('#myDatepickper').datetimepicker();
    })

</script>

{{--axios--}}
<script src="{{asset('js/axios/axios.min.js')}}"></script>
@yield('scripts')

</body>
</html>
