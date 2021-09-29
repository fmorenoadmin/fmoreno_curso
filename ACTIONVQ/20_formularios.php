<?php
	$ru0 ='../';
	$dbs ='';
	$cl1 ='formularios_20';
	$di1 ='20-formularios.php';
	//----------------------------
	if(isset($_POST['enviar'])){
		session_start();
		require_once($ru0.'constant.php');
		//--------------------------------
		//require_once('../MORENOKU/20_fomrularios.php');
		require_once($ru0.DIRMOR.$cl1.'.php');//estoy requiriendo mi clase formularios_20
		//$_cl1 = new formularios_20();
		$_cl1 = new $cl1();//Instanciando mi clase, el new es para encapsular una clase dentro de una varibale
		//--------------------------------
		$nombre = $_POST['nombre'];
		//--------------------------------
		$data = $_cl1->saludo($nombre);
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
		//header("Location: ../20-formularios.php"); header es apra moverte de un archivo a otro de php
		header("Location: ".PHP.$di1);
		exit();
	}