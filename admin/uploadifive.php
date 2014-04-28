<?php
/*
UploadiFive
Copyright (c) 2012 Reactive Apps, Ronnie Garcia
*/


if (!isset($_SESSION["img"])) {
	$_SESSION["img"]= 1;
}else{
	$_SESSION["img"]++;
}


// Set the uplaod directory
$uploadDir = 'img/';

// Set the allowed file extensions
$fileTypes = array('jpg', 'jpeg', 'gif', 'png', 'pdf', 'ppt', 'doc', 'docx'); // Allowed file extensions

$verifyToken = md5('unique_salt' . $_POST['timestamp']);

if (!empty($_FILES) && $_POST['token'] == $verifyToken) {
	$tempFile   = $_FILES['Filedata']['tmp_name'];
	$targetFile = $uploadDir . $_FILES['Filedata']['name'];

	// Validate the filetype
	$fileParts = pathinfo($_FILES['Filedata']['name']);
	//if (in_array(strtolower($fileParts['extension']), $fileTypes)) {
		// Save the file
		move_uploaded_file($tempFile, $targetFile);
		$_SESSION["img"]

	/*} else {

		// The file type wasn't allowed
		echo 'Invalid file type.';

	}*/
}
?>