<?php
	//Las constantes son como si fueran variables, execpto que una ves definidas no se pueden cambiar ni dejar de definir
	//define('NOMBRE', 'VALOR');
	define('TIT', ' | Cusro Fmoreno - PHP');
	//define('TIT', 'Cusro Fmoreno - PHP'); no se puede duplicar el nombre de una constante 
	define('HTTP', 'http://');//http:// lo vas a usar para local
	//define('HTTP', 'https://');//https:// lo vas a usar cuando tu págian cuente con SSL y este en un servisor
	define('URL', HTTP.'localhost/cusro_fmoreno/php/');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Constantes<?= TIT; ?></title>
</head>
<body>
	<nav>
		<ul>
			<li><a href="<?= URL; ?>">Lista</a></li>
		</ul>
	</nav>
</body>
</html>