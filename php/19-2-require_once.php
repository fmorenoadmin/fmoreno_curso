<?php
	//funcion interna de php que me permite requerir de amnera obligatoria un archivo(una sola vez), externo al cual estoy trabajando siempre y cuando se enceuntre dentro de mi directorio principal, PARA SOLO UN USO 
	require_once('../constant.php');
	echo TIT;
	echo '<br>';
	//tener en cuenta lo siguigiente: si el archivo requerido no se encuentra php retornara un error indicando que nos e encotnro el archivo requerido
	require_once('../constant.php');
	echo HTTP;