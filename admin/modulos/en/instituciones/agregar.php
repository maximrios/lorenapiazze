<?php 

	if (isset($_POST["enviado"]) && $_POST["enviado"] == $_SESSION["token"]) {

	  mysqli_query("INSERT INTO `".$sec."` (`id`, `nombre`, `domicilio`, `email`, `link`, `fecha`) VALUES (NULL, '".$_POST["nombre"]."', '".$_POST["domicilio"]."', '".$_POST["email"]."', '".$_POST["link"]."', CURDATE());");
	  header("location:".$conf["url"]."?sec=".$page."&msj=1");

	}
?>