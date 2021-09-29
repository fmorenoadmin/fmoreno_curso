<?php
	session_start();
	$rut ='../';//accedo a mi carpeta raiz
	$pagina ='Lista de Productos';//El nombre de la vista en la cual te encuentras
	$action ='productos.php';//El archivo de accion al que va apuntar o se va a dirigir
	require_once($rut.'0code.php');//esta requiriendo a 0code.php que se encuentra en la raiz y que al mismo tiempo esta requiereiendo a constat.php
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?= $pagina.TIT; ?></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/c1583151af.js" crossorigin="anonymous"></script>
	<?php
		require_once($rut.'0mens.php');
	?>
</head>
<body>
	<div class="container pt-4 mt-4">
		<div class="row pt-4 mt-4">
			<?php
				if (isset($_SESSION['result'])){
					echo '<div class="col-sm-12">';
						switch ($_SESSION['result']) {
							case 1:
								echo '<div class="alert alert-success" role="alert">'.$_sms.'</div>';
							break;
							case 2:
								echo '<div class="alert alert-warning" role="alert">'.$_sms.'</div>';
							break;
							default:
								echo '<div class="alert alert-danger" role="alert">'.$_sms.'</div>';
							break;
						}
					echo '</div>';
				}
			?>
			<div class="col-sm-12 row">
				<div class="col-sm-4"></div>
				<div class="col-sm-4">
					<h3><?= $pagina; ?></h3>
				</div>
				<div class="col-sm-4 text-right">
					<a href="nuevo/" class="btn btn-success"><i class="fas fa-plus"></i></a>
				</div>
			</div>
			<div id="div1" class="col-sm-12">
				<table class="table datatable table-hover table-bordered">
				</table>
			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.js" integrity="sha256-DrT5NfxfbHvMHux31Lkhxg42LY6of8TaYyK50jnxRnM=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>
</html>
<?php
	unset($_SESSION['Mysqli_Error']);
	unset($_SESSION['result']);
?>