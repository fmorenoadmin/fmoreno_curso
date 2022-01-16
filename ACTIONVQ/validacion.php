<?php 
	$ru0 ='../';
	$dbs='';
	$cl1='';
	$di1='23-validacion-form.php';
	//----------------------------
	if(isset($_POST['enviar'])){
		session_start();
		require_once($ru0.'constant.php');
		//----------------------------
		header("Content-type: application/json; charset: UTF-8;");//2h 15 min explicacion
		$dt = new stdClass();
		//----------------------------
		if(isset($_SESSION['sid'])){//$_SESSION['sid']=fsj85t7vok9g0ks5blnqn8b5al
			$sid = base64_decode($_POST['sid']);
			//----------------------------
			if($_SESSION['sid'] == $sid){//$dt->sid=fsj85t7vok9g0ks5blnqn8b5al
				$dt->result = 1;
				$dt->mensaje = 'Datos recibidos correctamente';
				$dt->error = null;
				$dt->nombres = $_POST['nombres'];
				$dt->correo = $_POST['correo'];
				$dt->pagina = $_POST['pagina'];
				$dt->obs = $_POST['obs'];
				$dt->genero = $_POST['genero'];
				$dt->url = base64_decode($_POST['url']);
			}else{
				$dt->result = 2;
				$dt->mensaje = 'Token de seguridad incorrecto.';
				$dt->error = 'No tiene permisos para acceder a este docuemnto.';
			}
		}else{
			$dt->result = 3;
			$dt->mensaje = 'No existe token.';
			$dt->error = 'El token de seguridad no existe. O no a sido recibido.';
		}
		//----------------------------
		echo json_encode($dt);
	}