<?php
 	$ru0 = '../';
 	$dbs = '';
 	$cl1 = '';
 	$di1 = '';
 	//----------------------------
 	if(isset($_POST['enviar'])){
 		session_start();
 		require_once($ru0.'constant.php');
 		//----------------------------------------------------------
 		header("content-type: application/json; charset: UTF-8;");
 		$dt = new stdClass;
 		//----------------------------------------------------------
 		if(isset($_SESSION['sid'])){
 			$sid = base64_decode($_POST['sid']);
 			if($sid == $_SESSION['sid']){
 				$directory = $ru0.'files/';
 				if (is_uploaded_file($_FILES['archivo']['tmp_name'])) {
 					$dt->name = date('YmdHms').str_replace(' ', '_', $_FILES['archivo']['name']);
 					$dt->size = $_FILES['archivo']['size'];
 					$dt->type = $_FILES['archivo']['type'];
 					$dt->imagen_1_pixels = getimagesize($_FILES["archivo"]["tmp_name"]);
 					if(move_uploaded_file($_FILES['archivo']['tmp_name'], $directory.$dt->name)){
 						$dt->resultado = 1;
 					}else{
 						$dt->resultado = 0;
 						$dt->error = 'El archivo ah sido guardado exitosamente.';
 					}
 				}
 				$dt->mensaje = 'archivo recibido';
 				$dt->url = base64_decode($_POST['url']);
	 		}else{
	 			$dt->resultado = 2;
	 			$dt->mensaje = 'no coincide la sesion';
	 			$dt->error = 'no coincide la session';
	 		}
	 	}else{
	 		$dt->resultado = 3;
	 		$dt->mensaje = 'no existe la sesion';
	 		$dt->error = 'no existe la sesion';
	 	}
	 	echo json_encode($dt);
 	}