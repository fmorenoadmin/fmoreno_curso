<?php
	//funcion interna de php que me permite INCLUIR un archivo externo al cual estoy trabajando siempre y cuando se enceuntre dentro de mi directorio principal
	include_once('../constant.php');//esribira todo el archivo
	echo TIT.'<br>';
	//tener en cuenta lo siguigiente: si el archivo incluido no se encuentra php no retornara un error indicando que nos e encotnro el archivo, solo una alerta
	
	include_once('../constant.php');
	echo HTTP.'<br>';

	