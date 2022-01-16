<?php
	session_start();
	$rut ='../';
	$pagina = 'Formulario 2';
	$action = 'bienvenido.php';
	require_once($rut.'0code.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?= $pagina.TIT; ?></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/c1583151af.js" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container pt-4 mt-4">
		<div class="row pt-2 mt-2">
			<div class="col-sm-6 offset-sm-3">
				<form class="col-sm-12" method="GET" action="<?= ACTI.$action; ?>">
					<?php //quitmos multitype?>
					<div class="row pb-3">
						<div class="form-group">
							<label class="form-control-label">Nombre:</label>
							<input type="text" class="form-control" name="nombre">
						</div>
					</div>
					<div class="row pb-3">
						<div class="form-group">
							<label class="form-control-label">Correo:</label>
							<input type="email" class="form-control" name="correo"> 
						</div>
					</div>
					<div class="row pb-3">
						<div class="form-group">
							<button class="btn btn-success" name="enviar">Ingresar <i class="fas fa-sign-in-alt"></i></button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.js" integrity="sha256-DrT5NfxfbHvMHux31Lkhxg42LY6of8TaYyK50jnxRnM=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>
</html>