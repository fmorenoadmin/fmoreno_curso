<?php
	//Una matris o arreglo almacena varios valores en una sola variable
	$autos = array('nisan','toyota','porche','bugati','ferrari','logitec');

	echo "a mi me gusta: ".$autos[0].", ".$autos[1].", ".$autos[2].", ".$autos[3].", ".$autos[4].", ".$autos[5];    

	/*
		Una matriz es una variable especial, que puede contener mas de un valor a la ves. 
		si tiene una lista de elementos(una lsita de automobiles, por ejempplo), almacenar los automobiles en variables podria verse de la siguiente manera: 
		$auto1 = 'nisan';
		$auto2 = 'toyota';
		$auto3 = 'porche';
		$auto4 = 'bugati;
		$auto5 = 'ferrari';
		$auto6 = 'logitec;
		sin embargo ¿que pasaria si desearamos recorrer los autos y encontrar un auto en especifico?¿Y si no tuvieras 3 autos o 6 autos sino 300? un arreglo es la respuesta mas practica a tener muchas variables, mejor en un arreglo
		
		un arreglo puede contener muchos valores con un solo nombre y puede acceder a los valores haciendo referencia a su indice o key

		hay 3 tipos de matrisez o arreglos en php: 
			Arreglos indexeados: son arreglos con un indice(key) numerico 
			Arreglos asociativos: son arreglos con claves(key) con nombre
			Arreglos multidimensionales: son arreglos que contienen uno o mas arreglos

		Vamos a ver una funcion que nos permite obtener la cantidad de elementos de un arreglo 
	*/

	echo '<br>';
	echo count($autos);//dice la cantidad de elementos en un array
	echo '<br>';

	//array_push: inserta 1 o mas elementos al final de un arreglo 

	array_push ($autos, 'auto1','auto2');//solo importa el primer parametro para especificar a que array estoy insertando elementos
	echo '<pre>';
	print_r($autos);
	echo '</pre>';
	echo '<br>';


	//array_pop: esta funcion extrae el ultimo del array

	echo $car = array_pop($autos);//muestra cual quite
	echo '<br>';
	echo '<pre>';
	print_r($autos);
	echo '</pre>';
	echo '<br>';

	//array_shift: esta funcion quita 1 elemento del principio del arreglo 
	echo $car = array_shift($autos);
	echo '<br>';
	echo '<pre>';
	print_r($autos);
	echo '</pre>';

	//array_unshift: esta funcion agrega al inicio o al princio de un arreglo uno o mas elementos 

	array_unshift($autos, 'carro7', 'carro8');//puedoa gregar mas de 1
	echo '<br>';
	echo '<pre>';
	print_r($autos);
	echo '</pre>';
	echo '<br>';

	//array_chunk: esta funcion divide un arreglo en fragmentos 
	//Los parametros son los siguientes(arreglo para trabajar, el tamaño de cada fragmento, cuando se establece en true - las llaves[keys] seran preservadas. el valor por defecto es false lo cual reindixara los fragmentos numericamente) fragmentos no en cuantos se separa sino en cuanto va a contener

	$autos2 = $autos;//esto se ahe apra no trabajr con autos por que mas tarde la vamos a necesitar
	$autos3 = $autos;

	echo '<pre>';
	print_r(array_chunk($autos2,2));
	echo '</pre>';
	echo '<br>';
	echo '<pre>';
	print_r(array_chunk($autos3,4,true));
	echo '</pre>';//se peude poner funciones dentro del print_r

	//array_combine: esta funcion crea un arreglo usando los valores del primer arreglo como [keys] y los valores del segundo arreglo como los valores correspondientes

	$c = array_combine($autos2, $autos3);
	echo '<pre>';
	print_r($c);
	echo '</pre>';

	//array_merge: combina los elementos de uno o mas arreglos juntandolos de modo de que los valores de uno se agregan al final del anterior
	//ten en cuenta lo siguiente, si los arreglos de entrada tienen las mismas claves[keys] de tipo strings, el ultimo valor para esa clave sobreescribira el anterior. Sim embargo los arreglos que contengan claves numericas, el ultimo valor no sobreescribiria el valor original, sino que sera añadido al final

	$resultado = array_merge($autos2, $autos3,$c);
	echo '<pre>';
	print_r($resultado);
	echo '</pre>';

	//array_search: busca un valor determinado en un arreglo y devuelve la primera clave correspondiente en caso de exito 

	echo '<br>';
	echo $clave = array_search('ferrari',$resultado);
	echo '<br>';
	echo $clave = array_search('toyota', $resultado);

	//in_array: esta funcion comprueba si un valor existe en un arreglo , este me dice el valor

	if(in_array('carro10',$resultado)){
		echo '<br>';
		echo 'si existe carro 10 en el arreglo';//no existe
	}
	if(in_array('porche', $resultado)){
		echo '<br>';
		echo 'si existe porche en el arreglo';
	}

	//array_key_exists: esta funcion verifica si el indice o clave[key] dada existe en el arreglo , este me dice el key

	if(array_key_exists('carro8', $resultado)){
		echo '<br>';
		echo 'si existe el carro8 dentro del array';
	} 
	if(array_key_exists('carro10',$resultado)){
		echo '<br>';
		echo 'si existe carro10 en el array';//no existe
	}

	//Los arreglos asociativos son matricez que utlizan claves con nombres/valores que se les asignan: ejemplo ; primero es la key y luego el valor
	$edad = array("Gean" => 38, "Sara" => 36, "Marcelo" => 18, "Fabian" => 13);
	//segunda forma:
	$edad2["Gean"] = 38;
	$edad2["Sara"] = 36;
	$edad2["Marcelo"] = 18;
	$edad2["Fabian"] = 13;
	
	echo '<br>';
	echo $edad["Gean"];
	echo '<br>';
	echo $edad2["Sara"]; //sacar un valor de un arreglo
	echo '<br>';

	//leugo todo es muy similar

	//Arreglo multidimenciona, marca, modelo,cantidad, stokc, precio

	$_autos = array(
		array('nisan','ak-47',4,400, 29000),
		array('toyota','1.0',1,200, 50000),
		array('porche','2.0',2,100, 30000),
		array('logitec','dust2',1,50, 310000),
		array('asus','bind',5,25,27000)
	);
	echo '<pre>';
	print_r($_autos);
	echo '</pre>';

	//ejercicio accede al stock del auto marca porche
	echo $_autos[2][3];
	//ejercicio muestra el subtotal del auto asus-precio*cantidad
	$a_p = $_autos[4][4];
	$a_c = $_autos[4][2];
	echo '<br>';
	echo $a_p * $a_c;