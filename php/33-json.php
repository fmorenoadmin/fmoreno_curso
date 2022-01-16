<?php 
	/*
	dado que el formato JSON es un formato basado en texto, puede ser enviado facilmente hacia un servidor y usarse como formato de datos por cuaqluier lenguaje de programacion.
	php tiene funciones integradas apra el manejo de JSON:
		json_encode(); sirve para codificar a JSOn un arreglo o un objeto, osea de un arreglo lo pasa a un json
		json_decode(); sirve para decodificar un JSON a un objeto o arreglo
	*/
	$json = '{"nombre":"Macelo","apellido":"Gutierrez","edad":18,"hobby":"dibujar"}';//"titulo":"valor"
	var_dump(json_decode($json));
	