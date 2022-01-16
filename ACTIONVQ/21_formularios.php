<?php
	$ru0 ='../';
	$dbs ='database';
	$cl1 ='formularios_21';
	$di1 ='21-formularios.php';
	//----------------------------
	if(isset($_POST['enviar'])){ 
		session_start();
		require_once($ru0.'constant.php');
		//--------------------------------
		//require_once('../MORENOKU/21_fomrularios.php');
		require_once($ru0.DIRMOR.$dbs.'.php');//estoy requiriendo mi clase databae
		require_once($ru0.DIRMOR.$cl1.'.php');//estoy requiriendo mi clase formularios_21
		//$_cl1 = new formularios_21();
		$_dbs = new $dbs();//Instanciando mi clase, el new es para encapsular una clase dentro de una varibale
		$_cl1 = new $cl1();//Instanciando mi clase, el new es para encapsular una clase dentro de una varibale
		$dt = new stdClass();
		//----------------------------
		if(isset($_SESSION['sid'])){//$_SESSION['sid']=fsj85t7vok9g0ks5blnqn8b5al
			$sid = base64_decode($_POST['sid']);
			//----------------------------
			if($_SESSION['sid'] == $sid){//$dt->sid=fsj85t7vok9g0ks5blnqn8b5al
				//--------------------------------
				//las variables deben de tener el mismo nombre que las columnas en MySql
				$dt->nombres = str_replace("'", '´', $_POST['nombres']);
				$dt->apellidos = str_replace("'", '´', $_POST['apellidos']);
				$dt->telefono = $_POST['telefono'];
				$dt->correo = $_POST['correo'];
				$dt->fecha = date('Y-m-d H:i:s');
				//--------------------------------
				$data = $_cl1->add($_dbs->conectar(), $dt);
				//de mi clase 21 estoy invocando a la funcion add y pasandole el parametro dt, el return de mi funcion add se guardara en $data; esto se lee de atras pa adelante
				//--------------------------------
				if (isset($data->result) && $data->result == 1) {
					$_SESSION['result'] = $data->result;
					$_SESSION['SMS_true'] = $data->mensaje;
					$_SESSION['inf'] = $data->inf;
				}else{
					$_SESSION['result'] = $data->result;
					$_SESSION['SMS_false'] = $data->mensaje;
				}
				//--------------------------------
				header("Location: ".PHP.$di1);
				exit();
			}else{
				$dt->result = 2;
				$dt->mensaje = 'Token de seguridad incorrecto.';
				$dt->error = 'No tiene permisos para acceder a este docuemnto.';
				header("Content-type: application/json; charset: UTF-8;");//2h 15 min explicacion
				echo json_encode($dt);
			}
		}else{
			$dt->result = 3;
			$dt->mensaje = 'No existe token.';
			$dt->error = 'El token de seguridad no existe. O no a sido recibido.';
			header("Content-type: application/json; charset: UTF-8;");//2h 15 min explicacion
			echo json_encode($dt);
		}
	}