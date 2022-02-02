<?php
    require($rut.'constant.php');
    //------------------------------------------------------------------------------
    $location = HTTPS.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	if (empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] === "off") {
	    header('Location: '.$location);
        exit();
	}
    //------------------------------------------------------------------------------
    if ($_SERVER['REQUEST_URI'] == 'error/') {// es la carpeta de /error/
    }else if ($_SERVER['REQUEST_URI'] == '/') {// es literalmente '/'
    }else{
        if (!isset($_SESSION['user_id'])) {
            $_SESSION['_dir_url'] = base64_encode($_SERVER['REQUEST_URI']);
            //-------------------------------
            header("Location: ".URL."login.php");
            exit();
        }
    }