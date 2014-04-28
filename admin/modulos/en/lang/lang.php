<?php 

    if (!isset($_GET["id"])) {
        header('Location: '.$conf['url']);
        exit();
    }else{

        $_SESSION["lang"] = $_GET["id"];
        header('Location: '.$conf['url']);
        exit();
    
    }



?>