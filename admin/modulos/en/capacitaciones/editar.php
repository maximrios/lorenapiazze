<?php 

	if (isset($_POST["enviado"]) && $_POST["enviado"] == $_SESSION["token"]) {

	  mysqli_query("UPDATE  ".$sec." SET `nombre`= '".$_POST["nombre"]."', `domicilio`= '".$_POST["domicilio"]."', `email`= '".$_POST["email"]."', `link`= '".$_POST["link"]."' WHERE id =".$_GET["id"]);
	  header("location:".$conf["url"]."?sec=".$page."&msj=3");

	}else{

		if(isset($_GET["id"]) && is_numeric($_GET["id"])){
			$sql=mysqli_query("SELECT * FROM ".$sec." WHERE id =".$_GET["id"]);
			$row=mysql_fetch_assoc($sql);
		}else{
			header("location:".$conf["url"]);
		}
	}

?>