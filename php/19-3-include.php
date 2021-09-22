<?php
	//funcion interna de php que me permite INCLUIR un archivo externo al cual estoy trabajando siempre y cuando se enceuntre dentro de mi directorio principal
	include('../a.json');//esribira todo el archivo

	//tener en cuenta lo siguigiente: si el archivo incluido no se encuentra php no retornara un error indicando que nos e encotnro el archivo, solo una alerta
	
	include('../a1.json');

	//require va a ser usado apra llamar archivos y el include para incluir archivos dentro del archivo actual