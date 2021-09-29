<?php 

/*En una tienda efectúan un descuento a los clientes dependiendo del monto de compra. El descuento se efectúa con base en el siguiente criterio:

- Si el monto es menor que $500
       no hay descuento.
- Si el monto es menor está comprendido entre $500 y $1000
      

realizar  5% de descuento.
- Si el monto está comprendido entre $1000 y $7000
      

realizar  11% de descuento.
- Si el monto está comprendido entre $7000 y $15000      
realizar 18% de descuento.
- Si el Monto es mayor a $15000
      realizar 25% de descuento.


Construya un programa que dado el costo de la Compra, calcule el descuento y también el total a pagar.*/
$x = 10000;

if($x < 500){
	echo $x;
}elseif($x > 500 && $x < 1000){
	echo $x + ($x * 5)/100;
}elseif($x > 1000 && $x < 7000){
	echo $x + ($x * 11)/100;
}elseif($x > 7000 && $x < 1000){
	echo $x + ($x * 18)/100;
}else{
	echo $x + ($x * 25)/100;
}
?>