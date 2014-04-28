<?php 

	if (isset($_POST["enviado"]) && $_POST["enviado"] == $_SESSION["token"]) {

	  mysqli_query("INSERT INTO `galeria` (`id`, `nombre`, `texto`, `video`, `fecha`, `categoria`) VALUES (NULL, '".$_POST["nombre"]."', '".$_POST["texto"]."', '".$_POST["video"]."', CURDATE(), '".$_POST["categoria"]."');");
	
	 $sql=mysqli_query("SELECT id FROM ".$sec." ORDER BY id DESC LIMIT 1");
	 $row=mysql_fetch_assoc($sql);
	 $id=$row["id"];

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

									mysqli_query("INSERT INTO `".$sec."_imagenes` (`id`, `idr`, `imagen`) VALUES (NULL, '".$id."', '".$imagen."');");
									

								} 
							}

					}

			}



	  header("location:".$conf["url"]."?sec=".$sec."&msj=1");

	}
?>