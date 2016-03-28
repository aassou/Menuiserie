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