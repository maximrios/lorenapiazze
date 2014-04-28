<?php 

if(isset($_GET["lang"])){
	$_SESSION["lang"] = $_GET["lang"];
}


$lang = isset($_SESSION["lang"]) ? $_SESSION["lang"] : "es";
//$lang="es";

?>