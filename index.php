<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="">
    <title>iCrime</title>
    <meta name="description" content="Crime Reporting">
    <meta name="author" content="Mercy Wamuyu">

    <!-- Check if the language is set to RTL, so apply the RTL layouts -->
    <!-- Otherwise apply the normal LTR layouts -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css"
          integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ=="
          crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"
            integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw=="
            crossorigin=""></script>
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
</head>
<body>
<div id="applet">
<!--    @include('includes.partials.logged-in-as')-->
<!--    @include('frontend.includes.nav')-->
    <nav class="navbar navbar-default nav-sticky">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#frontend-navbar-collapse">
                    <span class="sr-only">Toggle</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#" class="navbar-brand">iCrime</a>
            </div><!--navbar-header-->

            <div class="collapse navbar-collapse" id="frontend-navbar-collapse">

                <ul class="nav navbar-nav navbar-right">

                    <li><a href="#">Home</a></li>
                    <li><a href="#">Login</a></li>
                    <li><a href="#">Help & Support</a></li>

                </ul>
            </div><!--navbar-collapse-->
        </div><!--container-->
    </nav>
<!--    @include('includes.partials.messages')-->
<!--    @yield('content')-->
    <div class="container-fluid home-area" data-aos="fade-up">
        <video autoplay muted loop id="myVideo">
            <source src="https://www.w3schools.com/howto/rain.mp4" type="video/mp4">
            Your browser does not support HTML5 video.
        </video>
        <div class="row">
            <div class="col-md-6 intro">
                <h1>iCrime</h1>
                <p>
                    There is a high rate of crime in all regions of Kenya, particularly in Nairobi, Mombasa, Kisumu, and coastal beach resorts. There are regular reports of attacks against tourists by groups of armed assailants. However,
                    the most common crime in Kenya is carjacking so the criminal can commit an armed robbery.
                </p>
                <div class="intro-btns">
                    <a href="#" class="btn btn-primary btn-intro"><span>LOGIN</span></a>
                </div>
            </div>
            <div class="col-md-4 col-md-offset-1 intro-img">
            </div>
        </div>
        <div class="row col-md-1 col-md-offset-6">
            <a href="#how-it-works" class="js-scroll-trigger">
                <div id="scroll-down" class="scroll-down animated infinite slideInDown"><i class="fa fa-chevron-down"></i></div>
            </a>
        </div>
    </div>
<!--    @include('frontend.includes.footer')-->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h4 style="">About Us</h4>
                    <p class="about-us">To talk to us:</p>
                    <ul class="about-connect">
                        <li><i class="fa fa-home"></i>Box 925-00100, Nairobi - Kenya.</li>
                        <li><i class="fa fa-envelope"></i>support@neverest.co.ke</li>
                        <li><i class="fa fa-phone"></i>0718-942538</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h4>Social Media</h4>
                    <p>Stay up-to-date through our social media channels:</p>
                    <ul class="social-links">
                        <li><a href="#"><i class="fa fa-facebook"></i> Facebook</a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i> Twitter</a></li>
                        <li><a href="#"><i class="fa fa-youtube"></i> YouTube</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h4>Quick Links</h4>
                    <ul class="quick-links">
                        <li><a href="#about-us" class="js-scroll-trigger">About Us</a></li>
                        <li><a href="#contact-us" class="js-scroll-trigger">Contact Us</a></li>
                        <li><a href="#projects" class="js-scroll-trigger">Projects</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container text-center copyright">
            <small>&copy; iCrime, 2018. All Rights Reserved.</small>
        </div>
    </footer>
</div><!-- #app -->

<!-- Scripts -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/jquery.sticky.js"></script>
<script>
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox();
    });

    AOS.init({
        offset: 200,
        duration: 600,
        easing: 'ease-in-sine',
        delay: 100,
    });


    $(function () {
        $(".home-area").height($(window).height());
        $(".nav-sticky").sticky({topSpacing: 0});
        // Smooth scrolling using jQuery easing
        $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html, body').animate({
                        scrollTop: (target.offset().top - 25)
                    }, 1000, "easeInOutExpo");
                    return false;
                }
            }
        });
    })
</script>
</body>
</html>
