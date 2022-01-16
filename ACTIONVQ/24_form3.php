<?php 
	$ru0 = '../';
	$dbs = '';
	$cl1 = '';
	$di1 = '24-form3.php';
	//----------------------------
	if(isset($_POST['enviar'])){
		session_start();
		require_once($ru0.'constant.php');
		//----------------------------
		header("Content-type: application/json; charset: UTF-8;");
		$dt = new stdClass();
		if(isset($_SESSION['sid'])){
			$sid = base64_decode($_POST['sid']);
			//----------------------------
			if ($sid == $_SESSION['sid']) {
				$dt->result = 1;
				$dt->mensaje = 'Registro recibido';
				$dt->titulo1 =$_POST['titulo1'];
				$dt->subtitulo1 =$_POST['subtitulo1'];
				$dt->posicion =$_POST['posicion'];
				$dt->texto = $_POST['texto'];
				if (is_uploaded_file($_FILES["imagen_1"]["tmp_name"])) {
					$dt->imagen_1_name = str_replace(' ', '_',$_FILES["imagen_1"]["name"]);
					$dt->imagen_1_size = $_FILES["imagen_1"]["size"];
					$dt->imagen_1_pixels = getimagesize($_FILES["imagen_1"]["tmp_name"]);
					$dt->imagen_1_type = $_FILES["imagen_1"]["type"];
					$arch = explode('/', $dt->imagen_1_type);
					switch ($arch[1]) {
						case 'jpg':
						case 'jpeg':
						case 'png':
						case 'pneg':
						case 'ico':
						case 'JPG':
						case 'JPGE':
							$dt->imagen_1 = date('YmdHis').'_'.$dt->imagen_1_name;
							$dt->imagen_1_status = true;
						break;
						default:
							$dt->imagen_1 = NULL;
							$dt->imagen_1_status = false;
						break;
					}
				}
				$dt->url = base64_decode($_POST['url']);
			}else{
				$dt->result = 2;
				$dt->mensaje = 'Token invalido';
				$dt->error = 'El token recibido es incorrecto.';
			}
		}else{
			$dt->result = 3;
			$dt->mensaje = 'Error.';
			$dt->error = 'El token no existe. No puede acceder a este recurso.';
		}
		echo json_encode($dt);
	}