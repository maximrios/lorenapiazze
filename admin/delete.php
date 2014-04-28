<?php 

session_start();
if (isset($_SESSION["admin"]) && isset($_GET["file"])) {

			

			$_GET["file"]= str_replace("- Completed", "", $_GET["file"]);
			$_GET["file"]=trim($_GET["file"]);

			if(file_exists("../img/".$_GET["file"])) unlink("../img/".$_GET["file"]);

			//echo $_GET["file"];

			require_once('../includes/sql.php');
			$sql=mysqli_query("SELECT * FROM copropietario LIMIT 1");
			$row=mysql_fetch_assoc($sql);

			$pdfs=unserialize($row["pdf"]);

			foreach ($pdfs as $key => $value) {
						if($value == $_GET["file"]){
							unset($pdfs[$key]);
							$pdfs=serialize($pdfs);
							$sql="UPDATE copropietario SET pdf = '".$pdfs."'";
							//echo $_POST['filename'];
							mysqli_query($sql);
							break;
						}
			}


	

}


?>