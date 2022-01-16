<?php
	session_start();
	/*
	Una cookie se usa para poder identificar a un usuario. Una coockies es un pequeñoa rchivo que el servidor incrusta en la computadora del usuario. Cada ves que la misma computadora solicita una pagina con un navegador, tmb enviara la cookie, con php se puede crear y recuperar los valores de cookies 

	setcookie(nombre de la cookie, el valor de la cookie, cuanto tiempo expira la cookie,ruta, dominio, seguridad, http online);
	*/
	$cookie_name = "usuario";
	$cookie_value = "Marcelo";
	setcookie($cookie_name, $cookie_value, time()+(86400*5), "/");
	//
	if(isset($_COOKIE[$cookie_name])){
		echo "la cookie '".$cookie_name."' si existe <br>";
		echo "y su valor es:".$_COOKIE[$cookie_name];
	}else{
		echo "La cooki '".$cookie_name."' no existe";
	}
	echo '<br>';
	print_r($_COOKIE);
	echo '<br>';
	print_r($_SESSION);