<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-120895161-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-120895161-1');

    </script>

    <!--<div class="rd-mobilemenu"><ul class="rd-mobilemenu_ul"><li class="active"><a href="./">Home</a></li><li><a href="index-1.html" class="rd-with-ul">About<span class="rd-submenu-toggle"></span></a><ul class="rd-mobilemenu_submenu" style="display: none;">
                  <li><a href="#">Quisque nulla</a></li>
                  <li><a href="#">Vestibulum libero nis</a></li>
                  <li><a href="#">Porta vel scelerisque eget</a>
                    <ul>
                      <li><a href="#">Lorem ipsum</a></li>
                      <li><a href="#">Conse adipisicing</a></li>
                      <li><a href="#">Sit amet dolore</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Malesuada at neque</a></li>
                  <li><a href="#">Vivamus eget nibh</a></li>
                </ul></li><li><a href="index-2.html">Services</a></li><li><a href="index-3.html">Blog</a></li><li><a href="index-4.html">Gallery</a></li><li><a href="index-5.html">Contact</a></li></ul></div>
                <button class="rd-mobilepanel_toggle"><span></span></button>
            <div class="rd-mobilepanel"><button class="rd-mobilepanel_toggle"><span></span></button><h2 class="rd-mobilepanel_title">Home</h2>-->
    <title>Clara Visión Playa del Carmen - Armazones y Lentes de contacto</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/fesa.ico" type="image/x-icon">
    <link rel="shortcut icon" href="img/fesa.ico" type="image/x-icon" />
    <meta name="description" content="Venta de lentes de contacto y armazones en linea para el cuidado de la salud de tus ojos">
    <meta name="keywords" content="Armazones, Lentes de contacto, Playa del carmen, mejores marcas de lentes de contacto, cuidado visual, liquido para lentes de contacto, ojos saludables">
    <meta name="author" content="Your name">
    <meta name="format-detection" content="telephone=no" />
    <!--CSS-->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/camera.css">
    <link rel="stylesheet" href="css/contact-form.css">
    <link rel="stylesheet" href="fonts/font-awesome.css">
    <!--JS-->
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.mobilemenu.js"></script>
    <script src="js/jquery.equalheights.js"></script>
    <script src="js/camera.js"></script>
    <script src='https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false'></script>
    <script src="js/TMForm.js"></script>
    <script src="js/modal.js"></script>
    <script src="js/bootstrap-filestyle.js"></script>
    <!--
            </div>-->

    <script>
        $(document).ready(function() {
            jQuery('.camera_wrap').camera();
        });

    </script>
    <script>
        $(window).load(function() {
            var curAccord = 0;
            var oldAccord = 0;

            $('._accodList').find('p').slideUp(1);
            $('._accodList').find('strong').addClass('color1');

            setTimeout(function() {
                $('._accodList > li').eq(0).find('p').slideDown();
                $('._accodList > li').eq(0).find('strong').addClass('color2');
            }, 200)

            $('._accodList').find('._plus, strong').click(
                function() {
                    if (curAccord !== $(this).parent().index()) {
                        oldAccord = curAccord;
                        curAccord = $(this).parent().index();

                        $('._accodList > li').eq(curAccord).find('strong').removeClass('color1');
                        $('._accodList > li').eq(curAccord).find('strong').addClass('color2');
                        $('._accodList > li').eq(curAccord).find('p').slideDown();

                        $('._accodList > li').eq(oldAccord).find('strong').removeClass('color2');
                        $('._accodList > li').eq(oldAccord).find('strong').addClass('color1');
                        $('._accodList > li').eq(oldAccord).find('p').slideUp();
                    }

                }
            )
        })

    </script>
    <!--[if (gt IE 9)|!(IE)]><!-->
    <script src="js/wow/wow.js"></script>
    <script src="js/wow/device.min.js"></script>
    <script src="js/jquery.mobile.customized.min.js"></script>
    <script>
        $(document).ready(function() {
            if ($('html').hasClass('desktop')) {
                new WOW().init();
            }
        });

    </script>

    <!--<![endif]-->

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>

    <div id="ie6-alert" style="width: 100%; text-align:center;">
    <img src="http://beatie6.frontcube.com/images/ie6.jpg" alt="Upgrade IE 6" width="640" height="344" border="0" usemap="#Map" longdesc="http://die6.frontcube.com" />
      <map name="Map" id="Map"><area shape="rect" coords="496,201,604,329" href="http://www.microsoft.com/windows/internet-explorer/default.aspx" target="_blank" alt="Download Interent Explorer" /><area shape="rect" coords="380,201,488,329" href="http://www.apple.com/safari/download/" target="_blank" alt="Download Apple Safari" /><area shape="rect" coords="268,202,376,330" href="http://www.opera.com/download/" target="_blank" alt="Download Opera" /><area shape="rect" coords="155,202,263,330" href="http://www.mozilla.com/" target="_blank" alt="Download Firefox" />
        <area shape="rect" coords="35,201,143,329" href="http://www.google.com/chrome" target="_blank" alt="Download Google Chrome" />
      </map>
  </div>
  <![endif]-->
</head>

<body>
    <!--header-->
    <?php include('includes/header.php'); ?>
    <div class="slider">
        <div class="camera_wrap">
            <div data-src="img/slider2.jpg">
                <div class="camera-caption fadeIn">
                    <p class="title">Resolvemos</p>
                    <p class="description">Problemas Visuales</p>
                </div>
            </div>
            <div data-src="img/slider3.jpg">
                <div class="camera-caption fadeIn">
                    <p class="title">Nosotros cuidamos</p>
                    <p class="description">Tus ojos!</p>
                </div>
            </div>
            <div data-src="img/slider5.jpg">
                <div class="camera-caption fadeIn">
                    <p class="title">Has tu</p>
                    <p class="description">elección natural!</p>
                </div>
            </div>
        </div>
    </div>
    <!--content-->
    <div class="content">
        <!--<div class="thumb-box1">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 wow fadeInUp">
                    <div class="thumb-pad1 maxheight">
                        <div class="thumbnail">
                            <figure><img src="img/page1_icon1.png" alt=""></figure>
                            <div class="caption">
                                <p class="title">Lorem<br>dolor sit amet</p>
                                <p>Dio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti. atque corrupti quos dolores et.</p>
                                <a href="index.html#" class="btn-default btn1">more <i></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="thumb-pad1 maxheight">
                        <div class="thumbnail">
                            <figure><img src="img/page1_icon2.png" alt=""></figure>
                            <div class="caption">
                                <p class="title">Eiusmod <br>tempor</p>
                                <p>Wolore ducimus qui blanditiis praesentium vo tatum deleniti atque.                               corrupti quos dolores.    </p>
                                <a href="index.html#" class="btn-default btn1">more <i></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="thumb-pad1 maxheight">
                        <div class="thumbnail">
                            <figure><img src="img/page1_icon3.png" alt=""></figure>
                            <div class="caption">
                                <p class="title">Ncididunt <br>ute labore</p>
                                <p>Sucimus qui blanditiis praesentium voluptatuatque corrupti quos dolores etquas molestias excepturi.</p>
                                <a href="index.html#" class="btn-default btn1">more <i></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="thumb-pad1 maxheight">
                        <div class="thumbnail">
                            <figure><img src="img/page1_icon4.png" alt=""></figure>
                            <div class="caption">
                                <p class="title">Et harum <br>quidem</p>
                                <p>Ecusamus et iusto odio dignissimos ducimus qui blanpraesentium voluptatum corrupti quos dolor.</p>
                                <a href="index.html#" class="btn-default btn1">more <i></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
        <div class="thumb-box2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-10 col-lg-offset-2 col-md-offset-1">
                        <p class="title wow fadeInUp">ARMAZONES Y LENTES DE CONTACTO</p>
                        <p class="wow fadeInUp">En clara vision te ofrecemos las mejores opciones en lentes de contacto disponibles en el mercado, porque contamos con el respaldo de grandes fabricantes de marcas de gran calidad como: Acuvue, Air optix, Biofinity, Freshlook, Frequency, Pure vision, Soflens, Avaira, Biomedics, Dailies y Hidrosoft convencional. Nuestra categoría de productos para el cuidado tus ojos permite corrigir defectos de Miopía, Hipermetropía, Astigmatismo y presbicia, además ofrecemos lentes de contacto cosméticos. </p>

                    </div>
                </div>
            </div>
        </div>
        <div class="thumb-box3">
            <div class="container">
                <h2 class="wow fadeIn">Lentes de contacto<span>Clara Vision</span></h2>
                <div class="row">
                    <div class="col-lg-3 col-md-2 col-sm-6 col-xs-6 wow fadeInUp">
                        <div class="thumb-pad2">
                            <div class="thumbnail">
                                <figure><img src="img/astigmatismo.jpg" alt=""></figure>
                                <div class="caption">
                                    <p class="title">Acuvue oasys astigmatismo</p>
                                    <p class="description"></p>
                                    <a href="lentes-de-contacto.php" class="btn-default btn3">Ver</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-2 col-sm-6 col-xs-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="thumb-pad2">
                            <div class="thumbnail">
                                <figure><img src="img/air-optics-astigmatismo.jpg" alt=""></figure>
                                <div class="caption">
                                    <p class="title">Air optics aqua astigmatisismo</p>
                                    <p class="description"></p>
                                    <a href="lentes-de-contacto.php" class="btn-default btn3">ver</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-2 col-sm-6 col-xs-6 wow fadeInUp">
                        <div class="thumb-pad2">
                            <div class="thumbnail">
                                <figure><img src="img/toric.jpg" alt=""></figure>
                                <div class="caption">
                                    <p class="title">Biofinity toric</p>
                                    <p class="description"></p>
                                    <a href="lentes-de-contacto.php" class="btn-default btn3">Ver</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-2 col-sm-6 col-xs-6 wow fadeInUp">
                        <div class="thumb-pad2">
                            <div class="thumbnail">
                                <figure><img src="img/fantasia1.jpg" alt=""></figure>
                                <div class="caption">
                                    <p class="title">Pupilentes Fantasia</p>
                                    <p class="description"></p>
                                    <a href="pupilentes.php" class="btn-default btn3">Ver</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="thumb-box3">
            <div class="container">
                <h2 class="wow fadeIn"> Armazones<span>Clara Vision</span></h2>
                <div class="row">

                    <div class="col-lg-3 col-md-2 col-sm-6 col-xs-6 wow fadeInUp">
                        <div class="thumb-pad2">
                            <div class="thumbnail">
                                <figure><img src="img/armazon-madera.jpg" alt=""></figure>
                                <div class="caption">
                                    <p class="title">Armazon madera</p>
                                    <p class="description">$$</p>
                                    <a href="armazones.php" class="btn-default btn3">Ver</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-2 col-sm-6 col-xs-6 wow fadeInUp">
                        <div class="thumb-pad2">
                            <div class="thumbnail">
                                <figure><img src="img/armazon-azul-cromo.jpg" alt=""></figure>
                                <div class="caption">
                                    <p class="title">Armazon azul cromo</p>
                                    <p class="description">$$$</p>
                                    <a href="armazones.php" class="btn-default btn3">Ver</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-2 col-sm-6 col-xs-6 wow fadeInUp">
                        <div class="thumb-pad2">
                            <div class="thumbnail">
                                <figure><img src="img/Armazon-rojo.jpg" alt=""></figure>
                                <div class="caption">
                                    <p class="title">Armazon Negro con rojo</p>
                                    <p class="description">$$$</p>
                                    <a href="armazones.php" class="btn-default btn3">Ver</a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-3 col-md-2 col-sm-6 col-xs-6 wow fadeInUp">
                        <div class="thumb-pad2">
                            <div class="thumbnail">
                                <figure><img src="img/Armazon-plata.jpg" alt=""></figure>
                                <div class="caption">
                                    <p class="title">Armazon plata</p>
                                    <p class="description">$$</p>
                                    <a href="armazones.php" class="btn-default btn3">ver</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-2 col-sm-6 col-xs-6 wow fadeInUp">
                        <!--<div class="thumb-pad2">
                            <div class="thumbnail">
                                <figure><img src="img/oasis.jpg" alt=""></figure>
                                <div class="caption">
                                    <p class="title">Acuvue oasys</p>
                                    <p class="description">$$$</p>
                                    <a href="acuvue-oasys.html" class="btn-default btn3">Ver</a>
                                </div>
                            </div>
                        </div>-->
                    </div>
                    <div class="col-lg-3 col-md-2 col-sm-6 col-xs-6 wow fadeInUp">
                        <!--<div class="thumb-pad2">
                            <div class="thumbnail">
                                <figure><img src="img/astigmatismo.jpg" alt=""></figure>
                                <div class="caption">
                                    <p class="title">Acuvue oasys astigmatismo</p>
                                    <p class="description">$$$</p>
                                    <a href="acuva-oasys-astigmatismo.html" class="btn-default btn3">Ver</a>
                                </div>
                            </div>
                        </div>-->
                    </div>
                    <div class="col-lg-3 col-md-2 col-sm-6 col-xs-6 wow fadeInUp">
                        <!--<div class="thumb-pad2">
                            <div class="thumbnail">
                                <figure><img src="img/evolution.jpg" alt=""></figure>
                                <div class="caption">
                                    <p class="title">Biomedics 55 evolution</p>
                                    <p class="description">$$$</p>
                                    <a href="biomedics-55-evolution.html" class="btn-default btn3">Ver</a>
                                </div>
                            </div>
                        </div>-->
                    </div>
                    <div class="col-lg-3 col-md-2 col-sm-6 col-xs-6 wow fadeInUp">
                        <!--<div class="thumb-pad2">
                            <div class="thumbnail">
                                <figure><img src="img/toric.jpg" alt=""></figure>
                                <div class="caption">
                                    <p class="title">Biofinity toric</p>
                                    <p class="description">$$$</p>
                                    <a href="biofinity-toric.html" class="btn-default btn3">Ver</a>
                                </div>
                            </div>
                        </div>-->
                    </div>
                </div>
            </div>
        </div>

        <div class="thumb-box5">
            <div class="container">
                <h4 class="wow fadeInUp">Contacto</h4>
                <div class="contactForm2">
                    <form id="contact-form">
                        <div class="contact-form-loader"></div>
                        <div class="row">
                            <fieldset>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <label class="message form-div-4">
                                  <textarea name="message" placeholder="Mensaje" data-constraints='@Required @Length(min=20,max=999999)'></textarea>
                                  <span class="empty-message">*Este campo es requerido.</span>
                                  <span class="error-message">*El mensaje es demasiado corto.</span>
                                </label>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="box">
                                        <label class="name form-div-1">
                                      <input type="text" name="name" placeholder="Nombre" value="" data-constraints="@Required @JustLetters"  />
                                      <span class="empty-message">*Este campo es requerido.</span>
                                      <span class="error-message">*Este nombre no es valido.</span>
                                    </label>
                                        <label class="email form-div-2">
                                      <input type="text" name="email" placeholder="Email" value="" data-constraints="@Required @Email" />
                                      <span class="empty-message">*Este campo es requerido.</span>
                                      <span class="error-message">*este email no es valido.</span>
                                    </label>
                                        <div class="btns">
                                            <a href="index.html#" data-type="submit" class="btn-default btn3">Enviar mensaje</a>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        <div class="modal fade response-message">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="false">&times;</button>
                                        <h4 class="modal-title">Modal title</h4>
                                    </div>
                                    <div class="modal-body">
                                        Tu mensaje ah sido enviado.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--<section class="content_map2">
      <div class="google-map-api"> 
        <div id="map-canvas" class="gmap"></div> 
      </div> 
</section>-->
    <!--footer-->
    <?php include('includes/footer.php'); ?>


    <script src="js/bootstrap.min.js"></script>
    <script src="js/tm-scripts.js"></script>
    <script type="text/javascript">
        google_api_map_init();

        function google_api_map_init() {
            var map;
            var coordData = new google.maps.LatLng(parseFloat(40.646197), parseFloat(-73.9724068, 14));
            var markCoord1 = new google.maps.LatLng(parseFloat(40.643180), parseFloat(-73.9874068, 14));
            var markCoord2 = new google.maps.LatLng(parseFloat(40.6422180), parseFloat(-73.9784068, 14));
            var markCoord3 = new google.maps.LatLng(parseFloat(40.6482180), parseFloat(-73.9724068, 14));
            var markCoord4 = new google.maps.LatLng(parseFloat(40.6442180), parseFloat(-73.9664068, 14));
            var markCoord5 = new google.maps.LatLng(parseFloat(40.6379180), parseFloat(-73.9552068, 14));
            var marker;

            var styleArray = [{
                    "featureType": "water",
                    "elementType": "geometry",
                    "stylers": [{
                            "color": "#d0dee8"
                        },
                        {
                            "lightness": 0
                        }
                    ]
                },
                {
                    "featureType": "landscape",
                    "elementType": "geometry",
                    "stylers": [{
                            "color": "#f4f7f9"
                        },
                        {
                            "lightness": 0
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "geometry.fill",
                    "stylers": [{
                            "color": "#a7c1d3"
                        },
                        {
                            "lightness": 0
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "geometry.stroke",
                    "stylers": [{
                            "color": "#8fafc7"
                        },
                        {
                            "lightness": 0
                        },
                        {
                            "weight": 1
                        }
                    ]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "geometry",
                    "stylers": [{
                            "color": "#e3ecf1"
                        },
                        {
                            "weight": 2
                        },
                        {
                            "lightness": 0
                        }
                    ]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "geometry.stroke",
                    "stylers": [{
                            "color": "#d8e3ec"
                        },
                        {
                            "lightness": 0
                        },
                        {
                            "weight": 1
                        }
                    ]
                },
                {
                    "featureType": "road.local",
                    "elementType": "geometry",
                    "stylers": [{
                            "color": "#ffffff"
                        },
                        {
                            "weight": 1
                        },
                        {
                            "lightness": 0
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "geometry",
                    "stylers": [{
                            "color": "#d7e2eb"
                        },
                        {
                            "lightness": 0
                        }
                    ]
                },
                {
                    "elementType": "labels.text.stroke",
                    "stylers": [{
                            "visibility": "on"
                        },
                        {
                            "color": "#e1eaf0"
                        },
                        {
                            "lightness": 0
                        }
                    ]
                },
                {
                    "elementType": "labels.text.fill",
                    "stylers": [{
                            "saturation": 36
                        },
                        {
                            "color": "#242e35"
                        },
                        {
                            "lightness": 0
                        }
                    ]
                },
                {
                    "elementType": "labels.icon",
                    "stylers": [{
                        "visibility": "off"
                    }]
                },
                {
                    "featureType": "transit",
                    "elementType": "geometry",
                    "stylers": [{
                            "color": "#d0dee8"
                        },
                        {
                            "lightness": 0
                        }
                    ]
                },
                {
                    "featureType": "administrative",
                    "elementType": "geometry.fill",
                    "stylers": [{
                            "color": "#ff0000"
                        },
                        {
                            "lightness": 0
                        }
                    ]
                },
                {
                    "featureType": "administrative",
                    "elementType": "geometry.stroke",
                    "stylers": [{
                            "color": "#d0dee8"
                        },
                        {
                            "lightness": 0
                        },
                        {
                            "weight": 1.2
                        }
                    ]
                }
            ]

            var markerIcon = {
                url: "img/gmap_marker.png",
                size: new google.maps.Size(53, 71),
                origin: new google.maps.Point(0, 0),
                anchor: new google.maps.Point(21, 70)
            };

            function initialize() {
                var mapOptions = {
                    zoom: 14,
                    center: coordData,
                    scrollwheel: false,
                    styles: styleArray
                }

                var contentString = "<div></div>";
                var infowindow = new google.maps.InfoWindow({
                    content: contentString,
                    maxWidth: 200
                });

                var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
                marker = new google.maps.Marker({
                    map: map,
                    position: markCoord1,
                    icon: markerIcon
                });

                var contentString = '<div id="content">' +
                    '<div id="siteNotice">' +
                    '</div>' +
                    '<div id="bodyContent">' +
                    '<p>4578 Marmora Road, Glasgow D04 89GR <span>800 2345-6789</span></p>' +
                    '</div>' +
                    '</div>';

                var infowindow = new google.maps.InfoWindow({
                    content: contentString
                });


                google.maps.event.addListener(marker, 'click', function() {
                    infowindow.open(map, marker);
                    $('.gm-style-iw').parent().parent().addClass("gm-wrapper");
                });


                google.maps.event.addDomListener(window, 'resize', function() {

                    map.setCenter(coordData);

                    var center = map.getCenter();
                });
            }

            google.maps.event.addDomListener(window, "load", initialize);

        }

    </script>
    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-7078796-5']);
        _gaq.push(['_trackPageview']);
        (function() {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'https://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();

    </script>
</body>
<!-- Google Tag Manager --><noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P9FT69"height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src = '//www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-P9FT69');

</script>
<!-- End Google Tag Manager -->

</html>
