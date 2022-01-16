<?php 
	/*
	Una funcion de devolucion de llamda(callback) es una funcion que se pasa como argumento(paramtro) a otra funcion.
	cualquier funcion existente se puede pasar como funcion callback. Para usar una funcion como callback pase una cadena que contenga el nombre de la funcion como argumento de otra funcion
	*/

	function my_callback($item){
		return strlen($item);
	}
	$string = array('manzana','pera','piña','mango','papaya','melon');
	$largos = array_map("my_callback", $string);
	//creando un arreglod e tipo mapa especificamente este se usa para ahcer llamdo a funciones callback ("nombre de la funcion", el arreglo)
	echo '<pre>';
	print_r($largos);
	echo '</pre>';
	//se esta invocando a multiples llamdas una sola ves
	//esta formad e llamar a un callback fue implementada en al version 5 de php apartir de la v7 hacia arriba se pueden pasar funciones anonimas como funciones callback
	//funciones anonimas, por que not iene nombre
	$largos2 = array_map( function($item){ return strlen($item); }, $string );
	echo '<pre>';
	print_r($largos2);
	echo '</pre>';
	//funciones definidas por el usuario, programador
	function exclam($str){
		return $str.'!<br>';
	}
	function quest($str){
		return $str.'?<br>';
	}
	function printFormat($str, $format){
		echo $format($str);
	}
	//llamado a la funcion 
	printFormat('Hola me llamo Marcelo', 'exclam');
	printFormat('Donde encuentro el baño', 'quest');
?>