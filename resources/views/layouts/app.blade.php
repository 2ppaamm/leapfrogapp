<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'LeapFrogger') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"> 

    <!-- Custom Theme CSS -->
    <link href="css/style.css" rel="stylesheet">
   
    <!-- Advanced CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <link href="js/lib/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="js/lib/owl-carousel/owl.theme.css" rel="stylesheet">
    <link href="js/lib/owl-carousel/owl.transitions.css" rel="stylesheet">
    <link href="js/lib/magnific-popup/magnific-popup.css" rel="stylesheet">
    <link href="js/lib/video/YTPlayer.css" rel="stylesheet">
    <link href="js/lib/flipclock/flipclock.css" rel="stylesheet">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon" />    
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top wp1" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand navbar-left" href="#page-top">
                    <img style="max-width:40px; margin-top: -7px;"
                    src="img/leapfrogger.png">Leap<span class="font-light">Frogger</span>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#gallery">Trailers</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about">About Us</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact">Contact</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#blog">Production Blog</a>
                    </li>
                    @if(Auth::check())
                    <li><a href="#">Hello!</a></li>
                    @else
                    <li>
                        <a href="/login">Admin</a>
                        <!--a href="#" onclick="window.signin();">Admin</a-->
                    </li>
                    @endif
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
        @yield('content')
   
    <!-- Contact Section -->
    <section id="contact">
            <div class="row">      
                <div class="col-lg-12">
                    <h4 class="section-title">LeapFrogger Instagram</h4>

                    <!-- LightWidget WIDGET -->
                    <script src="//lightwidget.com/widgets/lightwidget.js"></script>
                    <iframe src="//lightwidget.com/widgets/1894275466d05614b1d967d4001e746b.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width: 100%; border: 0; overflow: hidden;"></iframe>
                </div>
            </div>
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-12 wp12">
                    
                    <ul class="social-buttons">
                        <li><a href="https://www.instagram.com/leap.frogger/"><i class="fa fa-instagram fa-fw"></i> <span>Instagram</span></a></li>
                        <li><a href="https://www.facebook.com/LeapFrogger-2009616019254641/"><i class="fa fa-facebook fa-fw"></i> <span>Facebook</span></a></li>
                        <li><a href="https://vimeo.com/user5998830"><i class="fa fa-vimeo fa-fw"></i> <span>Vimeo</span></a></li>
                        <li><a href="https://www.linkedin.com/company-beta/11201308/"><i class="fa fa-linkedin fa-fw"></i> <span>LinkedIn</span></a></li>
                        <li><a href="https://www.youtube.com/channel/UCUSyXGOKtPlNDH0JcQFk8jA"><i class="fa fa-youtube fa-fw"></i> <span>YouTube</span></a></li>
                        <li><a href="http://i.youku.com/leapfrogger"><img src="img/youku-logo.png"/><br><span>YouKu</span></a></li>
                    </ul>
                    
                </div><!-- /.col-lg-12 --> 
                
            </div><!-- /.row --> 
            <div class="row">
        
        <div class="copyright">
        © Created With <i class="fa fa-heart"></i> by <a href="http://www.leap-frogger.com"> - LeapFrogger</a>
        <br>
        2017
        </div>
        <div class="footer-line">All rights reserved</div>
        </div><!-- /.row --> 
    </div><!-- /.container -->        
    </section><!-- /#contact --> 


    <!-- Core JavaScript Files -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>

    <!-- JavaScript -->
    <script src="js/lib/jquery.appear.js"></script>
    <script src="js/lib/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/lib/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="js/lib/video/jquery.mb.YTPlayer.js"></script>      
    <script src="js/lib/flipclock/flipclock.js"></script>
    <script src="js/lib/jquery.animateNumber.js"></script>
    <script src="js/lib/waypoints.min.js"></script>
      
    <!-- Custom Theme JavaScript -->
    <script src="js/main.js"></script>
    <!-- Auth0 scripts -->
    <script src="//cdn.auth0.com/js/lock/10.0/lock.min.js"></script>
    <script type="text/javascript">

      var lock = new Auth0Lock('O9B4LZwvQzAaNRib00vLahCrQdcm2swE', 'pamelalim.auth0.com');


      function signin() {
        lock.show({
           callbackURL: 'http://localhost/auth0/callback',            
           responseType: 'code',
           authParams: {
            scope: 'openid email'  // Learn about scopes: https://auth0.com/docs/scopes
          }
        });
      }
    </script>

</body>

</html>