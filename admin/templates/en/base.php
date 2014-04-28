<?php

/**********************************************************************************
* template.php                                                                    *
***********************************************************************************
*                                                                                 *
* Open-Source Project Inspired Alex Pedersen (info@alexpedersen.com.ar)           *
* =============================================================================== *
* Software Version:           1.0                                                 *
* Software by:                IMSite (http://www.imsite.com.ar)                   *
* Copyright 2009-2011 by:     IMSite LLC (http://www.imsite.com.ar)               *
* Support, News, Updates at:  http://www.imsite.com.ar                            *
***********************************************************************************
* This program is free software; you may redistribute it and/or modify it under   *
* the terms of the provided license as published by IMSite.                       *
*                                                                                 *
* This program is distributed in the hope that it is and will be useful, but      *
* WITHOUT ANY WARRANTIES; without even any implied warranty of MERCHANTABILITY    *
* or FITNESS FOR A PARTICULAR PURPOSE.                                            *
*                                                                                 *
**********************************************************************************/

//Definimos el header
function template_header ($title){

    global  $conf, $secciones, $sec, $idioma, $idiomaAct;



echo'<!DOCTYPE html>
<html>
    <head>
    <title>'.$title.'</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="description" content="">
    <meta name="keywords" content="admin, bootstrap,admin template, bootstrap admin, simple, awesome">
    <meta name="author" content="">

    <!-- BOOTSTRAP -->
    <link href="'.$conf['url'].'assets/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- LANCENG CSS -->
    <link href="'.$conf['url'].'assets/css/style.css" rel="stylesheet">
    <link href="'.$conf['url'].'assets/css/style-responsive.css" rel="stylesheet">
    
    <!-- VENDOR -->
    <link href="'.$conf['url'].'assets/css/animate.css" rel="stylesheet">
    <link href="'.$conf['url'].'assets/third/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="'.$conf['url'].'assets/third/weather-icon/css/weather-icons.min.css" rel="stylesheet">
    <link href="'.$conf['url'].'assets/third/morris/morris.css" rel="stylesheet">
    <link href="'.$conf['url'].'assets/third/nifty-modal/css/component.css" rel="stylesheet">
    <link href="'.$conf['url'].'assets/third/sortable/sortable-theme-bootstrap.css" rel="stylesheet"> 
    <link href="'.$conf['url'].'assets/third/icheck/skins/minimal/grey.css" rel="stylesheet"> 
    <link href="'.$conf['url'].'assets/third/select/bootstrap-select.min.css" rel="stylesheet"> 
    <link href="'.$conf['url'].'assets/third/summernote/summernote.css" rel="stylesheet">
    <link href="'.$conf['url'].'assets/third/magnific-popup/magnific-popup.css" rel="stylesheet"> 
    <link href="'.$conf['url'].'assets/third/datepicker/css/datepicker.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn t work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    
    <!-- FAVICON -->
    <link rel="shortcut icon" href="'.$conf['url'].'assets/img/favicon.ico">
    </head>
    
    
    
    <!-- BODY -->
    <body class="tooltips">
    
    <!-- LOADING ANIMATION -->
    <div id="loading">
        <div class="loading-inner">
            <div class="spinner">
                <div class="cube1"></div>
                <div class="cube2"></div>
            </div>
        </div>
    </div>
    
    <!-- BEGIN PAGE -->
    <div class="container">
            
        <!-- Your logo goes here -->
        <div class="logo-brand header sidebar rows">
            <div class="logo">
                <h1><a href="'.$conf["url"].'"><img src="'.$conf['url'].'assets/img/logo.png" alt="Logo"></a></h1>
            </div>
        </div><!-- End div .header .sidebar .rows -->
    
        <!-- BEGIN SIDEBAR -->
        <div class="left side-menu">
        
            <div class="body rows scroll-y">
                
                <!-- Scrolling sidebar -->
                <div class="sidebar-inner ">            
                    
                    <!-- 
                    <div id="search">
                        <form role="form">
                            <input type="text" class="form-control search" placeholder="Buscar pedido...">
                            <i class="fa fa-search"></i>
                        </form>
                    </div> -->
                    
                
                    <!-- Sidebar menu -->               
                    <div id="sidebar-menu">
                        <ul>

                                <li '; if($sec == "index" ) echo 'class="active"'; echo'><a href="'.$conf["url"].'"><i class="fa fa-home"></i> Home</a></li>
                                <li '; if($sec == "noticias" ) echo 'class="active"'; echo'><a href="#"><i class="fa fa-table"></i><i class="fa fa-angle-double-down i-right"></i> News</a>
                                    <ul>
                                        <li><a href="'.$conf["url"].'?sec=noticias&subsec=agregar"><i class="fa fa-angle-right"></i> New</a></li>
                                        <li><a href="'.$conf["url"].'?sec=noticias"><i class="fa fa-angle-right"></i> List</a></li>
                                    </ul>
                                </li>
                                <li '; if($sec == "contacto" ) echo 'class="active"'; echo'><a href="'.$conf["url"].'?sec=contacto"><i class="fa fa-envelope"></i>Form contacto</a></li>    
                                <li '; if($sec == "instituciones" ) echo 'class="active"'; echo'><a href="#"><i class="fa fa-table"></i><i class="fa fa-angle-double-down i-right"></i> Institutions</a>
                                    <ul>
                                        <li><a href="'.$conf["url"].'?sec=instituciones&subsec=agregar"><i class="fa fa-angle-right"></i> New </a></li>
                                        <li><a href="'.$conf["url"].'?sec=instituciones"><i class="fa fa-angle-right"></i> List</a></li>
                                    </ul>
                                </li>

                                <li '; if($sec == "capacitaciones" ) echo 'class="active"'; echo'><a href="#"><i class="fa fa-table"></i><i class="fa fa-angle-double-down i-right"></i> Training</a>
                                    <ul>
                                        <li><a href="'.$conf["url"].'?sec=capacitaciones&subsec=agregar"><i class="fa fa-angle-right"></i> New </a></li>
                                        <li><a href="'.$conf["url"].'?sec=capacitaciones"><i class="fa fa-angle-right"></i> List</a></li>
                                    </ul>
                                </li>

                                <li '; if($sec == "mujeres" ) echo 'class="active"'; echo'><a href="#"><i class="fa fa-table"></i><i class="fa fa-angle-double-down i-right"></i> Nusiness women</a>
                                    <ul>
                                        <li><a href="'.$conf["url"].'?sec=mujeres&subsec=agregar"><i class="fa fa-angle-right"></i> New</a></li>
                                        <li><a href="'.$conf["url"].'?sec=mujeres"><i class="fa fa-angle-right"></i> List </a></li>
                                    </ul>
                                </li>

                                <li '; if($sec == "galeria" ) echo 'class="active"'; echo'><a href="#"><i class="fa fa-table"></i><i class="fa fa-angle-double-down i-right"></i> Galleries</a>
                                    <ul>
                                        <li><a href="'.$conf["url"].'?sec=galeria&subsec=agregar"><i class="fa fa-angle-right"></i> New</a></li>
                                        <li><a href="'.$conf["url"].'?sec=galeria"><i class="fa fa-angle-right"></i> List</a></li>
                                    </ul>
                                </li>

                                <li '; if($sec == "agenda" ) echo 'class="active"'; echo'><a href="#"><i class="fa fa-table"></i><i class="fa fa-angle-double-down i-right"></i> Diary</a>
                                    <ul>
                                        <li><a href="'.$conf["url"].'?sec=agenda&subsec=agregar"><i class="fa fa-angle-right"></i> New</a></li>
                                        <li><a href="'.$conf["url"].'?sec=agenda"><i class="fa fa-angle-right"></i> List</a></li>
                                    </ul>
                                </li>

                        </ul>
                        <div class="clear"></div>
                    </div><!-- End div #sidebar-menu -->
                </div><!-- End div .sidebar-inner .slimscroller -->
            </div><!-- End div .body .rows .scroll-y -->

        </div>
        <!-- END SIDEBAR -->      
        
        <!-- BEGIN CONTENT -->
        <div class="right content-page">
        
            <!-- BEGIN CONTENT HEADER -->
            <div class="header content rows-content-header">
            
                <!-- Button mobile view to collapse sidebar menu -->
                <button class="button-menu-mobile show-sidebar">
                    <i class="fa fa-bars"></i>
                </button>
                
                <!-- BEGIN NAVBAR CONTENT-->                
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <!-- Navbar header -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <i class="fa fa-angle-double-down"></i>
                            </button>
                        </div><!-- End div .navbar-header -->
                        
                        <!-- Navbar collapse -->    
                        <div class="navbar-collapse collapse">
                        
                            <!-- Left navbar -->
                            <ul class="nav navbar-nav">

                                <li class="dropdown">';

                                    echo'<a href="#"  class="dropdown-toggle" data-toggle="dropdown">'.$idiomaAct["nombre"].' <i class="fa fa-chevron-down i-xs"></i></a>';

                                    $sql=mysqli_query("SELECT * FROM idiomas WHERE slug NOT LIKE '".$idioma."'");
                                    if (mysql_num_rows($sql) != 0) {
                                        echo '<ul class="dropdown-menu animated half flipInX">';
                                        while ($lang=mysql_fetch_assoc($sql)) {
                                            echo' <li><a href="'.$conf["url"].'?sec=lang&id='.$lang["slug"].'">'.$lang["nombre"].'</a></li>';
                                        }
                                         echo'</ul>';      
                                    }

                                echo'</li> 
                            </ul>
                        
                            <!-- Right navbar -->
                            <ul class="nav navbar-nav navbar-right top-navbar">
      
                            
                                <!-- Dropdown User session -->
                                <li class="dropdown">
                                    <a href="#fakelink" class="dropdown-toggle" data-toggle="dropdown">Bienvenido, <strong>'.$_SESSION["nombre"].'</strong> <i class="fa fa-chevron-down i-xs"></i></a>
                                    <ul class="dropdown-menu animated half flipInX">
                                        <li><a href="'.$conf["url"].'?sec=configuracion">Config</a></li>
                                        <li class="divider"></li>

                                        <li><a class="md-trigger" href="'.$conf["url"].'?sec=salir">Logout</a></li>
                                    </ul>
                                </li>
                                <!-- End Dropdown User session -->
                            </ul>
                        </div><!-- End div .navbar-collapse -->
                    </div><!-- End div .container -->
                </div>
                <!-- END NAVBAR CONTENT-->
            </div>
            <!-- END CONTENT HEADER -->
            
            
            
            
            <!-- ============================================================== -->
            <!-- START YOUR CONTENT HERE -->
            <!-- ============================================================== -->
            <div class="body content rows scroll-y">
';


}


//Definimos el footer
function  template_footer() {   global  $conf, $sec;

    $timestamp = time();

 echo'<!-- Footer -->
                <footer>
                &copy; '.date("Y").' <a href="'.$conf["urls"].'">'.$conf["name"].'</a>. 
                </footer>
                <!-- End Footer -->
            
            </div>
            <!-- ============================================================== -->
            <!-- END YOUR CONTENT HERE -->
            <!-- ============================================================== -->
            
            
        </div>
        <!-- END CONTENT -->
        
    
        
        
        
    </div><!-- End div .container -->
    <!-- END PAGE -->

    <!--
    ================================================
    JAVASCRIPT
    ================================================
    -->
    <!-- Basic Javascripts (Jquery and bootstrap) -->
    <script src="'.$conf['url'].'assets/js/jquery.js"></script>
    <script src="'.$conf['url'].'assets/js/bootstrap.min.js"></script>
    

    <!-- Bootstrao selectpicker js -->
    <script src="'.$conf['url'].'assets/third/select/bootstrap-select.min.js"></script>
    
       
    <!-- Bootstrap file input js -->
    <script src="'.$conf['url'].'assets/third/input/bootstrap.file-input.js"></script>
    
    <!-- Bootstrao datepicker js -->
    <script src="'.$conf['url'].'assets/third/datepicker/js/bootstrap-datepicker.js"></script>
    
    <!-- TEMPLATE JAVASCRIPT -->
    <script src="'.$conf['url'].'assets/js/theme.js"></script>



    </body>
</html>';   }

?>