<!--Etiqueta normal de PHP-->
<?php
	/*
	Esta etiqueta sirve para poder ingresar una a más lineas de operación de PHP
	mutilinia
	*/
?>
<!--Etiqueta corta de PHP-->
<!--es unilinea. Y se utiliza para imprimir o mostrar resultdos u variables de PHP-->
<?= "Hola Mundo"; ?>
<!--Si tu archivo es PHP y no tiene JS ni HTML ni CSS ni jQuery-->
<?php

	$a=0;

	echo (($a > 0) ? $a : NULL);

	if ($a > 0) {
		echo $a;
	}else{
		echo NULL;
	}

	if ($b > 0) {
		echo $b;
	}else{
		echo NULL;
	}


