<?php 

	if(isset($_GET["id"]) && is_numeric($_GET["id"])){
		mysqli_query("DELETE FROM  ".$sec."  WHERE id =".$_GET["id"]);
		mysqli_query("DELETE FROM  ".$sec."_imagenes  WHERE idr =".$_GET["id"]);

		header("location:".$conf["url"]."?sec=".$sec."&msj=2");
	}else{
			header("location:".$conf["url"]);
		}


?>