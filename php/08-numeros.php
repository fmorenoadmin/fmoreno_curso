<?php 
	//una cosa a tener en cuenta sobre php es que proporciona convercion automatica de tipos de datos
	//2,256,-256,10 358,-179 556 son todos numeros enteros
	//Un tipo de datos entero es un número no decimal entre -2 147 483 648 y 2 147 483 647 en sistemas de 32 bits, y entre -9 223 372 036 854 775 808 y 9 223 372 036 854 775 807 en sistemas de 64 bits. Un valor mayor (o menor) que este, se almacenará como flotante, porque excede el límite de un número entero.
	$x = 999;
	$y = acos(0)*9999999999999999999999999999999999999999999999999999999;
	//usamos comillas simples para que no se imprima el valor de x
	// si es entero
	if (is_int($x)) {
		echo '$x es entero<br>';
	}else{
		echo '$x no es entero<br>';
	}
	// si es entero
	if (is_integer($x)) {
		echo '$x es entero<br>';
	}else{
		echo '$x no es entero<br>';
	}
	// si es entero
	if (is_long($x)) {
		echo '$x es entero<br>';
	}else{
		echo '$x no es entero<br>';
	}
	// si es decimal
	if (is_float($x)) {
		echo '$x es decimal<br>';
	}else{
		echo '$x no es decimal<br>';
	}
	//
	if (is_finite($x)){
		echo '$x es finito<br>';
	}else{
		echo '$x no es finito<br>';
	}
	//
	if (is_infinite($x)){
		echo '$x es infinito<br>';
	}else{
		echo '$x no es infinito<br>';
	}
	// si es no numerico
	if (is_int($y)) {
		echo $y.'<br>';
	}else{
		echo $y.'<br>';
	}
	//cadenas numericas, 
	//is_numeric se utiliza para encotnrar si una variable es numerica. La funcion devolvera 1 o verdadero si es numero y 0 ofalso si no es numero 
	if (is_numeric($x)){
		echo '$x tiene un valor numerico<br>';
	}else {
		echo '$x no tiene un valor numerico<br>';
	}
	//
	if (is_numeric('hola')){
		echo '"hola" tiene un valor numerico<br>';
	}else {
		echo '"hola" no tiene un valor numerico<br>';
	}
	// conversion de cadenas de flotantes a enteros
	$a = 23456.789;
	//anteponiendo a la variable $a lo siguiente (int), estasmos convirtiendo a entero
	$int_cast = (int)$a;
	echo $int_cast.'<br>';
	//-------------------------------------------
	//de igual amnera se esat convirtiendo una cadena de textoa  entero
	$b = "23456.789";
	$int_cast = (int)$b;
	echo $int_cast.'<br>';

