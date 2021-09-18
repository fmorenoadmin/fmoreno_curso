<?php 
	/*
	switch(n){
		case var1:
			codigo que se ejecutara si n = var1;
		break;
		case var2:
			codigo que se ejecutra si n = var2;
		break;
		case var3:
			codigo que se ejecutrar si n = var3;
		break;
		...
		default:
			codigo que se ejecutara si n no es igual a ninguno de los casos anteriores;
		break;
	}
	*/

	$color = 'rojo';
	$n = rand(0,5);
	switch($color){
		case "amarillo":
			echo 'tu color favorito es amarillo<br>';
		break;
		case "verde":
			echo 'tu color favortio es verde<br>';
		break;
		case "rojo":
			echo 'tu color favorito es rojo<br>';
		break;
		case "azul":
			echo 'Tu color favorito es azul<br>';
		break;
		default:
			echo 'No has escogido ningun color<br>';
		break;
	}
	switch($n){
		case 1:
			echo 'Tu numero de la suerte es 1<br>';
		break;
		case 2:
			echo 'Tu numero de la suerte es 2<br>';
		break;
		case 3:
			echo 'Tu numero de la suerte es 3<br>';
		break;
		case 4:
			echo 'Tu numero de la suerte es 4<br>';
		break;
		case 5:
			echo 'Tu numero de la suerte es 5<br>';
		break;
		default:
			echo 'No a salido ningun numero de la suerte<br>';
		break;
	}
?>