 <?php 



include("admin/includes/config.php");

include("lang.php");





$FormEnviado=false;

$FormError=false;





if (isset($_POST["FormEnviado"])) {



  if (empty($_POST["InputName"]) ||  empty($_POST["InputEmail"]) || empty($_POST["InputComent"])) {

    $FormError=true;

    $mensaje="Debe completar todos los campos obligatorios.";

  }else{   







      

                      require_once('admin/class.phpmailer.php');



                      $nombre=$_POST["InputName"];

                      $email=$_POST["InputEmail"];

                      $comentario=$_POST["InputComent"];



                      $title =$_POST["InputName"]." te envio un mensaje desde ".$conf['name'];



                      $mail             = new PHPMailer(); 



                      $search  = array('{nombre}', '{email}', '{comentario}');

                      $replace = array($nombre, $email,$comentario);



                      $body             = str_replace($search, $replace, file_get_contents('admin/emails/contacto.html'));



                      $mail->AddReplyTo($_POST["InputEmail"], $_POST["InputName"]);



                      $mail->SetFrom($_POST["InputEmail"], $_POST["InputName"]);



                      $mail->AddAddress($conf['email'], $conf['name']);



                      $mail->Subject    = $title;



                      $mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; 



                      $mail->MsgHTML($body);



                      if(!$mail->Send()) {

                            $FormError=true;

                            $mensaje="No se pudo enviar el mensaje, intente nuevamente mas tarde.";

                      } else {



                        $FormEnviado=true;

                        mysqli_query("INSERT INTO `contacto` (`id`, `fecha`, `nombre`, `email`, `texto`) VALUES (NULL, CURDATE(), '".$nombre."', '".$email."', '".$comentario."');");



                      }





  }

}



 ?><!DOCTYPE HTML>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->

<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> </html><![endif]-->

<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> </html><![endif]-->

<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> </html><![endif]-->

<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->

<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->



<head>

  

  <meta charset="utf-8" /><!--  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->

 <!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible' /><![endif]-->



 <title>Lorena Piazze</title>

  <meta name="Lorena Piazze" content="Lorena Piazze" />

	<meta name="keywords" content="Lorena Piazze" />

	<meta name="description" content="Lorena Piazze " />

    <meta name="author" content="www.indexweb.com.ar" />

	<meta name="robots" content="all" />



  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />



  <link rel="stylesheet" href="./css/reset.css" type="text/css" />

  <link rel="stylesheet" href="./css/skeleton.css" type="text/css" />

  <link rel="stylesheet" href="./css/zenite.css" type="text/css" media="screen" />

  <link rel="stylesheet" href="./css/layout.css" type="text/css" media="screen" />

  <link rel="stylesheet" href="./css/media_queries.css" type="text/css" media="screen" />

  

  <link rel="stylesheet" type="text/css" href="./jquery.mb.menu.2.8.5/css/menu_black.css" media="screen" />

  <link rel="stylesheet" type="text/css" href="./js/fancybox/jquery.fancybox-1.3.4.css" media="screen" />

  

   <!--[if lte IE 6]>

		<link rel="stylesheet" href="//universal-ie6-css.googlecode.com/files/ie6.1.1.css" media="screen, projection" />

   <![endif]-->

  

  <script src="./js/modernizr.custom.76532.js"></script>

  

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>





<body>



   <!--[if lt IE 7]><p class="chromeframe">Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->

    

   <div class="page">

 

       <div class="wrapper_header">

       

            <div class="container cabecera">

           

<header class="clearfix">





   <div class="columns six logo"><a href="./index.php"><img src="./css/img/logo.png" alt="Lorena Piazze" /></a></div>

    

    <!-- menu -->

    <nav class="columns fifteen menu myMenu">

        <ul class="navegation">

            <li class="rootVoice "><span class="navcurrent_left"></span><a href="./index.php">Home</a><span class="navcurrent_right"></span></li>

            <li class="rootVoice  {menu: 'menu_2'}"><span class="navcurrent_left"></span><a href="biografia.php">Lorena Piazze</a><span class="navcurrent_right"></span></li>

            <li class="rootVoice {menu: 'menu_3'}"><span class="navcurrent_left"></span><a href="vocesvitales.php">Voces Vitales</a><span class="navcurrent_right"></span></li>

            <li class="rootVoice {menu: 'menu_4'}"><span class="navcurrent_left"></span><a href="community.php">Community Empowerment</a><span class="navcurrent_right"></span></li>

            <li class="rootVoice "><span class="navcurrent_left"></span><a href="agenda.php">Agenda</a><span class="navcurrent_right"></span></li>

              <li class="rootVoice "><span class="navcurrent_left"></span><a href="galeria2.php">Galeria</a><span class="navcurrent_right"></span></li>

                <li class="rootVoice active "><span class="navcurrent_left"></span><a href="contacto.php">Contacto</a><span class="navcurrent_right"></span></li>

	        <li class="lineamenu"></li>

        </ul>

        <select class="navegation_resp">

            <option value="" selected="selected" />Ir a...

            <option value="./index.php" class="main_item" />Home

            <option value="./biografia.php" class="main_item" />Lorena Piazze

	            <option value="./biografia.php" class="second_item" />Biografia

	            <option value="./vision.php" class="second_item" />Visión

	            <option value="./distinciones.php" class="second_item" />Distinciones

	            <option value="./actividadprofesional.php" class="second_item" />Actividad Profesional

	            <option value="./miargentina.php" class="second_item" />Mi Argentina

            <option value="./galeria.php" class="second_item" />Galería

	            <option value="./noticias.php" class="second_item" />Noticias

	            <option value="./vocesvitales.php" class="main_item" />Voces Vitales

	            <option value="./staff.php" class="second_item" />Staff

            <option value="./actividades.php" class="second_item" />Actividades

				<option value="./comoserparte.php" class="second_item" />Como ser parte

            <option value="./noticiasvoces.php" class="second_item" />Noticias

	            <option value="./community.php" class="main_item" />Community Empowerment

                <option value="./community.php" class="second_item" />Instituciones

                <option value="./capacitacion.php" class="second_item" />Capacitación

                <option value="./reddemujeres.php" class="second_item" />Red de Mujeres Empresarias

                <option value="./agenda.php" class="main_item" />Agenda

                <option value="./galeria2.php" class="main_item" />Galeria

                <option value="./contacto.php" class="main_item" />Contacto

        </select>

    </nav>    

</header>



  <div id="menu_2" class="mbmenu">

    <a href="biografia.php">biografia</a>

    <a class="separator"> </a>

    <a href="vision.php">Visión</a>

    <a class="separator"> </a>

    <a href="distinciones.php">Distinciones</a>

    <a class="separator"> </a>

    <a href="actividadprofesional.php">Actividad Profesional</a>

    <a class="separator"> </a>

    <a href="miargentina.php">Mi Argentina</a>

    <a class="separator"> </a>

    <a href="galeria.php">Galería</a>

    <a class="separator"> </a>

    <a href="noticias.php">Noticias</a>

    <a class="separator"> </a>

   

  </div>



  <div id="menu_3" class="mbmenu">

    <a href="vocesvitales.php" class="{}">A cerca de VOCES</a>

    <a class="separator"> </a>

    <a href="staff.php" class="{}">Staff</a>

    <a class="separator"> </a>

    <a href="actividades.php" class="{}">Actividades</a>

    <a class="separator"> </a>

    <a href="comoserparte.php" class="{}">Como ser parte</a>

     <a class="separator"> </a>

     <a href="noticiasvoces.php" class="{}">Noticias</a>

  </div>



  <div id="menu_4" class="mbmenu">

    <a href="community.php" class="{}">Instituciones</a>

    <a class="separator"> </a>

    <a href="capacitacion.php" class="{}">Capacitación</a>

    <a class="separator"> </a>

    <a href="reddemujeres.php" class="{}">Red de Mujeres Empresarias</a>

  </div>



  <div id="sub_menu_1" class="mbmenu">

    

  </div>





  <div id="menu_5" class="mbmenu">

    

  </div>





  <!-- end menus -->



               

              </div>

       

       </div>



       <div class="bg-menu">

        <nav class="primary clearfix container">

				<div class="titol title_blog display"><span class="slim"> Contacto</span> </div>

		</nav>  

       </div>

       

      <!-- content --> 

      <div class="bg-white"><div class="shadow_top"></div>

    <section class="container content contact">

      

		<div class="info">

            	

                

            	                <p class="mail"><span><a href="mailto:lpiazze@vidpia.com.ar">lpiazze@vidpia.com.ar</a></span></p>

        </div>

            <div class="form">



                <?php if (!$FormEnviado) { ?>



                          <?php if ($FormError) { ?>

                          <div class="alert alert-warning fade in">

                            <?=$mensaje?>

                          </div>

                          <?php } ?>  



                  <form action="" method="POST">

                        <input name="InputName" type="text" value="Nombre" value="<?php if(isset($_POST["InputName"])) echo $_POST["InputName"];  ?>" onclick="if(this.value=='Name') this.value=''" onblur="if(this.value=='') this.value='Name'" />

                        <input name="InputEmail" type="text"  value="Email" value="<?php if(isset($_POST["InputEmail"])) echo $_POST["InputEmail"];  ?>" onclick="if(this.value=='Email') this.value=''" onblur="if(this.value=='') this.value='Email'" />

                        <textarea name="InputComent" onclick="if(this.value=='Your comment') this.value=''" onblur="if(this.value=='') this.value='Your comment'"><?php if(isset($_POST["InputComent"])) echo $_POST["InputComent"];  ?></textarea>

                        <input type="submit" value="Enviar" />

                        <input type="hidden" name="FormEnviado" value="1">

                  </form>



                  <?php }else { ?>

                            <div class="alert alert-success fade in">     

                               El mensaje fue enviado correctamente, nos contactaremos a la brevedad.

                          </div>

                  <?php } ?>

                

            </div> 



     </section>

     

     <div class="call-shadow-top"></div>

     

     </div><div class="wrapper_call clearfix">

      		

            <div class="separa_big"></div>          

      

      </div>

      <div class="wrapper_footer">

      	<div class="detall"></div>

        <div class="bgtwitter"></div>

      

            <footer class="container clearfix">

            

                  <p class="copy_left"><span class="white">© 2014 | Lorena Piazze  | Todos los derechos reservados. </span></p>

                    <p class="copy_right"><span class="social"></span></p>

       

                

       

                

                

            </footer>

            

            

      </div>

  

  </div>



<!--[if !lte IE 6]><!-->

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

	<script>window.jQuery || document.write('<script src="./js/jquery-1.7.2.min.js"><\/script>')</script>

	<!--[if lt IE 9]> <script src="js/libs/selectivizr-and-extra-selectors.min.js"></script> <![endif]-->

	<script src="./js/respond.min.js"></script>

	<script src="./js/jquery.easing-1.3.min.js"></script>

	<script src="./js/custom.js"></script>

  <!--<![endif]-->

  

	<script type="text/javascript" src="./jquery.mb.menu.2.8.5/inc/jquery.metadata.js"></script>

	<script type="text/javascript" src="./jquery.mb.menu.2.8.5/inc/jquery.hoverIntent.js"></script>

	<script type="text/javascript" src="./jquery.mb.menu.2.8.5/inc/mbMenu.js"></script>

	<script type="text/javascript" src="./js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>    

    

	<script type="text/javascript">

		$(document).ready(function() {

			$("a.fancy").fancybox();

		});

	</script>

    

  <script type="text/javascript">



  $(function(){

    $(".myMenu").buildMenu(

    {

      template:"menuVoices.html",

      additionalData:"pippo=1",

      menuWidth:200,

      openOnRight:false,

      menuSelector: ".menuContainer",

      iconPath:"jquery.mb.menu.2.8.5/ico/",

      hasImages:true,      fadeInTime:0,

      fadeOutTime:0,

      adjustLeft:2,

      minZindex:"auto",

      adjustTop:10,

      opacity:1,

      shadow:false,

      shadowColor:"#ccc",

      hoverIntent:0,

      openOnClick:false,

      closeOnMouseOut:true,

      closeAfter:0,

      submenuHoverIntent:200

    });

  });



  //this function get the id of the element that fires the context menu.

  function testForContextMenu(el){

    if (!el) el= $.mbMenu.lastContextMenuEl;

    alert("the ID of the element is:   "+$(el).attr("id"));

  }



  function recallcMenu(el){

    if (!el) el= $.mbMenu.lastContextMenuEl;

    var cmenu=+$(el).attr("cmenu");

    $(cmenu).remove();

  }



  function showMessage(msg){

    var msgBox=$("<div>").addClass("msgBox");

    $("body").append(msgBox);

    msgBox.append("You click on: <br>"+msg);

    setTimeout(function(){msgBox.fadeOut(500,function(){msgBox.remove();})},3000)

  }



</script>  

 

  <script src="./js/plugins.js"></script>

  <script src="./js/script.js"></script>

  <!--<script src="js/tabs.js"></script> --> <!-- tabs skeleton-->

  

  <!--[if lt IE 7 ]>

     <script type="text/javascript" src="http://widgetfx.googlecode.com/svn-history/r122/widgetfx.org/iepngfix_tilebg.js"></script>

  <![endif]-->

  



  <!-- GA -->

  <script>

    var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];

    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];

    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';

    s.parentNode.insertBefore(g,s)}(document,'script'));

  </script>  

  

  

</body>



</html>

