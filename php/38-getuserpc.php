<?php 
	session_start();
	//Es una extension, esuna extension de php parecido a un plugin, los filtros de php tienen muchas funciones necesarias para verificar los datos que el usuarios ingresa y esta diseñada para que la validacion de estos datos sea mas facil y mas rapida.
	//filter_list(); es un arreglo+
	$rut = '../';
	$action = '';
	$pagina = 'Filtros';
	require_once($rut.'0code.php');
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?= $pagina.TIT ?></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/c1583151af.js" crossorigin="anonymous"></script>
	<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
</head>
<body>
 	<div class="container pt-4 pb-4">
 		<div class="row pt-4 pb-4">
 			<div class="col-sm-12">
 				<?php
					// PHP code to get the user address of Client
					$username = shell_exec("wmic computersystem get username");
					//-------------
					echo "El nombre de usuario es: ".$username;
 				?>
 			</div>
 		</div>
 	</div>

 	<script src="https://code.jquery.com/jquery-3.5.1.slim.js" integrity="sha256-DrT5NfxfbHvMHux31Lkhxg42LY6of8TaYyK50jnxRnM=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>
</html>