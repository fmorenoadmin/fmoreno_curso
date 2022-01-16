<?php  
	/*
	Una exepcion es un objeto que describe un error o comportamiento inesperado de un script php.
	Son muchas las funciones o clases que generan exepciones de php, las funciones que son generadas por el programdor tmb pueden genrar exepciones, las exepciones son una forma de detener una funcion cuando encuentra datos que no puede usar. 
	para lanzar una exepcion se debe utilizar la palabra throw
	Sintaxtix:
		new Exception(mensaje, código_error, error_aneterior[opcional])
	*/
	function division($dividendo, $divisor){
		if($divisor == 0){
			throw new Exception('no se puede dividir por 0', 1);//detiene la ejecucion, suelta un error
		}
		return ($dividendo/$divisor).'<br>';
	}
	echo division(4,8);
	//echo division(4,0);
	//--------------------------------------
	//--------------------------------------
	/*
		la declaracion try ... catch sirve para evitar el error y en ves de ello mostrar un mensaje:
		try {
			codigo de salto de la exepcion
		}catch(Exeption $e){
			Mensaje
		}
	*/
	try{
		echo division(4,0); 
	}catch(Exception $e){
		echo 'No se puede dividir por 0<br>';
	}

	try{
		echo division(4,0); 
	}catch(Exception $e){//evita el mensjae de error
		echo 'No se puede dividir por 0<br>';
	}finally{
		echo 'Proceso completado<br>';// mensjae independiente si se ejecuta o no la funcion
	}

	try{
		//echo division(5,0);
	}finally{
		echo 'Proceso completado sin catch<br>';
	}


	try{
		echo division(5,0);
	}catch(Exception $e){
		$code = $e->getCode();
		$mensaje = $e->getMessage();
		$file = $e->getFile();
		$line = $e->getLine();
		echo 'Se encontró una Excepción en el Archivo: '.$file.', en la linea: '.$line.'. Código de Error: ['.$code.'] - Mensaje: '.$mensaje.'<br>';
	}finally{
		echo 'Proceso completado<br>';
	}
?>