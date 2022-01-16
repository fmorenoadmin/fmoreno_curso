<?php
	/*
	MKtime es una funciona de php que devuelve la marca de tiempo de UNIX para una fecha la cual contiene el numero de segundos entre la epoca de UNIX(1 enero de 1970 a las  00:00:00 GMT) y la hora especificada 
	sintaxis:
	mktime( hora, minuto, segundo, mes, dia, año);
	*/
	$d = mktime( 14, 50, 20, 3, 18, 2003);
	echo "mi fecha es : ".date('Y-m-d h:i:s a',$d).'<br>';
	echo "mi fecha es : ".date('Y-m-d H:i:s',$d).'<br>';
	echo "mi fecha es : ".date('Y-m-d H',$d).'<br>';
	echo "mi fecha es : ".date('Y-m-d',$d).'<br>';