<?php 

	if(isset($_GET["id"]) && is_numeric($_GET["id"])){

		$sql=mysqli_query("SELECT * FROM ".$sec."_imagenes WHERE id =".$_GET["id"]);
		if (mysql_num_rows($sql) != 0) {

			$row=mysql_fetch_assoc($sql);

		   /*
		   
			$file = $conf["uploadDir"].$row["imagen"];

			if (file_exists($file)) {
				unset($file);
			}

			*/
			
			mysqli_query("DELETE FROM  ".$sec."_imagenes  WHERE id =".$_GET["id"]);
			header("location:".$conf["url"]."?sec=".$sec."&subsec=editar&msj=1&id=".$row["idr"]);
		}else{
			header("location:".$conf["url"]);
		}

	}else{
			header("location:".$conf["url"]);
		}


?>