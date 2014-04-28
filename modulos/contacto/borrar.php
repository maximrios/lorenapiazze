<?php 

	if(isset($_GET["id"]) && is_numeric($_GET["id"])){
		mysqli_query("DELETE FROM  ".$sec."  WHERE id =".$_GET["id"]);
		header("location:".$conf["url"]."?sec=".$sec."&msj=1");
	}else{
			header("location:".$conf["url"]);
		}


?>