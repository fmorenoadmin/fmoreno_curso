<?php 
	//Las condicionales se utilizan para realiza diferentes acciones basadas en diferentes condiciones
	/*
		(if) ejecuta algun codigo si una condicion se cumple
		(else) ejecuta algun codigo si la condicion no se cumple
		(elseif) ejecuta algun codigo si la condicion no se cumple y esta condicion si se cumple
		(switch) selecciona uno de muchos bloques de codigo que se ejecutaran 

		if(condicion){
			el codigo que se ejecutara se ingresara aqui
		}

		if(condicion){	
			codigo...	
		}else{
			codigo...
		}

		if(condicion){
			codigo...
		}elseif(condicion2){
			codigo...
		}else{
			codigo...
		}
	*/

	$x = date("H");
	echo $x.'<br>';
	if($x >= 20){
		echo 'Son mas de las 8pm<br>';
	}

	if ($x < 20) {
		echo 'Todavia es de dia<br>';
	}else{
		echo 'Ya es de noche<br>';
	}

	if ($x < 12) {
		echo 'Mañana<br>';
	}elseif($x >= 12 && $x <= 18 ){
		echo 'Tarde<br>';
	}else{
		echo 'noche';
	}
?>