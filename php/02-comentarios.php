<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Comentarios</title>
</head>
<body>
	<?php 
		// Este es un comentario simple
		# Este es un comentario alterno
		/* 
		Este es un comentario multilinea
		*/

		//Esta es una forma de comentar contenido dentro de una instruccion PHP  
		$x = 0;
		$x = 5 /*+ 15*/ + 5;
		#$x = 5 //+ 15 + 5; Esto dará error de sintaxis
		echo $x;
	?>
</body>
</html>