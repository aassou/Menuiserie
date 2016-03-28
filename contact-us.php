<!DOCTYPE html>
<!--[if IE 8]><html class="ie ie8"> <![endif]-->
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!--><html><!--<![endif]-->
    <head>
        <?php include('include/head.php'); ?>
    </head>
    <body class="boxed">
        <div class="body">
            <header id="header">
                <?php include('include/header.php'); ?>
            </header>
            <div role="main" class="main">
                <section class="page-top" style="margin-bottom: 0px;">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h2>Contacter Nous</h2>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Google Maps -->
                <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;height:500px;width:100%;'><div id='gmap_canvas' style='height:500px;width:100%;'></div><div><small><a href="http://embedgooglemaps.com">Google maps carte</a></small></div><div><small><a href="http://www.youtubeembedcode.com">generate youtube code</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:16,center:new google.maps.LatLng(35.169774184537744,-2.9267896661315285),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(35.169774184537744,-2.9267896661315285)});infowindow = new google.maps.InfoWindow({content:'<strong>Titre</strong><br>Sélouane, Maroc<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="offset-anchor" id="contact-sent"></div>
                            <!--h2 class="short"><strong>Contact</strong> Us</h2-->
                            <form id="contactForm" action="contact-us.php#contact-sent" method="POST" enctype="multipart/form-data" data-type="advanced">
                                <input type="hidden" value="true" name="emailSent" id="emailSent">
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-6">
                                            <label>Nom *</label>
                                            <input type="text" value="" data-msg-required="Votre Nom SVP." maxlength="100" class="form-control" name="name" id="name">
                                        </div>
                                        <div class="col-md-6">
                                            <label>Email *</label>
                                            <input type="email" value="" data-msg-required="Votre Email SVP." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label>Message *</label>
                                            <textarea maxlength="5000" data-msg-required="Votre Message SVP." rows="10" class="form-control" name="message" id="message"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="submit" id="contactFormSubmit" value="Envoyer" class="btn btn-primary btn-lg pull-right" data-loading-text="Loading...">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-6">

                            <h4><strong>Local Commercial</strong></h4>
                            <ul class="list-unstyled">
                                <li><i class="icon icon-map-marker"></i> <strong>Adresse:</strong> 201, Imm X, Sélouane, Nador, Maroc 62000</li>
                                <li><i class="icon icon-phone"></i> <strong>Téléphone Fix:</strong> +212 5 36 60 55 00</li>
                                <li><i class="icon icon-phone"></i> <strong>Téléphone Mobile:</strong> +212 6 72 34 55 44</li>
                                <li><i class="icon icon-envelope"></i> <strong>Email:</strong> <a href="mailto:menuiserie@gmail.com">menuiserie@gmail.com</a></li>
                            </ul>
                            <hr />
                            <h4>Horaires d'<strong>Ouvertures</strong></h4>
                            <ul class="list-unstyled">
                                <li><i class="icon icon-time"></i> Lundi - Vendredi: 9:00-12:00 | 14:00-17:00</li>
                                <li><i class="icon icon-time"></i> Samedi : 9:00-13:00</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <footer id="footer">
                <?php include('include/footer.php'); ?>
            </footer>
        </div>
        <!-- Libs -->
        <?php include('include/scripts.php'); ?>
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
                        <script type="text/javascript" src="js/jquery.gmap.js"></script>

                        <script type="text/javascript">

                            jQuery('#google-map').gMap({

                                //address: 'Nador, Maroc',
                                maptype: 'ROADMAP',
                                zoom: 16,
                                markers: [
                                    {
                                        //address: "Nador, Maroc",
                                        latitude: 35.160871, 
                                        longitude: -2.930145, 
                                        html: '<div style="width: 300px;"><h4 style="margin-bottom: 8px;">Ici <span>Groupe Annahda</span></h4><p class="nobottommargin"><strong>Adresse:</strong>Quartier Ouled Brahim N°B-1 en face Lycée Nador Jadid (Anaanaa), Nador.</p></div>',
                                        icon: {
                                            image: "images/icons/map-icon-red.png",
                                            iconsize: [32, 39],
                                            iconanchor: [32,39]
                                        }
                                    }
                                ],
                                doubleclickzoom: false,
                                controls: {
                                    panControl: true,
                                    zoomControl: true,
                                    mapTypeControl: true,
                                    scaleControl: false,
                                    streetViewControl: false,
                                    overviewMapControl: false
                                }

                            });

                        </script>
    </body>
</html>
