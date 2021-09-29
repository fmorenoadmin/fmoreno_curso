<?php
	$ru0 = '../';//es el nivel de la raiz
	$dbs = 'database';//es mi clase database
	$cl1 = 'productos';//Es mi primera clase
	$cl2 = 'tipo_productos';//Es mi segunda clase
	$cl3 = 'unds_meds';//Es mi segunda clase
	$di1 = $cl1.'/';//Esta es mi vista, puedo perfecatmente no colocar index.php por k el servidor automaticamente reconoce el index.php como el archivo primario el que se va abrir primero
	//siempre se repite estas variabkles
	//---------------------------
	function nuevo($rut){
		global $dbs, $cl1, $cl2, $cl3;
		require_once($rut.DIRMOR.$dbs.'.php');//es requerido a la vista, leugo se le invoca la funcion nuevo y en al vista se define que vale $rut, rut en este caso y desde la vista vale salir 2 veces desde tu carpeta ahcia la carpeta raiz
		require_once($rut.DIRMOR.$cl2.'.php');
		require_once($rut.DIRMOR.$cl3.'.php');
		// voy a instancear mi base de datos o mi clase, es lo mismo
		$_dbs = new $dbs();//esta en el otero archivo la explciacion
		$_cl2 = new $cl2();//los aprenteisis estan solo por ser clase.
		$_cl3 = new $cl3();//los aprenteisis estan solo por ser clase.
		$data = new stdClass();
		//-----------------------
		$data->cboTP = $_cl2->cbo($_dbs->conectar());
		$data->cboUM = $_cl3->cbo($_dbs->conectar());
		//-----------------------
		return $data;
	}
	if (isset($_POST['nuevo'])) {
		session_start();
		require_once($ru0.'constant.php');
		//--------------------------------
		require_once($ru0.DIRMOR.$dbs.'.php');
		require_once($ru0.DIRMOR.$cl1.'.php');
		$_dbs = new $dbs();
		$_cl1 = new $cl1();
		$dt = new stdClass();
		//--------------------------------
		$dt->id_tp = base64_decode($_POST['id_tp']);
		$dt->nombre_pro = $_POST['nombre_pro'];
		$dt->marca_pro = $_POST['marca_pro'];
		$dt->medida_pro = $_POST['medida_pro'];
		$dt->id_um = base64_decode($_POST['id_um']);
		$dt->precio_pro = $_POST['precio_pro'];
		$dt->stock_pro = $_POST['stock_pro'];
		$dt->fecha = date('Y-m-d H:i:s');
		//--------------------------------
		$data = $_cl1->add($_dbs->conectar(),$dt);
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
		header("Location: ".URL.$di1);
		exit();
	}