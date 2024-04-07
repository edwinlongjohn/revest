<!doctype html>
<html class="no-js" lang="zxx">




<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Signup - HYIP</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- favicon.png and root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="img/logo/favicon.ico">

    <!-- All css here -->

    <!-- bootstrap 4.0 css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Icon font css -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <!-- style css -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
</head>


<body>
    <!-- preloader  -->
    <div id="preloader"></div>
    <!-- Start Slider Area -->
    <div class="login-area area-padding fix">
        <div class="login-overlay"></div>
        <div class="container">
            <div class="row justify-content-center text-center ">
                <div class="col-xl-6 col-lg-6 col-md-8">
                    <div class="login-form signup-form">
                        <h4 class="login-title text-center">REGISTER</h4>
                        <form id="contactForm" method="POST" action="{{ route('register') }}" class="log-form"> @csrf

                            @foreach ($errors->all() as $error)
                                <p class="text-danger text-center">{{ $error }}</p>
                            @endforeach

                            <input type="text" id="name" class="form-control" name="name"
                                placeholder="Full Name" required data-error="Please enter your name">

                            <input type="email" id="email" class="form-control" name="email"
                                placeholder="Your Email" required data-error="Please enter your name">

                            <input type="password" id="msg_subject" name="password" class="form-control"
                                placeholder="Password" required data-error="Please enter your message subject">

                            <input type="password" id="cmsg_subject" class="form-control" placeholder="Confirm Password"
                                name="password_confirmation" required data-error="Please enter your message subject">
                            <div class="check-group">
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">Terms & Conditions</label>
                                </div>
                            </div>
                            <button type="submit" id="submit" class="slide-btn login-btn">Sign up</button>
                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                            <div class="clearfix"></div>
                            <div class="clear"></div>
                            <div class="separetor text-center"><span>Or with Signup</span></div>
                            <div class="sign-icon">
                                <ul>
                                    <li><a class="facebook" href="#"><i class="ti-facebook"></i></a></li>
                                    <li><a class="twitter" href="#"><i class="ti-twitter"></i></a></li>
                                    <li><a class="instagram" href="#"><i class="ti-instagram"></i></a></li>
                                    <li><a class="google" href="#"><i class="ti-google"></i></a></li>
                                </ul>
                                <div class="acc-not">have an account? <a href="{{ route('login') }}">Login</a></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Slider Area -->

    <!-- All JS here -->

    <!-- modernizr JS -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- jquery latest version -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- Poper js -->
    <script src="js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- plugins js -->
    <script src="js/plugins.js"></script>
    <!-- main js -->
    <script src="js/main.js"></script>
</body>



</html>
