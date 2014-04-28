<?php







$conf['url']= '/admin/';



$conf['urls']= '/';



$conf['name']= 'Lorena Piazze';



$conf['email']= 'irenepresti@gmail.com';



$conf['sitio']= 'http://www.lorenapiazze.com.ar/';

$conf['msj'] =  array( 1 => 'info' , 2 => 'warning' , 3 => 'success');

$conf['uploadDir'] = 'img/';

$conf['fileTypes'] = array('jpg', 'jpeg', 'gif', 'png'); 





$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");





$link =  mysql_connect('localhost', 'root', 'ara21605');

if (!$link) {   die('No pudo conectarse a la base de datos: ' . mysql_error());}

else { mysql_select_db('lorena'); }













?>

