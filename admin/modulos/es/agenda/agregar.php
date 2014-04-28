<?php 

	if (isset($_POST["enviado"]) && $_POST["enviado"] == $_SESSION["token"]) {

	  mysqli_query("INSERT INTO `".$sec."` (`id`, `titulo`, `fecha`, `fecha2`, `desc`) VALUES (NULL, '".$_POST["titulo"]."', '".$_POST["fecha"]."', '".$_POST["fecha2"]."', '".$_POST["desc"]."');");
	  header("location:".$conf["url"]."?sec=".$page."&msj=1");

	}
?>