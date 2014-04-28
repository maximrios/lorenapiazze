<?php
/*
UploadiFive
Copyright (c) 2012 Reactive Apps, Ronnie Garcia
*/

// Define a destination
$targetFolder = 'img/'; // Relative to the root and should match the upload folder in the uploader script
$_POST['filename']=trim($_POST['filename']);

if (file_exists($targetFolder.$_POST['filename'])) {
	echo 1;
} else {
	echo 0;
}
?>