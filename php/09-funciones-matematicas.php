<?php
	//La funcion pi devuelve el valor de pi
	echo pi().'<br>';
	//La funcion min siempre encontrara y mostrara el valor mas pequeño dentro de una serie o arreglo de numero
	$a = array(1,2,3,4,5,-6,-7,-8);
	echo min($a).'<br>';
	//La funcion max siempre encontrara y mostrara el valor mas grande dentro de una serie o arreglo de numero
	echo max($a).'<br>';
	//La funcion abs devuelve el valor adsoluto de un numero (si es negativo pasa a postivo)
	echo abs(-6.7).'<br>';
	//La funcion sqrt devuelve la raiz cuadrada de un numero 
	echo sqrt(64).'<br>';
	//La funcion round hace el redondeo de un valor decimal
	echo round(0.60).'<br>';
	echo round(0.40).'<br>';
	//La funcion rand te devuelve un numero aleatorio
	//si no se le especifica un numero inicial y un numero final, siempre devolvera un numero cualquiera
	echo rand().'<br>';
	echo rand(0,7).'<br>';//devolvera un numero random entre 0 y 7
	