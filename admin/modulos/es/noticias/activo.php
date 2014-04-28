<?php 

	if(isset($_GET["id"]) && is_numeric($_GET["id"])){

		$sql=mysqli_query("SELECT * FROM ".$sec." WHERE id =".$_GET["id"]);
		if (mysql_num_rows($sql) != 0) {

			$row=mysql_fetch_assoc($sql);

			$activo = ($row["activo"] == 1) ? 0 : 1;
			
			mysqli_query("UPDATE ".$sec."  SET activo =".$activo." WHERE id =".$_GET["id"]);
			header("location:".$conf["url"]."?sec=".$page."&msj=".($activo+4));
		}else{
			header("location:".$conf["url"]);
		}

	}else{
			header("location:".$conf["url"]);
		}


?>