<?php
	$x = 5;//variable global
	//Crearemos la funcion test
	//-------------------------------------------------
	function test(){
		//usar $x dentro de esta funcion generar un error
		//cuando estas en uan funcion no peudes llamar variables fuera de la funcion
		echo "<p> variable x dentro de una funcion es: $x </p>";
	}//las funciones no se cierran con ;
	//-------------------------------------------------}
	//invocando la funcion
	test();
	//-------------------------------------------------
	function test2($x){
		//la funcion test2 esta recibiendo un parametro ($x)
		echo "<p>variable x dentro de la funcion test2 es: $x</p>";
	}
	//-------------------------------------------------
	//le estoy pasando la variable $x como parametro a la funcion test2
	test2($x); 
	//Esta fue una de las 2 soluciones que se peuden dar
	function test3(){
		//para poder usar una variable global que se encuentra fuera de una funcion, dentro de un archivo php se debe invocar a la variable como global 
		global $x;
		echo "<p>variable x dentro de la funcion test3 es: $x</p>";
	}
	//invocando la funcion
	test3(); 
	//-------------------------------------------------
	//Vamos a darle una 3era solucion
	function test4(){
		//para poder usar la variable global x tmb se puede invocar el arreglo GLOBALS 
		echo "<p>variable x dentro de la funcion test4 es: ".$GLOBALS['x']."</p>";
	}
	//invocamos test4
	test4();
	//-------------------------------------------------
	//
	function mytest(){
		//variables estaticas son definidas dentro de la funcion
		static $y = 0;
		echo $y;
		//esto de abajo es un acumulador, incrmenta 1 en 1 el valor actual 
		$y++;
	}
	//-------------------------------------------------
	mytest();
	echo "<br>";
	mytest();
	echo "<br>";
	mytest();
	echo "<br>";
	mytest();
	echo "<br>";
