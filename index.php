<!DOCTYPE html>
<!--[if IE 8]><html class="ie ie8"> <![endif]-->
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!--><html><!--<![endif]-->
    <head>
        <!-- Basic -->
        <meta charset="utf-8">
        <title>Menuiserie - Accueil</title>     
        <meta name="keywords" content="Jaali" />
        <meta name="description" content="Jaali">
        <meta name="author" content="Jaali.in">
        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Web Fonts  -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">
        <!-- Libs CSS -->
        <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.css">
        <link rel="stylesheet" href="vendor/owl-carousel/owl.carousel.css" media="screen">
        <link rel="stylesheet" href="vendor/owl-carousel/owl.theme.css" media="screen">
        <link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.css" media="screen">
        <link rel="stylesheet" href="vendor/isotope/jquery.isotope.css" media="screen">
        <link rel="stylesheet" href="vendor/mediaelement/mediaelementplayer.css" media="screen">
        <!-- Theme CSS -->
        <link rel="stylesheet" href="css/theme.css">
        <link rel="stylesheet" href="css/theme-elements.css">
        <link rel="stylesheet" href="css/theme-blog.css">
        <link rel="stylesheet" href="css/theme-shop.css">
        <link rel="stylesheet" href="css/theme-animate.css">
        <!-- Current Page CSS -->
        <link rel="stylesheet" href="vendor/rs-plugin/css/settings.css" media="screen">
        <link rel="stylesheet" href="vendor/circle-flip-slideshow/css/component.css" media="screen">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="css/theme-responsive.css" />
        <!-- Skin CSS -->
        <link rel="stylesheet" href="css/skins/default.css">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="css/custom.css">
        <!-- Head Libs -->
        <script src="vendor/modernizr.js"></script>
        <!--[if IE]>
            <link rel="stylesheet" href="css/ie.css">
        <![endif]-->

        <!--[if lte IE 8]>
            <script src="vendor/respond.js"></script>
        <![endif]-->
    </head>
    <body class="boxed">
        <div class="body">
            <header id="header">
                                <?php 
                    $currentPage = basename($_SERVER['PHP_SELF']);
                    $menuClass = 'class="active"';
                ?>
                <div class="container">
                    <h1 class="logo">
                        <a href="index.html">
                            <img alt="Jaali" width="153" height="96" data-sticky-width="82" data-sticky-height="10" src="img/logo2.png">
                        </a>
                    </h1>
                    
                    <button class="btn btn-responsive-nav btn-inverse" data-toggle="collapse" data-target=".nav-main-collapse">
                        <i class="icon icon-bars"></i>
                    </button>
                </div>
                <div class="navbar-collapse nav-main-collapse collapse">
                    <div class="container">
                        <ul class="social-icons">
                            <li class="facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook">Facebook</a></li>
                            <li class="twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter">Twitter</a></li>
                            <li class="googleplus"><a href="http://plus.google.com/" target="_blank" title="Google+">Google+</a></li>
                        </ul>
                        <nav class="nav-main mega-menu">
                            <ul class="nav nav-pills nav-main" id="mainMenu">
                                <li <?= ($currentPage=="index.php")?$menuClass:"" ?> >
                                    <a href="index.php">Accueil</a>
                                </li>
                                <li <?= ($currentPage=="catalog.php")?$menuClass:"" ?> >
                                    <a href="catalog.php">Catalogue</a>
                                </li>
                                <li <?= ($currentPage=="concepts.php")?$menuClass:"" ?> >
                                    <a href="concepts.php">Travaux</a>
                                </li>
                                <li <?= ($currentPage=="contact-us.php")?$menuClass:"" ?> >
                                    <a href="contact-us.php">Contact</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </header>

            <div role="main" class="main">
                <div class="slider-container">
                                        <div class="slider" id="revolutionSlider">
                        <ul>
                            <li data-transition="fade" data-slotamount="13" data-masterspeed="300" >
                                <img src="img/slides/Slide_1.jpg" data-bgrepeat="no-repeat" data-bgfit="contain" data-bgposition="center center">
                            </li>
                            <li data-transition="fade" data-slotamount="13" data-masterspeed="300" >
                                <img src="img/slides/Slide_2.jpg" data-bgrepeat="no-repeat" data-bgfit="contain" data-bgposition="center center">
                            </li>
                            <li data-transition="fade" data-slotamount="13" data-masterspeed="300" >
                                <img src="img/slides/Slide_3.jpg" data-bgrepeat="no-repeat" data-bgfit="contain" data-bgposition="center center">
                            </li>
                            <li data-transition="fade" data-slotamount="13" data-masterspeed="300" >
                                <img src="img/slides/Slide_4.jpg" data-bgrepeat="no-repeat" data-bgfit="contain" data-bgposition="center center">
                            </li>
                            <li data-transition="fade" data-slotamount="13" data-masterspeed="300" >
                                <img src="img/slides/Slide_5.jpg" data-bgrepeat="no-repeat" data-bgfit="contain" data-bgposition="center center">
                            </li>
                            <li data-transition="fade" data-slotamount="13" data-masterspeed="300" >
                                <img src="img/slides/Slide_6.jpg" data-bgrepeat="no-repeat" data-bgfit="contain" data-bgposition="center center">
                            </li>
                            <li data-transition="fade" data-slotamount="13" data-masterspeed="300" >
                                <img src="img/slides/Slide_7.jpg" data-bgrepeat="no-repeat" data-bgfit="contain" data-bgposition="center center">
                            </li>
                            <li data-transition="fade" data-slotamount="13" data-masterspeed="300" >
                                <img src="img/slides/Slide_8.jpg" data-bgrepeat="no-repeat" data-bgfit="contain" data-bgposition="center center">
                            </li>
                            <li data-transition="fade" data-slotamount="13" data-masterspeed="300" >
                                <img src="img/slides/Slide_9.jpg" data-bgrepeat="no-repeat" data-bgfit="contain" data-bgposition="center center">
                            </li>
                        </ul>
                    </div> 
                </div>
                <br/>
                <div class="container">
                    <div class="row center">
                        <div class="col-md-12">
                            <h2 class="short word-rotator-title">
                                Menuiserie est un constructeur et designer de bois qui utilise de modernes machines CNC. Nous sommes basés à Nador, Maroc.
                            </h2>
                            <p class="featured lead">
                                MDF • HDF • WPC • Plywood • Agro Wood • Solid Wood • Block Boards • Veneers • Laminates • Cement Sheet • Solid Surface • Acrylic • Bakelite • PVC • ACP • High Pressure Laminate  &  Many More Materials
                            </p>
                        </div>
                    </div>
                </div>
                <!--hr class="tall" /-->
                <!--div class="container">
                    <div class="row">
                        <div class="col-md-3" align="center">
                            <a href="https://itunes.apple.com/us/app/jaali/id625940626?ls=1&mt=8"><img alt="iTunes Store" class="img-responsive" src="img/App_Itunes.png"></a>
                            <p class="tall">Download Now! It’s Free.</p>
                        </div>
                        <div class="col-md-3" align="center">
                            <a href="https://play.google.com/store/apps/details?id=com.signocraftv2"><img alt="Google Play" class="img-responsive" src="img/App_Google.png"></a>
                            <p class="tall">Download Now! It’s Free.</p>
                        </div>
                        <div class="col-md-3" align="center">
                            <a href="http://apps.microsoft.com/windows/en-us/app/jaali/238dc08a-a7b3-446c-98fb-df6aa6f33c6d"><img alt="Windows Store" class="img-responsive" src="img/App_Windows-8-Store.png"></a>
                            <p class="tall">Download Now! It’s Free.</p>
                        </div>
                        <div class="col-md-3" align="center">
                            <a href="#"><img alt="Windows Phone" class="img-responsive" src="img/App_Windows-Phone-Store.png"></a>
                            <p class="tall">Coming Soon.</p>
                        </div>
                    </div>
                </div-->
            <footer id="footer">
                                <div class="container">
                    <div class="row">
                        
                        <div class="col-md-6">
                            <div class="newsletter">
                                <h4>A propos de nous</h4>
                                <p>Menuiserie est un constructeur et designer de bois qui utilise de moderne machine CNC. Nous sommes basés à Nador, Maroc.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact-details">
                                <h4>Nous contacter</h4>
                                <ul class="contact">
                                    <li><p><i class="icon icon-map-marker"></i> <strong>Adresse:</strong> 201, Imm X, Sélouane, Nador, Maroc 62000</p></li>
                                    <li><p><i class="icon icon-phone"></i> <strong>Téléphone Fix:</strong> +212 5 36 60 55 00</p></li>
                                    <li><p><i class="icon icon-phone"></i> <strong>Téléphone Mobile:</strong> +212 6 72 34 55 44</p></li>
                                    <li><p><i class="icon icon-envelope"></i> <strong>Email:</strong> <a href="mailto:menuiserie@gmail.com">menuiserie@gmail.com</a></p></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-copyright">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-1">
                                <a href="index.html" class="logo">
                                    <img alt="Jaali.in" class="img-responsive" src="img/logo2-footer.png">
                                </a>
                            </div>
                            <div class="col-md-7">
                                <p style="color:#E2E2E2;">© Copyright 2016. Tous droits réservés. <!--Created by <a href="http://www.ibbisoft.com">Ibbi Software Inc.</a--></p>
                            </div>
                            <div class="col-md-4">
                                <nav id="sub-menu">
                                    <ul>
                                        <img alt="Sign-O-Craft" class="img-responsive" src="img/Signocraft_Logo.png">
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- Libs -->
                <script src="vendor/jquery.js"></script>
        <script src="vendor/jquery.appear.js"></script>
        <script src="vendor/jquery.easing.js"></script>
        <script src="vendor/jquery.cookie.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.js"></script>
        <script src="vendor/jquery.validate.js"></script>
        <script src="vendor/jquery.stellar.js"></script>
        <script src="vendor/jquery.knob.js"></script>
        <script src="vendor/jquery.gmap.js"></script>
        <script src="vendor/twitterjs/twitter.js"></script>
        <script src="vendor/isotope/jquery.isotope.js"></script>
        <script src="vendor/owl-carousel/owl.carousel.js"></script>
        <script src="vendor/jflickrfeed/jflickrfeed.js"></script>
        <script src="vendor/magnific-popup/magnific-popup.js"></script>
        <script src="vendor/mediaelement/mediaelement-and-player.js"></script>
        <!-- Theme Initializer -->
        <script src="js/theme.plugins.js"></script>
        <script src="js/theme.js"></script>
        <!-- Current Page JS -->
        <script src="vendor/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
        <script src="vendor/rs-plugin/js/jquery.themepunch.revolution.js"></script>
        <script src="vendor/circle-flip-slideshow/js/jquery.flipshow.js"></script>
        <script src="js/views/view.home.js"></script>
        <!-- Custom JS -->
        <script src="js/custom.js"></script>
        <!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
            <script type="text/javascript">
            
              var _gaq = _gaq || [];
              _gaq.push(['_setAccount', 'UA-22826831-1']);
              _gaq.push(['_setDomainName', 'jaali.in']);
              _gaq.push(['_trackPageview']);
            
              (function() {
                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
              })();
            </script
         -->
    </body>
</html>