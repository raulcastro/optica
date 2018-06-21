<!DOCTYPE html>
<html lang="en">
<head>
<title>Clara Visión Playa del Carmen</title>
<meta charset="utf-8">    
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="img/fesa.ico" type="image/x-icon">
<link rel="shortcut icon" href="img/fesa.ico" type="image/x-icon" />
<meta name="description" content="Your description">
<meta name="keywords" content="Your keywords">
<meta name="author" content="Your name">
<meta name = "format-detection" content = "telephone=no" />
<!--CSS-->
<link rel="stylesheet" href="css/bootstrap.css" >
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
<script src='http://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false'></script>
<script src="js/TMForm.js"></script>
<script src="js/modal.js"></script>  
<script src="js/bootstrap-filestyle.js"></script> 

<script>
    $(document).ready(function(){
        jQuery('.camera_wrap').camera();
    });
</script>
<script>
    $(window).load(function(){
        var curAccord = 0;
        var oldAccord = 0;

        $('._accodList').find('p').slideUp(1);
        $('._accodList').find('strong').addClass('color1');

        setTimeout(function(){
            $('._accodList > li').eq(0).find('p').slideDown();
            $('._accodList > li').eq(0).find('strong').addClass('color2');
        },200)

        $('._accodList').find('._plus, strong').click(
            function(){
                if(curAccord !== $(this).parent().index()){
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
    $(document).ready(function () {       
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
<div class="main-container col1-layout">
    <div class="content">
      <div class="row">
        <div class="col-main">
          <div class="product-view-area">
            <div class="product-big-image col-xs-12 col-sm-5 col-lg-5 col-md-5">
              <div class="icon-sale-label sale-left"></div>
              <div class="large-image"> <a href="img/air.jpg" class="cloud-zoom" id="zoom1" rel="useWrapper: false, adjustY:0, adjustX:20"> <img class="zoom-img" src="img/air.jpg" alt="products"> </a> </div>
              <!--<div class="flexslider flexslider-thumb">
                <ul class="previews-list slides">
                  <li><a href='images/products/blusatulum1.jpg' class='cloud-zoom-gallery' rel="useZoom: 'zoom1', smallImage: 'images/products/blusatulum1.jpg' "><img src="images/products/blusatulum1.jpg" alt = "Thumbnail 2"/></a></li>
                  <li><a href='images/products/blusa_bordada.jpg' class='cloud-zoom-gallery' rel="useZoom: 'zoom1', smallImage: 'images/products/blusa_bordada.jpg' "><img src="images/products/blusa_bordada.jpg" alt = "Thumbnail 1"/></a></li>
                  <li><a href='images/products/blusatulum2.jpg' class='cloud-zoom-gallery' rel="useZoom: 'zoom1', smallImage: 'images/products/blusatulum2.jpg' "><img src="images/products/blusatulum2.jpg" alt = "Thumbnail 1"/></a></li>
                  <!--<li><a href='images/products/product-fashion-1c.jpg' class='cloud-zoom-gallery' rel="useZoom: 'zoom1', smallImage: 'images/products/product-fashion-1c.jpg' "><img src="images/products/product-fashion-1c.jpg" alt = "Thumbnail 2"/></a></li>
                  <li><a href='images/products/product-fashion-1d.jpg' class='cloud-zoom-gallery' rel="useZoom: 'zoom1', smallImage: 'images/products/product-fashion-1d.jpg' "><img src="images/products/product-fashion-1d.jpg" alt = "Thumbnail 2"/></a></li>-->
                
              
              <!-- end: more-images --> 
              
            </div>
            <div class="col-xs-12 col-sm-7 col-lg-7 col-md-7 product-details-area">
              <div class="short-description">
                <h1>Air Optix Aqua</h1>
              </div>
              <div class="price-box">
                <p class="special-price"> <span class="price-label">PRECIO ESPECIAL</span> <span class="price"> $200 MXN </span> </p>
                <p class="old-price"> <span class="price-label">PRECIO REGULAR:</span> <span class="price"> $250 MXN </span> </p>
              </div>
              <div class="ratings">
                <!--<p class="availability in-stock pull-right">Disponible: <span>Acuvue Oasys 6 pack</span></p>-->
              </div>
              <div class="short-description">
                <p>Laboratorio: Alcon<br>
                    Marca: Air Optix<br>
                    Categoría: Lentes para Miopioa/Hipermetropia<br>
                    Material: Lotrafilcon B<br>
                    Contenido del embalaje: 6 lentes<br>
                    Protección contra los rayos UV: Sí<br>
                    Tiempo de uso: Mensual.<br>
                    Contenido de agua: 33%<br><br>
                    
                                                                                  
                    • Permiten que sus ojos respiren <br>
                    •	Son fabricadas con la tecnología SmartshieldTM - Lentes Lentes cómodas e hidratantes.<br>
                    •	Son resistentes a la acumulación de residuos.<br><br>
                    
                    * Alertamos que el laboratorio Alcon está modificando la imagen de las cajas de estas lentillas y, por ello, puede recibir cualquier caja de la imagen.
                    
                  </p>
              </div>
              <div class="product-color-size-area">
                <div class="color-area">
                  <!--<h2 class="saider-bar-title">Color</h2>-->
                  <!--<div class="color">
                    <ul>
                      <li><a href="single_product.html#"></a></li>
                      <li><a href="single_product.html#"></a></li>
                      <li><a href="single_product.html#"></a></li>
                      <li><a href="single_product.html#"></a></li>
                      <li><a href="single_product.html#"></a></li>
                      <li><a href="single_product.html#"></a></li>
                    </ul>
                  </div>
                </div>
                <div class="size-area">
                  <!--<h2 class="saider-bar-title">Size</h2>-->
                  <div class="size">
                    <!--<ul>
                      <li><a href="single_product.html#">S</a></li>
                      <li><a href="single_product.html#">L</a></li>
                      <li><a href="single_product.html#">M</a></li>
                      <li><a href="single_product.html#">XL</a></li>
                      <li><a href="single_product.html#">XXL</a></li>
                    </ul>-->
                  </div>
                </div>
              </div>
              <div class="product-variation">
                <!--<form action="single_product.html#" method="post">
                  <div class="cart-plus-minus">
                    <label for="qty">Cantidad:</label>
                    <div class="numbers-row">
                      <div onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 0 ) result.value--;return false;" class="dec qtybutton"><i class="fa fa-minus">&nbsp;</i></div>
                      <input type="text" class="qty" title="Qty" value="1" maxlength="12" id="qty" name="qty">
                      <div onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="inc qtybutton"><i class="fa fa-plus">&nbsp;</i></div>
                    </div>
                  </div>
                  <button class="button pro-add-to-cart" title="Add to Cart" type="button"><span><i class="fa fa-shopping-basket"></i> Añadir al carrito</span></button>
                </form>-->
              </div>
              <div class="product-cart-option">
              </div>
              <div class="share-box">
                <div class="title">Compartir en</div>
                <div class="socials-box"> 
                    <a href="https://www.facebook.com/hilosmexicanos/"><i class="fa fa-facebook"></i></a> <!--<a href="https://www.facebook.com/hilosmexicanos/"><i class="fa fa-twitter"></i></a>--> <!--<a href="single_product.html#"><i class="fa fa-google-plus"></i></a> <a href="single_product.html#"><i class="fa fa-youtube"></i></a> <a href="single_product.html#"><i class="fa fa-linkedin"></i></a>--> 
                    <a href="https://www.instagram.com/hilos_mexicanos/?hl=en"><i class="fa fa-instagram"></i></a> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


<!--footer-->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 wow fadeInUp">
                <p class="name">Clara Visión</p>
                <p class="prev">&copy; <em id="copyright-year"></em> <a href="clara-vision-politicas-de-privacidad.html">Políticas de privacidad</a></p>
                <ul class="follow_icon2">
                    <li><a href="index.html#" class="fa fa-facebook"></a></li>
                    <li><a href="index.html#" class="fa fa-twitter"></a></li>
                    
                </ul> 
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.1s">
                <p class="title">Nosotros</p>
                <p>Somos una empresa mexicana que se especializa en el cuidado integral de la salud visual.</p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.2s">
                <p class="title">Contactanos</p>
                <ul class="list1">
                    <li>
                        <figure><img src="img/foo_icon1.png" alt=""></figure>
                        <div class="extra-wrap">
                            <p>Teléfono: 984 125 7427</p>
                        </div>
                    </li>
                    <li>
                        <figure><img src="img/foo_icon2.png" alt=""></figure>
                        <div class="extra-wrap">
                            <a href="index.html#">info@claravision.com</a>
                        </div>
                        </li>
                    <li>
                        <figure><img src="img/foo_icon3.png" alt=""></figure>
                        <div class="extra-wrap">
                            <p>Washintonia No. 28, fracc. Palmas II<br>Playa del Carmen.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
  <!-- {%FOOTER_LINK} -->
</footer>
<script src="js/bootstrap.min.js"></script>
<script src="js/tm-scripts.js"></script>
<script type="text/javascript"> 
          google_api_map_init(); 
          function google_api_map_init(){ 
            var map; 
            var coordData = new google.maps.LatLng(parseFloat(40.646197), parseFloat(-73.9724068,14)); 
            var markCoord1 = new google.maps.LatLng(parseFloat(40.643180), parseFloat(-73.9874068,14)); 
             var markCoord2 = new google.maps.LatLng(parseFloat(40.6422180), parseFloat(-73.9784068,14)); 
             var markCoord3 = new google.maps.LatLng(parseFloat(40.6482180), parseFloat(-73.9724068,14)); 
             var markCoord4 = new google.maps.LatLng(parseFloat(40.6442180), parseFloat(-73.9664068,14)); 
             var markCoord5 = new google.maps.LatLng(parseFloat(40.6379180), parseFloat(-73.9552068,14)); 
            var marker; 
 
            var styleArray = [
    {
        "featureType": "water",
        "elementType": "geometry",
        "stylers": [
            {
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
        "stylers": [
            {
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
        "stylers": [
            {
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
        "stylers": [
            {
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
        "stylers": [
            {
                "color": "#e3ecf1"
            },
            {
                "weight":2
            },
            {
                "lightness": 0
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "color": "#d8e3ec"
            },
            {
                "lightness": 0
            },
            {
                "weight":1
            }
        ]
    },
    {
        "featureType": "road.local",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#ffffff"
            },
            {
                "weight":1
            },
            {
                "lightness": 0
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#d7e2eb"
            },
            {
                "lightness": 0
            }
        ]
    },
    {
        "elementType": "labels.text.stroke",
        "stylers": [
            {
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
        "stylers": [
            {
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
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "transit",
        "elementType": "geometry",
        "stylers": [
            {
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
        "stylers": [
            {
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
        "stylers": [
            {
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
                origin: new google.maps.Point(0,0), 
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
                map:map, 
                position: markCoord1, 
                icon: markerIcon
              }); 
              
               var contentString = '<div id="content">'+
                '<div id="siteNotice">'+
                '</div>'+
                '<div id="bodyContent">'+
                '<p>4578 Marmora Road, Glasgow D04 89GR <span>800 2345-6789</span></p>'+
                '</div>'+
                '</div>';

            var infowindow = new google.maps.InfoWindow({
                content: contentString
            });


            google.maps.event.addListener(marker, 'click', function() {
              infowindow.open(map,marker);
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
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();</script>
</body><!-- Google Tag Manager --><noscript><iframe src="http://www.googletagmanager.com/ns.html?id=GTM-P9FT69"height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-P9FT69');</script><!-- End Google Tag Manager -->
</html>