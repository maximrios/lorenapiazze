<?php 

	if (isset($_POST["enviado"]) && $_POST["enviado"] == $_SESSION["token"]) {

	  $sql = "UPDATE  ".$sec." SET `titulo`= '".$_POST["titulo"]."', `epigrafe`= '".$_POST["epigrafe"]."', `texto`= '".$_POST["texto"]."', `ub1`= '".$_POST["ub1"]."', `ub2`= '".$_POST["ub2"]."', `ub3`= '".$_POST["ub3"]."', `ub4`= '".$_POST["ub4"]."' WHERE id =".$_GET["id"];
	  //echo $sql;

	  mysqli_query($sql);
	

				if (!empty($_FILES['images']['name']) && !empty($_FILES['images']['name'][0])) {

					foreach ($_FILES['images']['name'] as $key => $value) {

							$imagen = $_FILES['images']['name'][$key];

							$tempFile   = $_FILES['images']['tmp_name'][$key];
							$targetFile = $conf['uploadDir'] . $imagen;

							$fileParts = pathinfo($imagen);
							if (in_array(strtolower($fileParts['extension']), $conf['fileTypes'])) {

								while (file_exists($targetFile)) {

									$imagen = rand(0,999).$imagen;
									$targetFile = $conf['uploadDir'] . $imagen;

								}

								if(move_uploaded_file($tempFile, $targetFile)){

									mysqli_query("INSERT INTO `".$sec."_imagenes` (`id`, `idr`, `imagen`) VALUES (NULL, '".$_GET["id"]."', '".$imagen."');");

								} 
							}

					}

			}

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