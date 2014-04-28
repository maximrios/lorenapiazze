<?php

if (isset($_GET["file"]) && isset($_GET["id"])) {


	if (file_exists("../img/".$_GET["file"])) {
		unlink("../img/".$_GET["file"]);
				
		}
				$_GET["id"]=(int)$_GET["id"];
				require_once('../includes/sql.php');
				$query="SELECT imagenes FROM proyectos WHERE id = ".$_GET["id"];
				//echo $query;
				$sql=mysqli_query($query);
				$row=mysql_fetch_assoc($sql);
				$imagen=unserialize($row["imagenes"]);
				$posicionAEliminar = array_search($_GET["file"],$imagen,false);
				array_splice($imagen, $posicionAEliminar, 1);
				$imagen=serialize($imagen);
				$query2="UPDATE proyectos SET imagenes = '".$imagen."' WHERE id=".$_GET["id"];
				//echo $query2;
				mysqli_query($query2);

}else{
	echo 'Error inesperado';
}





?>