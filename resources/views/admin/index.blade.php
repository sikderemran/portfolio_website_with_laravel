<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard</title>
    <!-- Fontfaces CSS-->
    <link href="{{asset('assets/backend/css/font-face.css')}}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{asset('assets/backend/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('assets/backend/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('assets/backend/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">
    <!-- Bootstrap CSS-->
    <link href="{{asset('assets/backend/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">
    <!-- Vendor CSS-->
    <link href="{{asset('assets/backend/vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('assets/backend/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('assets/backend/vendor/wow/animate.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('assets/backend/vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('assets/backend/vendor/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('assets/backend/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('assets/backend/vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">
    <!-- Main CSS-->
    <link href="{{asset('assets/backend/css/theme.css')}}" rel="stylesheet" media="all">
</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <h1>Admin</h1>
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="{{route('dashboard')}}">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a> 
                        </li>
                        <li>
                            <a href="table.html">
                                <i class="fas fa-table"></i>Tables</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>



        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <h1>Admin</h1>
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="{{route('dashboard')}}">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li class="active has-sub">
                            <a class="js-arrow" href="{{route('save_project')}}">
                                <i class="fas fa-tachometer-alt"></i>Add Project</a>
                        </li>
                        <li class="active has-sub">
                            <a class="js-arrow" href="{{route('save_admin_info')}}">
                                <i class="fas fa-tachometer-alt"></i>Add my info</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>


        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-email"></i>
                                            @php 
                                                $message=App\Models\User\Message::where('status',0)->get();
                                                $i=0;
                                            @endphp
                                            @foreach($message as $count)
                                                @php
                                                    $i=$i+1;
                                                @endphp
                                            @endforeach
                                        <span class="quantity">{{$i}}</span>
                                        <div class="email-dropdown js-dropdown">
                                            <div class="email__title">
                                                <p>You have {{$i}} New Emails</p>
                                            </div>
                                            @foreach($message as $message)
                                            <div class="email__item">
                                                <div class="content">
                                                    <p>{{$message->message}}</p>
                                                    <span>{{$message->created_at}}</span>
                                                </div>
                                            </div>
                                            @endforeach
                                            <div class="email__footer">
                                                <a href="{{route('show_all_message')}}">See all emails</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @php
                                $admin_info=App\Models\Admin\Admin::orderBy('id','desc')->first();
                                @endphp
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="{{asset('assets/backend/images/'.$admin_info->image)}}" alt="John Doe"/>
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">{{$admin_info->name}}</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="{{asset('assets/backend/images/'.$admin_info->image)}}" alt="John Doe" />
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="{{route('logout')}}">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- MAIN CONTENT-->
                @yield('content')
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>
    </div>
 <!-- Jquery JS-->
    <script src="{{asset('assets/backend/vendor/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap JS-->
    <script src="{{asset('assets/backend/vendor/bootstrap-4.1/popper.min.js')}}"></script>
    <script src="{{asset('assets/backend/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
    <!-- Vendor JS       -->
    <script src="{{asset('assets/backend/vendor/slick/slick.min.js')}}">
    </script>
    <script src="{{asset('assets/backend/vendor/wow/wow.min.js')}}"></script>
    <script src="{{asset('assets/backend/vendor/animsition/animsition.min.js')}}"></script>
    <script src="{{asset('assets/backend/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
    </script>
    <script src="{{asset('assets/backend/vendor/counter-up/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('assets/backend/vendor/counter-up/jquery.counterup.min.js')}}">
    </script>
    <script src="{{asset('assets/backend/vendor/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{asset('assets/backend/vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{asset('assets/backend/vendor/chartjs/Chart.bundle.min.js')}}"></script>
    <script src="{{asset('assets/backend/vendor/select2/select2.min.js')}}">
    </script>
    <!-- Main JS-->
    <script src="{{asset('assets/backend/js/main.js')}}"></script>
</body>
</html>