<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from rockstheme.com/rocks/live-goldhyip/user-panel.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 23 Mar 2024 16:03:19 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin Panel</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- favicon.png and root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="/img/logo/favicon.ico">

    <!-- All css here -->

    <!-- bootstrap 4.0 css -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <!-- Animate css -->
    <link rel="stylesheet" href="/css/animate.min.css">
    <!-- magnific css -->
    <link rel="stylesheet" href="/css/magnific-popup.css">
    <!-- meanmenu css -->
    <link rel="stylesheet" href="/css/meanmenu.min.css">
    <!-- Icon font css -->
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/themify-icons.css">
    <link rel="stylesheet" href="/css/flaticon.css">
    <!-- style css -->
    <link rel="stylesheet" href="/style.css">
    <!-- responsive css -->
    <link rel="stylesheet" href="/css/responsive.css">
</head>


<body>
    <!-- preloader  -->
    <div id="preloader"></div>
    <!-- Start header -->
    <div class="overlay"></div>
    <header class="header-one header-dashboard-top">
        <!-- Start top bar -->
        <div class="topbar-area">
            <div class="container">
                <div class="row">
                    <div class=" col-md-8 col-sm-8 col-xs-12">
                        <div class="topbar-left">
                            <ul>
                                <li><a href="#"><i class="fa fa-envelope"></i> {{ Auth::user()->email }}</a></li>
                                <li><a href="#"><i class="fa fa-clock-o"></i> Live support</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="topbar-right">
                            <select class="select d-inline-block">
                                <option>Eng</option>
                                <option>Esp</option>
                                <option>Fra</option>
                                <option>Deu</option>
                            </select>
                            <ul>
                                <li><a href=""><img src="img/icon/login.png"
                                            alt="">{{ Auth::user()->name }}</a>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End top bar -->
        <!-- Start Header Menu -->
        <div id="sticker" class="header-menu-area header-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-2 col-lg-2 col-md-3 d-flex align-items-center">
                        <div class="logo">
                            <a href="index-2.html"><img src="img/logo/logo2.pn" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xl-10 col-lg-10 col-md-9">

                        <div class="header_menu f-right">
                            <nav id="mobile-menu">
                                <ul class="main-menu">
                                    <li><a href="index-2.html">Home</a></li>

                                    <li><a href="plan.html">Investment</a></li>
                                    
                                    <li class="contact"><a href="contact.html">Contacts</a>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mobile-menu"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Menu -->
    </header>
    <!-- End header area -->
    <main>
        <!-- Start Breadcrumb Area -->

        <!-- End Breadcrumb Area -->
        <div class="notify-overlay"></div>
        <div class="dsahboard-area bg-color area-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-4">
                        <aside class="sidebar">
                            <div class="dashboard-side">
                                <div class="dashboard-head">
                                    <div class="dashboard-profile">
                                        <img src="img/about/profile.png" alt="">
                                        <div class="profile-content">
                                            <span class="pro-name">jhon Deo</span>
                                            <span class="pro-number">jonedoe@gmail.com</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="dashboard-menu">
                                    <ul>
                                        <li class=""><a href="user-panel.html"><i
                                                    class="ti-dashboard"></i>Dashboard</a></li>
                                        <li><a href="{{ route('upload.investment.package') }}"><i class="ti-wallet"></i>Upload Investment Package</a>
                                        </li>
                                        <li><a href="{{ route('update.user.account') }}"><i class="ti-import"></i>Update User Account</a>
                                        </li>
                                        <li><a href="user-invest.html"><i class="ti-new-window"></i>Total
                                                Investment</a></li>
                                        <li><a href="user-transection.html"><i
                                                    class="ti-layout-list-thumb"></i>Transection</a></li>
                                        <li><a href="user-notifecations.html"><i class="ti-bell"></i>Notifecations</a>
                                        </li>
                                        <li><a href="user-info.html"><i class="ti-settings"></i>Settings</a></li>
                                        <li><a href="#"><i class="ti-shift-right"></i>Log out</a></li>
                                    </ul>
                                </div>
                            </div>
                        </aside>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-8">
                        <div class="dashboard-top">
                            <div class="userboard">
                                <div class="dashboard-header-right d-flex flex-wrap align-items-center">
                                    <div class="single-left-icon">
                                        <div class="search-inner">
                                            <form action="#">
                                                <div class="search-option">
                                                    <input type="text" placeholder="Search...">
                                                    <button class="button" type="submit"><i
                                                            class="fa fa-search"></i></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="single-right-icon">
                                        <ul class="dashboard-right-menus">
                                            <li>
                                                <a href="#0">
                                                    <i class="ti-bell"></i>
                                                    <span class="number-1">4</span>
                                                </a>
                                                <div class="notification-area">
                                                    <div
                                                        class="notifacation-header d-flex flex-wrap justify-content-between">
                                                        <span>4 New Notifications</span>
                                                        <a href="#0">Clear</a>
                                                    </div>
                                                    <ul class="notification-body">
                                                        <li>
                                                            <a href="#0">
                                                                <div class="noti-line">deposite money from Don</div>
                                                                <span class="info-n">2 Sec ago</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#0">
                                                                <div class="noti-line">deposite money from Don</div>
                                                                <span class="info-n">2 Sec ago</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#0">
                                                                <div class="noti-line">deposite money from Don</div>
                                                                <span class="info-n">2 Sec ago</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <div class="notifacation-footer text-center">
                                                        <a href="#0" class="view-all">View All</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="#0" class="author">
                                                    <i class="ti-user"></i>
                                                </a>
                                                <div class="notification-area">
                                                    <div class="author-body">
                                                        <ul>
                                                            <li>
                                                                <a href="#0"><i class="ti-user"></i>Profile</a>
                                                            </li>
                                                            <li>
                                                                <a href="#0"><i
                                                                        class="ti-settings"></i>Settings</a>
                                                            </li>
                                                            <li>
                                                                <a onclick="logout()"  href="#"><i class="ti-shift-right"></i>Log
                                                                    Out</a>
                                                                    <form id="logout-form" action="{{ route('logout') }} " method="post"> @csrf</form>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>




                        @yield('content')



                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Start Footer Area -->
    <footer class="footer1 dashboard-footer">
        <!-- Start Footer Bottom Area -->
        <div class="footer-area-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="copyright">
                            <p>
                                Copyright © 2021
                                <a href="#">GOLDHYIP</a> All Rights Reserved
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="footer-menu">
                            <ul>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Terms & Condition</a></li>
                                <li><a href="#">Privacy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom Area -->
    </footer>
    <!-- End Footer Area -->

    <!-- All JS here -->

    <!-- modernizr JS -->
    <script src="/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- jquery latest version -->
    <script src="/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- Poper js -->
    <script src="/js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="/js/bootstrap.min.js"></script>
    <!-- owl.carousel js -->
    <script src="/js/owl.carousel.min.js"></script>
    <!-- meanmenu js -->
    <script src="/js/jquery.meanmenu.js"></script>
    <!-- Counter js -->
    <script src="/js/jquery.counterup.min.js"></script>
    <!-- waypoint js -->
    <script src="/js/waypoints.js"></script>
    <!-- magnific js -->
    <script src="/js/magnific.min.js"></script>
    <!-- wow js -->
    <script src="/js/wow.min.js"></script>
    <!-- plugins js -->
    <script src="/js/plugins.js"></script>
    <!-- main js -->
    <script src="/js/main.js"></script>

    <script>
        function logout() {
            $('#logout-form').submit();
        }
    </script>
</body>


<!-- Mirrored from rockstheme.com/rocks/live-goldhyip/user-panel.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 23 Mar 2024 16:03:26 GMT -->

</html>
