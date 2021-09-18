<?php
	// Para poder decalrar una variable, se necesita ante poner al nombre de la variable, el simbolo $
	//-----------------------------------------
	$txt = "hola mundo" ; # var tipo texto
	$x = 5; # varibale de tipoe enterp
	$y = 10.5; # var tipo real o decimal
	$tipo = false; #var tipo bolueano
	$opit = true; #var tipo bolueano
	$color = array(); # var de tipo arreglo
	$persona = new stdClass(); # var de tipo objeto
	//-----------------------------------------
	//array_push(nombreArreglo, Información1, Información2, ....);
	//array_push(nombreArreglo, Array());
	array_push(
		$color,
		array(
			array(
				"id" => 1,
				"nombre" => "Rojo",
				"codigo" => "#FF0000"
			),
			array(
				"id" => 2,
				"nombre" => "Negro",
				"codigo" => "#000000"
			),
			array(
				"id" => 3,
				"nombre" => "Blanco",
				"codigo" => "#ffffff"
			)
		)
	);
	array_push(
		$color,
		array(
			"id" => 1,
			"nombre" => "Rojo",
			"codigo" => "#FF0000"
		),
		array(
			"id" => 2,
			"nombre" => "Negro",
			"codigo" => "#000000"
		),
		array(
			"id" => 3,
			"nombre" => "Blanco",
			"codigo" => "#ffffff"
		)
	);
	//header("Content-type: application/json; charset: utf-8;");
	//print_r($color);
	echo json_encode($color);
	//-----------------------------------------
	$persona = new stdClass(); # var de tipo objeto
	//-----------------------------------------
	$persona->id = 1;
	$persona->nombre = "Marcelo";
	$persona->apellido = "Gutierrez";
	$persona->edad = 18;
	$persona->sexo = "M";
	$persona->Altura = 1.69;
	$persona->signo = "piscis";
	//-----------------------------------------
	//echo json_encode($persona);
	//-----------------------------------------
	//tmb se puede inprimir o mostrar el contenido de una variable dentro de texto con ""
	echo "<br>";
	echo "este es mi primer $txt";
	echo "<br>";
	//cuando se utilizen comillas simples '' no se va a imprimir o mostrar el contenido de una variable, estas comillas simples lo van a reconocer como un texto mas no como una variable
	echo 'Este es mi segundo $txt';
	echo "<br>";
	//para poder dar o evitar una salida de alguna comilla doble se necesita anteponer el backslash (\)
	echo "Esta es una concatenacion de <b>".$txt."</b> con <b>comillas dobles(\")</b> en esta oracion";
	echo "<br>";
	echo 'Esta es una conquatenacion de <b>'.$txt.'</b> con <b>comillas simples(\')</b> en esta oracion';
	echo "<br>";
	// tambien se pueden realizar operaciones atraves del echo
	echo $x + $y;