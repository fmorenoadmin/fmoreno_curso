<?php 
	declare(strict_types=1);//obliga a que las cosas se utilican de manera prevista, esta pidiendo que sea estricto para el caso
/*
	function nombre(){
		return val;
	}
	function nombre(parameter1, parameter2, parameter3, ........){
		return val;
	}
*/
	function holamundo(){
		echo 'hola mundo<br>';
	}
	holamundo(); //llamo a la funcion
	//funcion que no retorna nada

	//---------------------------------

	//parametros o argumentos, funcion que los va a recibir, los parametros son variables a la hoar de recibirlos, para enviarlos peude ser un dato tmb numerico o array o cualquier otro tipo de dato.
	//pero a la hora de recivirlos siempre deben ser variables

	function mifamilia($nombre,$apellido,$edad=0){
		echo $nombre.', '.$apellido.'. Edad: '.$edad.'<br>';
	}
	mifamilia('Gean','Gutierrez');
	mifamilia('Sara','Roque');
	mifamilia('Fabian','Gutierrez');
	mifamilia('Marcelo','Gutierrez', 16);
	mifamilia('Lelis','Roque');
	mifamilia('Paola','Roque');
	mifamilia('Toño','Roque');
	//abajo envio un texto y arriba lo recibe como variable
	//tmb le peude asiganr unv alor por defectoa  ala variable y se mantendra asi a menos que tu lo cambies 

	//---------------------------------

	function suma(int $a, $b){//se esta asegurando de que sea entero
		return $a . $b;
	}
	echo suma(5, '5');
	echo '<br>';
	echo suma(5, "5");
	echo '<br>';
	//---------------------------------
	//no se psuede duplicar el nombre de uan funcion dentro de un archivo, sale error
	function suma2(int $a, int $b){
		return $a + $b;
	}
	echo suma2(5, 5);
	echo '<br>';
	echo suma2(5, 5);
	echo '<br>';

	//---------------------------------

	function suma3(float $a, float $b){//tipo de dato decimal
		return (int)($a + $b);//obligamos a qe retorne entero
	}
	echo suma3(2.5,3.8);

	//---------------------------------
	/*
		Lo que estamos asiendo aqui lleva como titulo: pasar argumentos por referencia, argumentos = parametros, los argumentos generalmente se pasan por valor, lo que significa que se usa una copia del valor en al funcion y la variable que se paso a la funcion no se puede cambiar. 
		Cuando un argumento de funcion se pasa por referencia los cambios en el argumento tmb cambian la variable que le paso 
	*/
	function add0($valor){
		$valor += 5;
	}
	$num = 2;
	echo add0($num);
	echo '<br>';
	echo $num;
	echo '<br>';

	function add5(&$valor){ // $valor es $num 
		$valor += 5;
	}
	$num = 2;
	add5($num);
	echo '<br>';	
	echo $num;

	//---------------------------------
	