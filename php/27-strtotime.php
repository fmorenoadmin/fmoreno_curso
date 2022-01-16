<?php 
	/*
	strtotime es una funcion de php que se utiliza par aconvertir una cadena de fecha legible por humanos en una marca de tiempo UNIX
	strtotime(tiempo 'string', now); raramente se usa ese now
	*/
	$d = strtotime('5:20 December 12 2008');
	echo 'Mi fecha es: '.date('Y/m/d H:i:s a',$d).'<br>';
	$d = strtotime('Tomorrow');//aqui la variable d su mes apso a valer 0 
	echo 'Mi fecha es: '.date('Y/m/d H:i:s a',$d).'<br>';
	$d = strtotime('next Monday');
	echo 'Mi fecha es: '.date('Y/m/d H:i:s a',$d).'<br>';
	$d = strtotime('+15 Day');//toman la fecha actual y le suman 15 dias
	echo 'Mi fecha es: '.date('Y/m/d H:i:s a',$d).'<br>';
	$d = strtotime('-15 Day');//toman la fecha actual y le restan 15 dias
	echo 'Mi fecha es: '.date('Y/m/d H:i:s a',$d).'<br>';
	$d = strtotime('+3 Month');
	echo 'Mi mes es: '.date('Y/m/d H:i:s a', $d).'<br>';
	$d = strtotime('-5 Month');
	echo 'Mi mes es: '.date('Y/m/d H:i:s a', $d).'<br>';
	$d = strtotime('+8 Year');
	echo 'Mi año es: '.date('Y/m/d H:i:s a',$d).'<br>';
	$d = strtotime('-10 Year');
	echo 'Mi año es: '.date('Y/m/d H:i:s a',$d).'<br>';
	$d = strtotime('December 12');
	echo 'Mi fecha es: '.date('Y/m/d H:i:s a',$d).'<br>';

	//restar 2mese, 5 dias, 8 horas, 15 min
	$d = strtotime('-2 Month, -5 Day, -8 Hour, -15 Minute');
	echo 'Mi fecha es: '.date('Y/m/d H:i:s a',$d).'<br>';