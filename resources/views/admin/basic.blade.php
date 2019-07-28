<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Anwarhx Admin</title>

    <link rel="icon" href="{{asset('image/favicon.png')}}">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Aguafina+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">

    <!-- Bootstrap Core Css -->
    <link href="{{asset('assets_admin/plugins/bootstrap/css/bootstrap.css')}}" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{{asset('assets_admin/plugins/node-waves/waves.css')}}" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{asset('assets_admin/plugins/animate-css/animate.css')}}" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="{{asset('assets_admin/css/style.css')}}" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{asset('assets_admin/css/themes/all-themes.css')}}" rel="stylesheet" />

    <link href="{{asset('css/stylesheet.css')}}" rel="stylesheet"  type="text/css" charset="utf-8" />

    <link href="{{asset('bootstrap-toastr/toastr.min.css')}}" rel="stylesheet" type="text/css">

    @yield('style')

</head>

<body class="theme-deep-purple">

<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="preloader">
            <div class="spinner-layer pl-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
        <p>Please wait...</p>
    </div>
</div>

<!-- Search Bar -->
<div class="search-bar">
    <div class="search-icon">
        <i class="material-icons">search</i>
</div>
<input type="text" placeholder="START TYPING...">
<div class="close-search">
    <i class="material-icons">close</i>
</div>
</div>

<!-- Top Bar -->
<nav class="navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
            <a href="javascript:void(0);" class="bars"></a>
            <a class="navbar-brand" href="{{asset('admin')}}">ADMIN PANEL</a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav navbar-right">

                <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>

                <li class="pull-right" style="visibility: hidden"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li>
            </ul>
        </div>
    </div>
</nav>

<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div class="user-info">
            <div class="image">
                <img src="{{asset('assets_admin/images/user.png')}}" width="48" height="48" alt="User" />
            </div>
            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{Auth::user()->name}}</div>
                <div class="email">{{Auth::user()->email}}</div>
                <div class="btn-group user-helper-dropdown">
                    <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                        <li>
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                <i class="material-icons">input</i>
                                Sign Out
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>

                    </ul>
                </div>
            </div>
        </div>

        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">MAIN NAVIGATION</li>
                <li {{Request::is('admin')?'class=active':''}}>
                    <a href="{{asset('admin')}}">
                        <i class="material-icons">home</i>
                        <span>Manage Slides</span>
                    </a>
                </li>
                <li {{Request::is('admin/contact_info')?'class=active':''}}>
                    <a href="{{asset('admin/contact_info')}}">
                        <i class="material-icons">info</i>
                        <span>Contact Information</span>
                    </a>
                </li>
                <li {{Request::is('admin/stock')?'class=active':''}}>
                    <a href="{{asset('admin/stock')}}">
                        <i class="material-icons">list</i>
                        <span>Manage Stock</span>
                    </a>
                </li>
                <li {{Request::is('admin/mechanical_gallery')?'class=active':''}}>
                    <a href="{{asset('admin/mechanical_gallery')}}">
                        <i class="material-icons">image</i>
                        <span>Mechanical Gallery</span>
                    </a>
                </li>
                <li {{Request::is('admin/body_works_gallery')?'class=active':''}}>
                    <a href="{{asset('admin/body_works_gallery')}}">
                        <i class="material-icons">photo_album</i>
                        <span>Body Works Gallery</span>
                    </a>
                </li>
                <li {{Request::is('admin/contact_messages')?'class=active':''}}>
                    <a href="{{asset('admin/contact_messages')}}">
                        <i class="material-icons">message</i>
                        <span>Contact Messages</span>
                    </a>
                </li>
                <li {{Request::is('admin/change')?'class=active':''}}>
                    <a href="{{asset('admin/change')}}">
                        <i class="material-icons">star</i>
                        <span>Change Password and Email</span>
                    </a>
                </li>



            </ul>
        </div>


    </aside>

</section>


@yield('content')

<!-- Jquery Core Js -->
<script src="{{asset('assets_admin/plugins/jquery/jquery.min.js')}}"></script>

<!-- Bootstrap Core Js -->
<script src="{{asset('assets_admin/plugins/bootstrap/js/bootstrap.js')}}"></script>

{{--<script src="{{asset('assets_admin/plugins/bootstrap-select/js/bootstrap-select.js')}}"></script>--}}
<!-- Slimscroll Plugin Js -->
<script src="{{asset('assets_admin/plugins/jquery-slimscroll/jquery.slimscroll.js')}}"></script>

<!-- Waves Effect Plugin Js -->
<script src="{{asset('assets_admin/plugins/node-waves/waves.js')}}"></script>

@yield('script')

<script src="{{asset('assets_admin/js/admin.js')}}"></script>
{{--<script src="{{asset('assets_admin/js/pages/tables/jquery-datatable.js')}}"></script>--}}

<script src="{{asset('assets_admin/js/demo.js')}}"></script>

<script src="{{asset('bootstrap-toastr/toastr.min.js')}}" type="text/javascript"></script>

</body>

</html>
