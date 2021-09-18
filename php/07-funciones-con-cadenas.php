<?php
	//funcion que retorna el largo de una cadena, funcion interna de php por eso lo de 'con cadenas'
	echo strlen("Mi nombre es Marcelo")."<br>";
	//-----------------------------
	//funcion que cuenta el numero de palabras en una cadena
	echo str_word_count("Mi nombre es Marcelo y mi apellido es Gutierrez")."<br>";
	//-----------------------------
	//funcion que invierte una cadena
	echo strrev("Mi nombre es Marcelo")."<br>";
	//-----------------------------
	//funcion que busca un texto en especifico dentro de una cadena. Si se encentra una coincidencia la funcion devolvera la posicion del caracter de la primra conincidencia (en cantidad de digitos), si no se encuentra ninguna coincidencia devolvera false, cuenta los espacios como caracteres
	echo strpos("Mi nombre es Marcelo","Mar")."<br>";//texto donde buscar, palabra o texto especifico a buscar
	//-----------------------------
	//funcion que reemplaza una o mas coincidencias dentro de la cadena de acuerdo a un texto buscado
	echo str_replace("Marcelo","Frank","Mi nombre es Marcelo");//palabra a buscar, palabra por cual reenplzar, texto o cadena
	