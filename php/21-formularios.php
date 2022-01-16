<?php
	session_start();
	$rut ='../';//accedo a mi carpeta raiz
	$pagina ='Formularios';//El nombre de la vista en la cual te encuentras
	$action ='21_formularios.php';//El archivo de accion al que va apuntar o se va a dirigir
	require_once($rut.'0code.php');//esta requiriendo a 0code.php que se encuentra en la raiz y que al mismo tiempo esta requiereiendo a constat.php
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?= $pagina.TIT; ?></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<?php
		require_once($rut.'0mens.php');
	?>
</head>
<body>
	<?php 
	//Las variables super globals de php: $_GET $_POST $_REQUEST se utilizan para recopilar datos de los formularios
	?>
	<div class="container pt-4 mt-4">
		<div class="row pt-4 mt-4">
			<div class="col-sm-4 offset-sm-4">
				<form class="card row" method="POST" enctype="multipart/form-data" action="<?= ACTI.$action; ?>">
					<div class="card-header">
						<h2 class="card-title">HOLA</h2>
					</div>
					<div class="card-body">
						<div class="form-group">
							<label class="form-control-label">Ingresa tu nombres</label>
							<input type="text" name="nombres" class="form-control" required="required">
						</div>
						<div class="form-group">
							<label class="form-control-label">Ingresa tu apellidos</label>
							<input type="text" name="apellidos" class="form-control" required="required">
						</div>
						<div class="form-group">
							<label class="form-control-label">Ingresa tu telefono</label>
							<input type="tel" name="telefono" class="form-control">
						</div>
						<div class="form-group">
							<label class="form-control-label">Ingresa tu correo</label>
							<input type="email" name="correo" class="form-control" required="required">
						</div>
					</div>
					<div class="card-footer text-center">
						<input type="hidden" name="sid" value="<?= base64_encode($sid); ?>">
						<input type="hidden" name="url" value="<?= base64_encode($location); ?>">
						<button type="submit" name="enviar" class="btn btn-success">Enviar</button>	
					</div>
				</form>
				<?php
					if (isset($_SESSION['result'])){
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
					}
				?>
			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.js" integrity="sha256-DrT5NfxfbHvMHux31Lkhxg42LY6of8TaYyK50jnxRnM=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>
</html>
<?php
	unset($_SESSION['result']);
?>