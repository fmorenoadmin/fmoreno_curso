<?php 
/*
1.- Ejercicio:Corregir
Considera estás desarrollando una web donde trabajas con tipos de motor (suponemos que se trata del tipo de motor de una bomba para mover fluidos). Define una variable $tipoMotor y asígnale valor 3. Los valores posibles son 1, 2, 3, 4. A través de un condicional switch haz lo siguiente:

a) Si el tipo de motor es 0, mostrar un mensaje indicando “No hay establecido un valor definido para el tipo de bomba”.

b) Si el tipo de motor es 1, mostrar un mensaje indicando “La bomba es una bomba de agua”.

c) Si el tipo de motor es 2, mostrar un mensaje indicando “La bomba es una bomba de gasolina”.

d) Si el tipo de motor es 3, mostrar un mensaje indicando “La bomba es una bomba de hormigón”.

e) Si el tipo de motor es 4,mostrar un mensaje indicando “La bomba es una bomba de pasta alimenticia”.

f) Si no se cumple ninguno de los valores anteriores mostrar el mensaje “No existe un valor válido para tipo de bomba”.
*/ 
$tipoMotor = 3;
switch($tipoMotor){
	case 0:
		echo "No hay establecido un valor definido para el tipo de bomba";
	break;
	case 1:
		echo "La bomba es una bomba de agua";
	break;
	case 2:
		echo "La bomba es una bomba de gasolina";
	break;
	case 3:
		echo "La bomba es una bomba de hormigón";
	break;
	case 4:
		echo "La bomba es una bomba de pasta alimenticia";
	break;
	default:
		echo "No existe un valor válido para tipo de bomba";
	break;
}
/*
2.- Ejercicio:
Evalua el valor de $mes, y segun el valor sea 1,2,10 o otro(default) muestra en pantalla el mes.
*/
echo '<br>';
//$mes = rand(1,10);
$mes = 1;
switch ($mes){
	case '1':
		echo 'enero';
	break;
	case '2':
		echo 'febrero';
	break;
	case '3':
		echo 'marzo';
	break;
	case '4':
		echo 'mayo';
	break;
	case '5':
		echo 'febrero';
	break;
	case '6':
		echo 'junio';
	break;
	case '7':
		echo 'julio';
	break;
	case '8':
		echo 'agosto';
	break;
	case '9':
		echo 'setiembre';
	break;
	case '10':
		echo 'Octubre';
	break;
	case '11':
		echo 'Noviembre';
	break;
	case '12':
		echo 'Diciembre';
	break;
	default:
		echo 'no se en que mes estoy';
	break;
}


/*
3.- Ejercicio: Corregir
Nuestro jefe de proyectos nos ha pedido que desarrollemos un pequeño script para redireccionar las páginas según su url. Para esto nos especifica que tendremos disponible una variable llamada $controlador con el nombre de la página. También nos dice que los posibles valores de esta variable pueden ser:

contacto
inicio
blog
empleados
quienes-somos
sitemap

Para la primera versión de este redireccionador tan solo nos piden que mostremos un mensaje avisando del controlador seleccionado.
*/
echo '<br>';
$controlador = 'contacto';
switch($controlador){
	case 'contacto':
		echo 'contacto';
	break;
	case 'inicio':
		echo 'inicio';
	break;
	case 'blog':
		echo 'blog';
	break;
	case 'empleados':
		echo 'empleados';
	break;
	case 'quienes-somos':
		echo 'quienes-somos';
	break;
	case 'sitemap':
		echo 'sitemap';
	break;
}
?>