<html lang="en">

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="apple-touch-icon" sizes="76x76" href="{{asset("assets/img/apple-icon.png")}}">
    <link rel="icon" type="image/png" href="{{asset("assets/img/favicon.png")}}">

    <title>
        Bao2912
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700"/>
    <!-- Nucleo Icons -->
    <link href="{{asset("assets/css/nucleo-icons.css")}}" rel="stylesheet"/>
    <link href="{{asset("assets/css/nucleo-svg.css")}}" rel="stylesheet"/>
    <!-- ASM_PHP2/App/Views/layouts/assets/css/nucleo-icons.css -->
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
{{--    <link id="pagestyle" href="./App/Views/layouts/assets/css/material-dashboard.css?v=3.1.0" rel="stylesheet"/>--}}
    <link id="pagestyle" href="{{asset("assets/css/material-dashboard.css?v=3.1.0")}}" rel="stylesheet"/>
    <!-- Nepcha Analytics (nepcha.com) -->
    <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
    <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
    <style>
        .status {
            text-align: center;
            color: red;
        }
    </style>
</head>

<!-- <header> -->
<body class="g-sidenav-show  bg-gray-100">
<aside
        class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark"
        id="sidenav-main">

    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
           aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="index.php?act=home.php">
            <img src="{{asset("assets/img/logo-ct.png")}}" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold text-white">Bao2912</span>
        </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">
            @if(!isset($_SESSION['isLogin']))
                <span class="nav-link-text ms-1">Bạn cần đăng nhập để sử dụng</span>
            @endif
            @if(isset($_SESSION['isLogin']))
                <li class="nav-item">
                    <a class="nav-link text-white " href="{{route('list-calendar')}}">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">view_in_ar</i>
                        </div>
                        <span class="nav-link-text ms-1">Lịch Làm Của Tôi</span>
                    </a>
                </li>
            @endif
            @if(isset($_SESSION['isLogin']) &&$_SESSION['isLogin'] && $_SESSION['user']['roleID'] == 1)
                

                <li class="nav-item">
                    <a class="nav-link text-white " href="{{route("list-user")}}">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">receipt_long</i>
                        </div>
                        <span class="nav-link-text ms-1">Quản lý nhân viên</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white " href="{{route('list-censor')}}">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">view_in_ar</i>
                        </div>
                        <span class="nav-link-text ms-1">Admin duyệt lịch làm</span>
                    </a>
                </li>
            @endif
            @if(isset($_SESSION['isLogin']) && $_SESSION['isLogin'])
                <li class="nav-item">
                    <a class="nav-link text-white " href="{{route('logout')}}">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">notifications</i>
                        </div>
                        <span href="{{route('logout')}}" class="nav-link-text ms-1">Logout</span>
                    </a>
                </li>
            @endif
        </ul>
    </div>
</aside>
<!-- </header> -->