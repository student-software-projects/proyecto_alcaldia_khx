
<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Alcaldia</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <link rel="stylesheet" href="{{ url('css/app.css') }}">

</head>


<body data-sidebar="dark">

<div id="layout-wrapper">
    <!-- Navbar-->
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
            </div>
            <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                <i class="fa fa-fw fa-bars"></i>
            </button>

        </div>
    </div>

    <!-- ========== Left Sidebar Start ========== -->
    <div class="vertical-menu">

        <div data-simplebar class="h-100">

            <!--- Sidemenu -->
            <div id="sidebar-menu">
                <!-- Left Menu Start -->
                <ul class="metismenu list-unstyled" id="side-menu">
                    <li class="menu-title" key="t-menu">Menu</li>

                    <li>
                        <li><a href="{{route('login.form_login')}}" key="t-crypto">Ingresar</a></li>

                    </li>
                </ul>
            </div>
            <!-- Sidebar -->
        </div>
    </div>
    <!-- Left Sidebar End -->


    <div class="main-content">

        <div class="page-content">

            <h1>Bienvenido</h1>
            <button class="btn btn-primary"><a href="{{route('login.form_login')}}">Ingresar</a></button>
        </div>


        @include('layouts.admin.components.footer')
    </div>
    <!-- end main content-->

</div>

<div class="rightbar-overlay"></div>

<script src="{{ url('js/app.js') }}"></script>

</body>
</html>

