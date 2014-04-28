<?php

$mensajes = array(
					1 => array(1, 'Actualizado.')
				);



	if (isset($_POST["enviado"]) && $_POST["enviado"] == $_SESSION["token"]) {

	  mysqli_query("UPDATE  usuarios SET `nombre`= '".$_POST["nombre"]."', `email`= '".$_POST["email"]."', `contrasena`= '".$_POST["contrasena"]."'  WHERE id =".$_SESSION["uid"]);
	  $_SESSION["nombre"] = $_POST["nombre"];
	  header("location:".$conf["url"]."?sec=".$page."&msj=1");

	}else{

			$sql=mysqli_query("SELECT * FROM usuarios WHERE id =".$_SESSION["uid"]);
			$row=mysql_fetch_assoc($sql);

	}

?>

