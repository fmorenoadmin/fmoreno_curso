<?php 
/*
1.- Ejercicio: Corregir
La función date() con el parametro 'D' nos devuelve las tres primeras letras del día de la semana en inglés: Mon, Tue, Wed, Thu, Fri, Sat, Sun.
Con este pequeño código $dia_ingles = date('D'); tendremos el día en la variable $dia_ingles.
Mostrar el día en español por pantalla con el mensaje: "El día de la semana es: XXXX".
2.- Ejercicio:
Realizar el ejercicio anterior pero mostrando el día de la semana de lunes a viernes, y para sábado y domingo mostrar el mensaje: Fin de semana
*/
$dia_ingles = date('D');
//echo $dia_ingles;
//= es para asignar un valora, == es para comparar 
if( $dia_ingles == 'Mon'){
	echo 'El día de la semana es: Lunes';
}elseif( $dia_ingles == 'Tue'){
	echo 'El día de la semana es: Martes';	
}elseif( $dia_ingles == 'Wed'){
	echo 'El día de la semana es: Miercoles';
}elseif( $dia_ingles == 'Thu'){
	echo 'El día de la semana es: Jueves';
}elseif( $dia_ingles == 'Fri'){
	echo 'El día de la semana es: Viernes';
}elseif( $dia_ingles == 'Sat'){
	echo 'El día de la semana es: Sabado';	
}else{
	echo 'El día de la semana es: Domingo';			
}

echo '<br>';
if( $dia_ingles == 'Mon'){
	echo 'El día de la semana es: Lunes';
}elseif( $dia_ingles == 'Tue'){
	echo 'El día de la semana es: Martes';	
}elseif( $dia_ingles == 'Wed'){
	echo 'El día de la semana es: Miercoles';
}elseif( $dia_ingles == 'Thu'){
	echo 'El día de la semana es: Jueves';
}elseif( $dia_ingles == 'Fri'){
	echo 'El día de la semana es: Viernes';
}else{
	echo 'Fin de semana';			
}
echo '<br>';
/*
3.- Ejercicio:
La tienda online tienda.srcodigofuente.es quiere realizar una mejora en el código de su web. Necesita que la web, según el importe de la cesta, muestre un mensaje u otro al usuario. En concreto quiere que:

Si la compra es inferior a 30 euros se le muestre un mensaje en negrita diciendo: 'Compra más o te cobraremos los abusivos 30 euros de gastos de envío'.
Si la compra es superior a 30 euros pero inferior a 90 deberemos mostrar un número indicando cuanto le falta para llegar a 90 euros y tener gastos de envío gratuitos. Ejemplo: '¡¡¡Con solo 33.50€ más podrás tener gastos de envío gratis!!!'
Si la compra alcanza los 90€ indicaremos un mensaje en negrita: 'Gastos de envío incluidos'.

Para este problema disponemos de los siguientes datos:

El importe total de la cesta de la compra viene en una variable $total_compra con un número decimal positivo. Ejemplo: 33.55.
Los mensajes en negrita deben utilizar la etiqueta <strong><\strong> 
*/
$total_compra = 123.55;

$resta = 90 - $total_compra;
if($total_compra < 30){
	echo '<strong>Compra más o te cobraremos los abusivos 30 euros de gastos de envío<\strong>';
}else if($total_compra > 30 && $total_compra < 90){
	echo '<strong>¡¡¡Con solo '.$resta.'€ más podrás tener gastos de envío gratis!!!<\strong>';
}else{
	echo '<strong> Gastos de envío incluidos <\strong>';
}	
?>