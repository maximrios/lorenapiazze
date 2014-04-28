 <?php 

include("admin/includes/config.php");
include("lang.php");

if (!isset($_GET["id"])) {
  
}else{
  $id=(int)$_GET["id"];
  $sql=mysqli_query("SELECT  ".$lang."_noticias.*, ".$lang."_noticias_imagenes.imagen FROM ".$lang."_noticias INNER JOIN ".$lang."_noticias_imagenes ON  ".$lang."_noticias_imagenes.idr =  ".$lang."_noticias.id WHERE ".$lang."_noticias.id = ".$id."  LIMIT 1 ");
  if (mysql_num_rows($sql) == 0) {
    header("location: /");
  }else{

    $row=mysql_fetch_assoc($sql);

    $row["fecha"] = date('d', strtotime($row["fecha"]))." de ".$meses[date('n', strtotime($row["fecha"]))-1]. " del ".date('Y', strtotime($row["fecha"]));

 ?><!DOCTYPE HTML>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> </html><![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> </html><![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> </html><![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
  
  
  <meta charset="utf-8" /><!--  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->
 <!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible' /><![endif]-->

 <title><?=$row["titulo"]?></title>
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
  <link rel="stylesheet" href="./css/flexslider.css" type="text/css" media="screen" />
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
    <div class="idioma"><a href="./?lang=en"><img src="./css/img/ingles.png" alt="Inglés" /></a></div>
     <div class="idioma"><a href="./?lang=es"><img src="./css/img/espanol.png" alt="Español" /></a></div>
    
    <!-- menu -->
    <nav class="columns fifteen menu myMenu">
        <ul class="navegation">
            <li class="rootVoice "><span class="navcurrent_left"></span><a href="./index.php">Home</a><span class="navcurrent_right"></span></li>
            <li class="rootVoice  active {menu: 'menu_2'}"><span class="navcurrent_left"></span><a href="biografia.php">Lorena Piazze</a><span class="navcurrent_right"></span></li>
            <li class="rootVoice {menu: 'menu_3'}"><span class="navcurrent_left"></span><a href="vocesvitales.php">Voces Vitales</a><span class="navcurrent_right"></span></li>
            <li class="rootVoice {menu: 'menu_4'}"><span class="navcurrent_left"></span><a href="community.php">Community Empowerment</a><span class="navcurrent_right"></span></li>
            <li class="rootVoice "><span class="navcurrent_left"></span><a href="agenda.php">Agenda</a><span class="navcurrent_right"></span></li>
              <li class="rootVoice "><span class="navcurrent_left"></span><a href="galeria2.php">Galeria</a><span class="navcurrent_right"></span></li>
                <li class="rootVoice "><span class="navcurrent_left"></span><a href="contacto.php">Contacto</a><span class="navcurrent_right"></span></li>
          <li class="lineamenu"></li>
        </ul>
        <select class="navegation_resp">
            <option value="" selected="selected" />Ir a...
            <option value="./index.php" class="main_item" />Home
            <option value="./biografia.php" class="main_item" />Lorena Piazze
              <option value="./biografia.php" class="second_item" />Biografía
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
    <a href="biografia.php">Biografía</a>
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

               
              </div>
       
       </div>

       <div class="bg-menu">
        <nav class="primary clearfix container">
        <div class="titol title_blog display"><span class="slim"><a href="./noticias.php">Noticias</a></span></div>
    </nav>
       </div>
       
      <!-- content --> 
       <div class="bg-white"><div class="shadow_top"></div></div>
     
           
    <div class="blog clearfix" style="padding-top:0;"> 
      <section class="container content">
  
        
            <div class="detalle column twelve columns"> 
                   
                        <article>
                            <div class="title"><a href="#"><?=$row["titulo"]?></a></div>
                            <div class="icons">
                              
                                <span class="fecha"><?=$row["fecha"]?></span>
                                
                        </div>

                        <?php 

                        $sql=mysqli_query("SELECT * FROM ".$lang."_noticias_imagenes WHERE  ".$lang."_noticias_imagenes.idr =".$row["id"]);
                         $sql2=mysqli_query("SELECT * FROM ".$lang."_noticias_imagenes WHERE  ".$lang."_noticias_imagenes.idr =".$row["id"]);
                        $raw=mysql_fetch_assoc($sql);
                        if (mysql_num_rows($sql) != 0 && !empty($raw["imagen"])) {


                 
                         ?>
                       <div class="imagen">
                            <div class="flexslider3">
                              
                              <ul class="slides">
                                <?php

                                while ($rew=mysql_fetch_assoc($sql2)) {
                                 
                                      echo ' <li><a class="fancy" href="./img/'.$rew["imagen"].'"><img src="./img/'.$rew["imagen"].'"></a></li>';
                                  
                                }

                                 ?>
                               
                              </ul>
                              
                            </div>
                            </div>


                            <?php } ?>

                            <div class="text">
                            <?=$row["texto"]?>
                          </div>
                            
                           
                         
                            
                            <div class="bottomline"></div>
                           <!-- <div class="bottomline2"></div>-->
                           
                           
                        
                           
                      </article>
                      
                      
                             
                                    
                      
      
                
                </div>

        <aside class="sidebar four columns">
                  
            <?php 

              $sql=mysqli_query("SELECT  * FROM ".$lang."_noticias  WHERE categoria = ".$row["categoria"]." AND id != ".$row["id"]." ORDER BY id DESC LIMIT 5  ");
              if(mysql_num_rows($sql) != 0){ ?>

                    
                  <article>
                        <div class="title categories">Otras Noticias</div>
                        <div class="bottomline2"></div>

            

         
                        <ul>

                          <?php while ($row=mysql_fetch_assoc($sql)) { ?>

                            <li><a href="ver_noticia.php?id=<?=$row["id"]?>"><?=$row["titulo"]?></a></li>
                            <li class="sp_puntos"></li>

                           <?php } ?>
                            
                        </ul>
                    </article>
                    
                   
          
   <?php  } ?>


        </aside>

     


     </section>
     
   
     <div class="call-shadow-top"></div>
     
     </div>
     
     <div class="wrapper_call clearfix">
          
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
  <!--<![endif]-->
  
  <script src="./js/jquery.onebyone.js"></script>
  <script src="./js/jquery.touchwipe.min.js"></script> 

  <script type="text/javascript" src="./js/fancybox/jquery.fancybox-1.3.4.pack.js"></script> 
  <script type="text/javascript">
    $(document).ready(function() {
      $("a.fancy").fancybox();
    });
  </script>

  <script type="text/javascript">  
        $('#banner').oneByOne({
      className: 'oneByOne1',              
      /* Please provide the width and height in the responsive 
      version, for the slider will keep the ratio when resize 
      depends on these size. */
      width: '100%',
      height: 350,
      easeType: 'fadeInLeft',
      slideShow: true,
      showButton: true,
      responsive: false,
      minWidth: 480
    });
  </script>

  <script type="text/javascript" src="./jquery.mb.menu.2.8.5/inc/jquery.metadata.js"></script>
  <script type="text/javascript" src="./jquery.mb.menu.2.8.5/inc/jquery.hoverIntent.js"></script>
  <script type="text/javascript" src="./jquery.mb.menu.2.8.5/inc/mbMenu.js"></script>
  <script type="text/javascript" src="./js/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>


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
      hasImages:true,
      fadeInTime:0,
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
  
   <script defer src="./js/jquery.flexslider-min.js"></script>
    
  <script type="text/javascript">
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
    directionNav: true,
    controlNav: false,  
        start: function(slider){
          $('body').removeClass('loading');
        }
      });

    
    
    $('.flexslider3').flexslider({
        animation: "slide",
    directionNav: true,
    controlNav: true,  
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>
  
 
  <script src="./js/plugins.js"></script>
  <script src="./js/script.js"></script>
  
  <script src="./js/custom.js"></script>
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

<?php 

  }
}


?>