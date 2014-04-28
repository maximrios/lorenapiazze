<?php



$conf['url']= '/lorenapiazze/';
$conf['urls']= '/lorenapiazze/';
$conf['name']= 'Empresaria';
$conf['email']= 'noreply@empresaria.com.ar';
$conf['sitio']= 'http://www.indexweb2.com.ar/lorenapiazze/';
$conf['msj'] =  array( 1 => 'info' , 2 => 'warning' , 3 => 'success');
$conf['uploadDir'] = 'img/';
$conf['fileTypes'] = array('jpg', 'jpeg', 'gif', 'png'); 


$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");


$link =  mysql_connect('localhost', 'indexwe2_lorena', 'Pancha2771%');
if (!$link) {   die('No pudo conectarse a la base de datos: ' . mysql_error());}
else { mysql_select_db('indexwe2_lorenapiazze'); }






?>
