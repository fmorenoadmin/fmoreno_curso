<?php 
	$ru0='../';
	$dbs='';
	$cl1='';
	$di1='22-form1.php';	
	//------------------------------
	if(isset($_POST['enviar'])){
		session_start();
		require_once($ru0.'constant.php');
		//------------------------------
		$nombre = $_POST['nombre'];
		$correo = $_POST['correo'];
		//------------------------------
		echo 'bienvenidos '.$nombre.'<br>';
		echo 'tu correo electronico es: '.$correo.'<br>';
		//------------------------------
		$_POST = null;
	}
	if(isset($_GET['enviar'])){
		session_start();
		require_once($ru0.'constant.php');
		//------------------------------
		$nombre = $_GET['nombre'];
		$correo = $_GET['correo'];
		//------------------------------
		echo 'bienvenidos '.$nombre.'<br>';
		echo 'tu correo electronico es: '.$correo.'<br>';
		$_GET = null;
	}