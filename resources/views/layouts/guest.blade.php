<!doctype html>
<html class="no-js" lang="zxx">



<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home 01 - HYIP</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- favicon.png and root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="img/logo/favicon.ico">

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
    <header class="header-one">
        <!-- Start top bar -->
        <div class="topbar-area">
            <div class="container">
                <div class="row">
                    <div class=" col-md-8 col-sm-8 col-xs-12">
                        <div class="topbar-left">
                            <ul>
                                <li><a href="#"><i class="fa fa-envelope"></i> info@custom23.com</a></li>
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
                                <li><a href="{{ route('login') }}"><img src="img/icon/login.png"
                                            alt="">Login</a>
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
                            <a href="index-2.html"><img src="img/logo/logo2.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xl-10 col-lg-10 col-md-9">
                        <div class="header-right">
                            <a href="{{ route('register') }}" class="hd-btn">Signup</a>
                        </div>
                        <div class="header_menu f-right">
                            <nav id="mobile-menu">
                                <ul class="main-menu">
                                    <li><a href="index-2.html">Home</a></li>
                                    <li><a href="user-panel.html">Dashboard</a></li>
                                    <li><a href="plan.html">Investment</a></li>
                                    <li class="menu-item-has-children"><a href="#">Pages</a>
                                        <ul class="submenu">
                                            <li><a href="about.html">About us</a></li>
                                            <li><a href="review.html">Reviews</a></li>
                                            <li><a href="faq.html">FAQ</a></li>
                                            <li><a href="team.html">Our teams</a></li>
                                            <li><a href="terms.html">Terms & Conditions</a></li>
                                            <li><a href="error.html">Error</a></li>
                                            <li><a href="login.html">Login</a></li>
                                            <li><a href="signup.html">Signup</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="#">Blog</a>
                                        <ul class="submenu">
                                            <li><a href="blog.html">Blog Grid</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                        </ul>
                                    </li>
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

    @yield('content')

    <!-- Start Footer Area -->
    <footer class="footer1">
        <div class="footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-8">
                        <div class="footer-content logo-footer">
                            <div class="footer-head">
                                <h4>About Goldhyip</h4>
                                <p>
                                    When replacing a selection. help agencies to define their new business objectives
                                    and then create. maintains the amount of lines. When replacing a selection. help
                                    agencies to define their. maintains the amount of lines. When replacing a selection.
                                </p>
                                <div class="footer-icons">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-google"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-pinterest"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4">
                        <div class="footer-content">
                            <div class="footer-head">
                                <h4>Invest plan</h4>
                                <ul class="footer-list">
                                    <li><a href="#">Silver plan</a></li>
                                    <li><a href="#">Gold plan</a></li>
                                    <li><a href="#">Platinum Plan</a></li>
                                    <li><a href="#">Diamond plan</a></li>
                                    <li><a href="#">Premium plan</a></li>
                                    <li><a href="#">Custom plan</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- end single footer -->
                    <div class="col-xl-2 col-lg-2 col-md-4">
                        <div class="footer-content rs-mar-0">
                            <div class="footer-head">
                                <h4>Payments option</h4>
                                <ul class="footer-list">
                                    <li><a href="#">Ripple coin</a></li>
                                    <li><a href="#">Bitcoin</a></li>
                                    <li><a href="#">Ethireum</a></li>
                                    <li><a href="#">Light coin</a></li>
                                    <li><a href="#">Coin base</a></li>
                                    <li><a href="#">Skrill card</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4">
                        <div class="footer-content rs-mar-0">
                            <div class="footer-head">
                                <h4>Accounts</h4>
                                <ul class="footer-list">
                                    <li><a href="#">Signup</a></li>
                                    <li><a href="#">Login</a></li>
                                    <li><a href="#">Privacy</a></li>
                                    <li><a href="#">Notification</a></li>
                                    <li><a href="#">Condition</a></li>
                                    <li><a href="#">Black night</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- end single footer -->
                    <div class="col-xl-2 col-lg-2 col-md-4">
                        <div class="footer-content last-content rs-mar-0">
                            <div class="footer-head">
                                <h4>Support</h4>
                                <ul class="footer-list">
                                    <li><a href="#">Customer Care</a></li>
                                    <li><a href="#">Live chat</a></li>
                                    <li><a href="#">Notification</a></li>
                                    <li><a href="#">Reviews</a></li>
                                    <li><a href="#">Terms & Condition</a></li>
                                    <li><a href="#">Contact us </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
</body>



</html>
