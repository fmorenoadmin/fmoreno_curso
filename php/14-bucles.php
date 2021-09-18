<?php 
	/*
	Muchas veces cuando se escribe codigo, se desea que el mismo bloque de codigo se ejecute una y otra ves una cierta cantidad de veces. 
	Entonces en vez de agregar varias lienas de codigo iguales, podemos utilizar los bucles.
	Los bucles repiten el mismo codigo una y otra ves siempre y cuando se cumplan una determinada condicion. 

	Tipos de bucles:
	
	1.- While: recorre un bloque de codigo siempre y cuando la condicion especificada sea verdadera. 

		while(condicion){
			codigo que se ejecutara;
		}

	2.- Do while: recorre un bloque de codigo 1 ves y luego repite el bucle siempre y cuando la condicion especificada sea verdadera.}

		Do {
			codigo que se ejecutara;
		}while(condicion);

	3.- For: recorre un bucle de codigo un numero especifico de veces.

		for(contador incial; condicional; incrementador){
			codigo que se ejecutara;
		}

	4.- Foreach: recorre un bloque de codigo para cada elemento de una matriz.

		foreach($array as $valor){
			codigo que se ejecutara;
		}


		foreach($array as $key => $valor){
			codigo que se ejecutara;
		}
		Todos los arreglos tienen una key(llave unica) esta key puede ser definida por el usuario o puede ser no definida por el usuario y es automaticamente asumida por php ejemplo:
		$a = array("key"=>"valor")
		$a = array("valor") cuando el usuario no define la key php automaticamente le define como key 0 al primer valor y se incrementa en 1 para cada valor siguiente.
	*/

	$n = 1;
	$a = 0;
	$array = array('hola','adios','holas', 'holas1', 'holas2', 'holas3', 'holas4', 'holas5', 'holas6', 'holas7', 'holas8', 'holas9', 'holas10', 'holas11', 'holas12', 'holas13', 'holas14', 'holas15', 'holas16', 'holas17');
	$n1 = 1;

	//mostrar en pantalla los numeros del 1 al 10 

	while($n < 11){
		echo 'numero: '.$n.'<br>';
		$n++;//se utiliza mas el post
	}

	while($a < 20){
		echo 'texto['.$a.']: '.$array[$a].'<br>';
		$a++;	
	}

	//mostrar en pantalla los numeros del 1 al 10
	do {
		echo 'numero: '.$n1.'<br>';
		$n1++;
	}while($n1 < 11);

	$a = 0;

	do{
		echo 'texto['.$a.']: '.$array[$a].'<br>';
		$a++; 
	}while($a < 20);

	//mostrar en pantalla los numeros del 1 al 10

	for($x = 1; $x <= 10; $x++){
		echo 'numero: ' .$x. '<br>';
	}

	for($a = 0; $a < 20; $a++){
		echo 'Texto['.$a.']: '.$array[$a].'<br>';
	}

	//mostrar en pantalla los numeros del 1 al 10
	
	foreach($array as $key => $value){
		echo 'Texto['.$key.']: '.$value.'<br>';
	} // esta bien pero si ya tiene una key y un value no es necesario que coloques $array[$key], en ves de ello simplemente se utiliza $value 
	foreach($array as $value){
		echo 'Valor: '.$value.'<br>';
	}
?>