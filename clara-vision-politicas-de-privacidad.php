<!DOCTYPE html>
<html lang="en">
<head>
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
    <!--
            </div>-->

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
<div class="content indent">
    <!--content-->
    <div class="container">
        <h2 class="wow fadeIn">Politica de Privacidad<span></span></h2>
        <ul class="list8">
            <li class="wow fadeInUp">
                <p>LENTES DE CONTACTO CLARA VISION, con domicilio, washintonia numero 28, fracc palmas 2
Playa del Carmen., es responsable de recabar sus datos personales, del uso que se le dé a los mismos y de su protección.

Su información personal será utilizada para proveer los servicios y productos que ha solicitado, Informarle sobre cambios en los mismos y evaluar la calidad del servicio que le brindamos. Para las finalidades antes mencionadas, requerimos obtener los siguientes datos personales:

Nombre completo, Edad, Fecha de Nacimiento, Ocupación, Correo electrónico, Teléfonos, Domicilio particular y/o fiscal y Firma.

Además de los datos personales mencionados anteriormente, para las finalidades informadas en el presente aviso de privacidad, utilizaremos los siguientes datos personales, considerados como sensibles, que requieren de especial protección:

 

Padecimiento actual, Antecedentes médicos y oculares, Medicamentos y alergias, Antecedentes heredo familiares médicos y oculares.



 </p>
            </li>
            <li class="wow fadeInUp">
                Pruebas realizadas durante el examen.
                
                <p> Pruebas realizadas durante el examen.
                    Le informamos que es de nuestro especial interés cuidar la información personal de los menores de edad y personas en estado de interdicción y capacidades diferentes en términos de ley, a través del establecimiento de medidas específicas, como son:

 

La objeción del consentimiento de los padres y/o tutores por medio de palabra, para el tratamiento de los datos personales de este grupo de personas.

La implementación y mantenimiento de medidas de seguridad más estrictas.

La confidencialidad de los datos está garantizada, tanto los datos generales como los sensibles y los mismos están protegidos por medidas de seguridad administrativas, técnicas y físicas, para evitar su daño, perdida, alteración, destrucción, uso, acceso o divulgación indebida, Únicamente el responsable y el departamento de datos personales, tienen acceso a sus Datos y serán usados para los fines relacionados con los servicios de salud y conforme a este aviso de privacidad y la legislación, reglamentos y normativa aplicable.

También le informamos que en LENTES DE CONTACTO CLARA VISION.  No se hacen transferencias a Terceros.</p>
            </li>
            <li class="wow fadeInUp">
                <p>Es importante informarle que tiene derecho a conocer los datos personales que tenemos de usted, para qué los utilizamos y las condiciones del uso que les damos (Acceso). Así mismo, es su derecho solicitar la corrección de su información personal en caso de que no esté actualizada, sea inexacta o incompleta (Rectificación); que la eliminemos de nuestros registros o base de datos cuando considere que la misma no está siendo utilizada conforme a los principios, deberes y obligaciones previstas para fines específicos (Oposición). Estos derechos se conocen como derechos ARCO

                        Para hacer uso de los derechos ARCO puede hacérnoslo saber mediante solicitud por correo electrónico  a la cuenta  aviso.privacidad@clara_vision.com con la siguiente información: Nombre del titular, Domicilio del Titular o dirección de correo electrónico para comunicar respuesta a la solicitud, Identificación oficial, Descripción de los datos en los que se quiere ejercer el derecho. Por ley, se tienen 20 días para contestar a partir de la solicitud y 15 días más para entregar esos datos en copia simple, a partir de la confirmación de recepción.

                    El derecho para realizar las modificaciones o actualizaciones que se realicen a este aviso de privacidad, se reservan a los Responsables, por eventos que deriven de carácter legal, fiscal o internas. Dichas modificaciones estarán disponibles en nuestro establecimiento, redes sociales o página en internet http://www.clara-vision.com

                    Última fecha de emisión: 30/04/2018</p>
            </li>
            <li class="wow fadeInUp">
                <a href="contacto.html" class="mail">info@claravision.com</a>
            </li>
        </ul>
    </div>
</div>
<!--footer-->
<?php include('includes/footer.php'); ?>
<script src="js/bootstrap.min.js"></script>
<script src="js/tm-scripts.js"></script>
<!--coded by lynx-->
</body><!-- Google Tag Manager --><noscript><iframe src="http://www.googletagmanager.com/ns.html?id=GTM-P9FT69"height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-P9FT69');</script><!-- End Google Tag Manager -->
</html>