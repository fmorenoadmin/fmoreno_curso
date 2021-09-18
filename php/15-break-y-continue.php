<?php 
	/*
	Ya has visto el uso de break dentro de switch, el break es como un salto o escape de la linea de codigos que se estan ejecutando, este tmb se puede usar para salir de un bucle, stop
	*/
	for($x = 1; $x <= 10; $x++){
		if($x == 4){
			break;
		}
		echo 'El numero es: '. $x.'<br>';
	}
	/*
	La declaracion continue(continuar), continua con la siguiente interaccion, skip
	*/
	for($y = 0; $y <= 9; $y++){
		if ($y == 4) {
			continue;
		}
		echo 'El numero es: '. $y. '<br>';
	}
?>