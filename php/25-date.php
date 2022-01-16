<?php
	/*
	la funcion date se utiliza para formataer una fecha y/o hora, muestra un formato de fecha o aplica un formato de fecha a lso valores ingresados dentro de la funcion, dichos valores ya estan establecidos por php.
	esta devuelve una cadena formateada segun el formato brindado usando el parametro de tipo int(entero) timeStamp dado o el momento actual si no se da una marca de tiempo 

	date(string FORMATO, int TIMESTAMP[opcional];
	*/
	echo date('Y');//devulve el año actual en formato YYYY, de 4 digitos
	echo '<br>';
	echo date('d');//devuelve el dia actual en formato dd, 2 digitos del 01 a 31
	echo '<br>';
	echo date('D');//devuelve una representacion textual de un dia, 3 letras en ingles, de mon a sun 
	echo '<br>';
	echo date('l');//devuelve una reopresentacon textual de un dia en ingles de sunday a saturday 
	echo '<br>';
	echo date('N');//devuelve una representacion numerica ISO-8601 del dia de la semana, 1 para lunes hasta 7 para domingo
	echo '<br>';
	echo date('S');//es un sufijo ordinal ingles para el dia del mes, 2 caracteres 
	echo '<br>';
	echo date('w');//representacion numerica del dia de la semana conmienza con 1 para lines y 7 para domingo
	echo '<br>';
	echo date('z');//Devuelve el dia del año actual desde 0 hasta 365
	echo '<br>';
	echo date('W');//numero de la semana del años ISO-8601, las semanas comienzan en lunes
	echo '<br>';
	echo date('F');//devuelve una representacion textual del mes actual, de january a december
	echo '<br>';
	echo date('m');//devulve una representacion numerica del mes actual, del 01 al 12
	echo '<br>';
	echo date('M');//devuelve una representacion textual del mes actual, 3 letras en ingles de jan a dec
	echo '<br>';
	echo date('n');//devuelve una rep´resetnacion numerica del mes actual sin 0s adicionales, del 1 al 12
	echo '<br>';
	echo date('t');//devuelve una representacion numerica de del ultimo dia del mes actual, de 28 hasta 31
	echo '<br>';
	echo date('L');//devuelve un 0 si no es un año bisiesto y 1 si es un año bisiesto
	echo '<br>';
	echo date('o');//devuelve el año actual, segun el numerode la semana ISO-8601. Tiene el mismo valor que Y, execto que el numero de la semana ISO(w) pertenece al año anterior o siguiente, se usa ese año en su lugar
	echo '<br>';
	echo date('y');// devuelve una representacion de 2 digitos del año actual, YY
	echo '<br>';
	echo date('a');// devuelve una representacion textual de 2 caracteres de (am y pm)
	echo '<br>';
	echo date('A');//lo mismo pero en mayuscula
	echo '<br>';
	echo date('B');//devuelve un numero con la hora de internet 000 hasta 999
	echo '<br>';
	echo date('g');//devuelve un formato de 12 horas sin 0 iniciales, de 1 a 12
	echo '<br>';
	echo date('G');//devuelve un fomato de 24 horas sin 0 iniciales, de 0 a 23
	echo '<br>';
	echo date('h');//devuelve un formato de 12 horas con 0 iniciales, de 01 a 12
	echo '<br>';
	echo date('H');//devuelve un fomato de 24 horas con 0 iniciales, de 00 a 23
	echo '<br>';
	echo date('i');//devuelve un formato 2 digitos del minutos con 0s iniciales, de 00 a 59
	echo '<br>';
	echo date('s');//devuevle un formato de 2 digitos del segundo con 0s iniciales de 00 hasta 59
	echo '<br>';
	echo date('u');//devuelve un formato de 6 digitos 000000 siempre ya que toma un parametro de tipo Integer o Int *
	echo '<br>';
	echo date('v');//similar solo que este son 3 digitos
	echo '<br>';
	echo date('e');//devulve el identificador de la zona horaria en la que se encuentra configurado php.ini
	echo '<br>';
	echo date('I');//devolvera 1 si la fecha esta en horario de verano(estacion) y 0 si no lo esta 
	echo '<br>';
	echo date('O');//devuelve la diferencia horaria de greenwich(gmt) sin colon entre horas y minutos
	echo '<br>';
	echo date('P');//lo mismo pero tiene un 2 puntos entre las hroas y los minutos
	echo '<br>';
	echo date('T');//los mimos pero solo devuelve 2 digitos o abreviatura
	echo '<br>';
	echo date('Z');//devuelve el indice de al zona horaraia en segundos. el indice para zonas horarias al oeste de UTC es siempre negativa y para este de UTC es siempre positivo 
	echo '<br>';
	echo date('c');//devuelve la fecha completa pero en formato ISO-8601
	echo '<br>';
	echo date('r');//lo mismo pero en ingles y en formato RFC2822
	echo '<br>';
	echo date('U');//devuelve los segundos desde la epoca Unix (1 de Enero del 1970 00:00:00 GMT)
	echo '<br>';
	echo '<br>';
	echo '<br>';
	echo '<br>';
	//YYYY-MM-DD
	echo date('Y'.'-'.'m'.'-'.'d');
	echo '<br>';
	echo date('Y-m-d');
	echo '<br>';
	//YYYY/MM/DD
	echo date('Y'.'/'.'m'.'/'.'d');
	echo '<br>';
	echo date('Y/m/d');
	echo '<br>';
	//DD/MM/YYYY
	echo date('d'.'/'.'m'.'/'.'Y');
	echo '<br>';
	echo date('d/m/Y');
	echo '<br>';
	//DD-MM-YYYY
	echo date('d'.'-'.'m'.'-'.'Y');
	echo '<br>';
	echo date('d-m-Y');
	echo '<br>';
	echo '<br>';
	echo date('d-m-Y H:i:s');
	echo '<br>';
	echo date('d/m/Y H:i:s');
	echo '<br>';
	echo date('Y/m/d H:i:s');
	echo '<br>';
	echo date('Y-m-d H:i:s');
	echo '<br>';
	echo '<br>';
	function get_fecha(){
		$fecha = null;
		switch (date('w')) {
			case 1:
				$dia = 'Lunes';
			break;
			case 2:
				$dia = 'Martes';
			break;
			case 3:
				$dia = 'Miercoles';
			break;
			case 4:
				$dia = 'Jueves';
			break;
			case 5:
				$dia = 'Viernes';
			break;
			case 6:
				$dia = 'Sabado';
			break;
			default:
				$dia = 'Domingo';
			break;
		}
		switch (date('n')) {
			case 1:
				$mes = 'Enero';
			break;
			case 2:
				$mes = 'Febrero';
			break;
			case 3:
				$mes = 'Marzo';
			break;
			case 4:
				$mes = 'Abril';
			break;
			case 5:
				$mes = 'Mayo';
			break;
			case 6:
				$mes = 'Junio';
			break;
			case 7:
				$mes = 'Julio';
			break;
			case 8:
				$mes = 'Agosto';
			break;
			case 9:
				$mes = 'Septembre';
			break;
			case 10:
				$mes = 'Octubre';
			break;
			case 11:
				$mes = 'Noviembre';
			break;
			default:
				$mes = 'Diciembre';
			break;
		}
		$fecha = $dia.', '.date('d').' de <br>'.$mes.' de '.date('Y H:i:s');
		return $fecha;
	}
	echo get_fecha();
	echo '<br>';
	echo '<br>';
	setlocale(LC_ALL,"es_PE.UTF-8");//esto funciona en el servidor
	echo strftime("%A, %d de <br> %B de %Y");