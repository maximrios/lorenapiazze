<?php

session_start();
error_reporting(E_ALL);

//Configuracion mysql
require_once('includes/config.php');
//Funciones
require_once('includes/funciones.php');

//Paginas
$secciones = array(
//       $_GET => source.php => Titulo => Template => Login required  => Solo admins     
		'index' => array('index', $conf['name'], 'base', 1, 1),
		'salir' => array('salir', 'Salir', 'base', 1, 1),
		'lang' => array('lang', 'Cambiar idioma', 'base', 1, 1),
		'noticias' => array('noticias', 'Noticias', 'base', 1, 1),
		'agenda' => array('agenda', 'Agenda', 'base', 1, 1),
		'configuracion' => array('configuracion', 'Configuracion', 'base', 1, 1),
		'mujeres' => array('mujeres', 'Mujeres empresarias', 'base', 1, 1),
		'galeria' => array('galeria', 'Mujeres empresarias', 'base', 1, 1),
		'instituciones' => array('instituciones', 'Instituciones', 'base', 1, 1),
		'capacitaciones' => array('capacitaciones', 'Capacitaciones', 'base', 1, 1),
		'login' => array('login', 'Ingreso al sistema', 'login', 0), 0,
		'recuperar' => array('recuperar', 'Recuperar contraseña', 'login', 0, 0),
		'contacto' => array('contacto', 'Form contacto', 'base', 1, 1)

);


$subsecciones = array(
						'noticias' => array("editar" => 1, "agregar" => 1, "borrar" => 1, "borrarimg" => 1, "activo" => 1),
						'mujeres' => array("editar" => 1, "agregar" => 1, "borrar" => 1, "borrarimg" => 1),
						'galeria' => array("editar" => 1, "agregar" => 1, "borrar" => 1, "borrarimg" => 1),
						'instituciones' => array("editar" => 1, "agregar" => 1, "borrar" => 1),
						'agenda' => array("editar" => 1, "agregar" => 1, "borrar" => 1),
						'capacitaciones' => array("editar" => 1, "agregar" => 1, "borrar" => 1),
						'contacto' => array("borrar" => 1)
						
					);


$sql=isset($_SESSION["lang"]) ? mysqli_query("SELECT * FROM idiomas WHERE slug LIKE '".$_SESSION["lang"]."' LIMIT 1") : mysqli_query("SELECT * FROM idiomas ORDER BY id ASC LIMIT 1");
$idiomaAct=mysql_fetch_assoc($sql);

$idioma = $idiomaAct["slug"];

//Tabla BD y modulo
$sec= (!isset($_GET['sec']) || !isset($secciones[$_GET['sec']])) ? 'index' : $_GET['sec'];

//Chequea si esta logeado
if ($secciones[$sec][3] ==1 && !isset($_SESSION['uid'])) {
	$sec='login';
}


//Guardamos la pagina 
$page =$sec;

$sec= $idioma."_".$sec;

//Source de la pagina
$source = (isset($_GET["subsec"]) && isset($subsecciones[$page][$_GET['subsec']])) ? $_GET["subsec"] : $secciones[$page]['0'];



require_once('modulos/'.$idioma.'/'.$page.'/'.$source.'.php');

$_SESSION["token"] = md5(rand(0,99999).'impresiones');

//Template
require_once('templates/'.$idioma.'/'.$secciones[$page]['2'].'.php');

//Inluimos el heder
template_header ($secciones[$page]['1']);

//Inluimos el body
$body = (isset($_GET["subsec"]) && isset($subsecciones[$page][$_GET['subsec']])) ? $_GET["subsec"].'.template.php' : 'template.php';
require_once('modulos/'.$idioma.'/'.$page.'/'.$body);

//Inluimos el footer
template_footer();

?>