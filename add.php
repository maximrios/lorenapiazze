<?php 
error_reporting(0);
session_start();

if (isset($_SESSION["admin"]) && isset($_GET["file"])) {
		
			$_GET["file"]=trim($_GET["file"]);

			require_once('../includes/sql.php');
			$sql=mysqli_query("SELECT * FROM copropietario LIMIT 1");
			$row=mysql_fetch_assoc($sql);

			$array=unserialize($row["pdf"]);

			$pdfs=!is_array($array) ? array() : $array;
	
			array_push($pdfs, $_GET["file"]);
			$pdfs=serialize($pdfs);

			$sql= "UPDATE copropietario SET pdf = '".$pdfs."'";
			//echo $sql;

			mysqli_query($sql);

}


?>