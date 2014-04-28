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
* the terms of the provided license as published by IMSite.        				  *
*                                                                                 *
* This program is distributed in the hope that it is and will be useful, but      *
* WITHOUT ANY WARRANTIES; without even any implied warranty of MERCHANTABILITY    *
* or FITNESS FOR A PARTICULAR PURPOSE.                                            *
*                                                                                 *
**********************************************************************************/

//Definimos el header
function template_header ($title){
		global  $conf, $secciones, $sec;

$select='class=select';

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
    <body class="tooltips full-content">
    
    
    <!-- BEGIN PAGE -->
    <div class="container">
        
        <!-- Begin Login Page -->
        <div class="full-content-center animated fadeInDownBig">
            <a href="#fakelink"><img src="'.$conf['url'].'assets/img/logo-login.png" class="logo-login " alt="Logo"></a>
            <div class="login-wrap">';

}


//Definimos el footer
function  template_footer() {	global  $conf, $sec;

 echo'

            </div>
        </div>
        <!-- End Login Page -->
        
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
    
    <!-- VENDOR -->
    
    <!-- Slimscroll js -->
    <script src="'.$conf['url'].'assets/third/slimscroll/jquery.slimscroll.min.js"></script>
    
    <!-- Morris js -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="'.$conf['url'].'assets/third/morris/morris.js"></script>
    
    <!-- Nifty modals js -->
    <script src="'.$conf['url'].'assets/third/nifty-modal/js/classie.js"></script>
    <script src="'.$conf['url'].'assets/third/nifty-modal/js/modalEffects.js"></script>
    
    <!-- Sortable js -->
    <script src="'.$conf['url'].'assets/third/sortable/sortable.min.js"></script>
    
    <!-- Bootstrao selectpicker js -->
    <script src="'.$conf['url'].'assets/third/select/bootstrap-select.min.js"></script>
    
    <!-- Summernote js -->
    <script src="'.$conf['url'].'assets/third/summernote/summernote.js"></script>
    
    <!-- Magnific popup js -->
    <script src="'.$conf['url'].'assets/third/magnific-popup/jquery.magnific-popup.min.js"></script> 
    
    <!-- Bootstrap file input js -->
    <script src="'.$conf['url'].'assets/third/input/bootstrap.file-input.js"></script>
    
    <!-- Bootstrao datepicker js -->
    <script src="'.$conf['url'].'assets/third/datepicker/js/bootstrap-datepicker.js"></script>
    
    <!-- Icheck js -->
    <script src="'.$conf['url'].'assets/third/icheck/icheck.min.js"></script>
    
    <!-- Form wizard js -->
    <script src="'.$conf['url'].'assets/third/wizard/jquery.easyWizard.js"></script>
    <script src="'.$conf['url'].'assets/third/wizard/scripts.js"></script>


    </body>
</html>';	}



 ?>