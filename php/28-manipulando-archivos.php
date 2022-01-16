<?php 
 	/*
	hay que tener en cuena lo siguiente:
	el manejo de archivos es uan parte improtante de cualqueir aplicacion web. amenudo es necesario abrir y procesar un archivo de diferentes tareas.
	php tiene varias funciones las cuales se utilizan para:
	-crear
	-leer
	-cargar
	-editar
 	*/
 	echo readfile("mi-archivo.txt");//al final aparece unos numeros que son al cantidad de letras en el archivo - LEER ARCHIVO
 	echo '<br>';
 	// abrir archivo
 	/*
		Modo de apertura:
		r	=>	Abrir como solo rectura
		w 	=>  Se abre como solo escritura.Esta accion borrara el contenidod el archivo o creara un archivo si este no existe, sobreescribo el archivo, reemplaza
		a 	=>	Abre un archivo solo para escritura se conservan los datos existntes en el archivo. El puntero de archivo comienza al fianl del mismo.Crear u neuvo archivo si no existe, agrega
		x 	=>	Crea un neuvo archivo solo para esritura. Devuelve false y un error si el archivo ya existe, si existe devuelve un error y si no crea un archivo
		r+  =>  Abre un archivo como lectura/escritura. el puntero del archivo comienza al principio del mismo
		w+	=>	Abre un archivo como lectura/escritura. el puntero del archivo comienza al principio del mismo, el contenido del archivo es reemplazado
		a+  =>  abre un archivo como lectura/escritura. los datos en el archivo existente son conservados, el puntero del archivo comienza al final del mismo. crea un archivo si este noe xiste, lo mismo que a
		x+  =>  Crea un nuevo archivo como lectura/esritura devuelve false y un error si ya existe, igual que x, loq ue tiene + se abren como lectura escritura, loq ue no tiene + se habre solo de escritura o solo lectura
 	*/
	//r
 	$myfile = fopen("mi-archivo.txt","r") or die("no se encontro el archivo");
 	echo fread($myfile,filesize("mi-archivo.txt"));
 	fclose($myfile);
 	//w
 	/*$myfile = fopen("mi-archivo2.txt","w");
 	fwrite($myfile, "hola mundo\n");
 	fwrite($myfile, "soy Marcelo\n");
 	fclose($myfile);*/
 	//a
 	/*
 	$myfile = fopen("mi-archivo2.txt","a");
 	fwrite($myfile, "no quiero\n");
 	fwrite($myfile, "estudiar\n");
 	fclose($myfile);
 	*/
 	//x
 	/*
 	$myfile = fopen("mi-archivo3.txt","x");
 	fwrite($myfile, "valor");
 	fclose($myfile);*/
 	//r+
 	/*$myfile = fopen("mi-archivo3.txt","r+");
 	fwrite($myfile, "este es un ");
 	fclose($myfile);*/
 	//w+
 	/*$myfile = fopen("mi-archivo3.txt","w+");
 	fwrite($myfile, "este es un texto de prueba.\nEsperemos que no se borre");
 	fclose($myfile);*/
	/*
		fgets esta funcion se utilza para leer una sola linea de un archivo 
	*/
	$myfile = fopen("mi-archivo.txt", "r");
	echo '<br>'.fgets($myfile);
	fclose($myfile);
	/*
		feof esta funcion comprueba si se a alcanzadoe l finald e un archivo (EOF). asu ves es muy util. par poder recorrer datos de uin archivos co longiud desconocida
	*/
	echo '<br>';
	$myfile = fopen("mi-archivo.txt","r");
	while(!feof($myfile)){
		echo fgets($myfile).'<br>';
	}//mientras recorre va ahcendo gets
	fclose($myfile);