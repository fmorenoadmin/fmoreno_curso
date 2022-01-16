<?php
	session_start();//esto seimpre arriba
	$rut ='../';
	$pagina ='validacion de formularios';
	$action ='validacion.php';
	require_once($rut.'0code.php');
	//estos formularios en los que trabajaremos contendran campos obligatorios y opcionales, botones de opcion y botones de envio
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
				<form class="col-sm-12" method="POST" enctype="multipart/form-data" action="<?= ACTI.$action; ?>">
					<div class="row">
						<div class="col-sm-6 pb-2">
							<div class="form-group">
								<label class="form-control-label">Nombres y Apellidos: <span class="text-danger">(*)</span></label>
								<input type="text" class="form-control" name="nombres" required="required">
							</div>
						</div>
						<div class="col-sm-6 pb-2">
							<div class="form-group">
								<label class="form-control-label">Correo electronico: <span class="text-danger">(*)</span></label>
								<input type="email" class="form-control" name="correo" required="required">
							</div>
						</div>
						<div class="col-sm-6 pb-2">
							<div class="form-group">
								<label class="form-control-label">Pagina web:</label>
								<input type="text" class="form-control" name="pagina">
								<br>
							</div>
						</div>
						<div class="col-sm-6 pb-2">
							<div class="form-group">
								<label class="form-control-label">Observaciones:</label>
								<textarea class="form-control" rows="2" name="obs"></textarea>
							</div>
						</div>
						<div class="col-sm-12 pb-2">
							<div class="form-group">
								<label class="form-control-label">Genero: <span class="text-danger">(*)</span></label>
								<br>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="genero" id="inlineRadio1" value="hombre" required="required">
									<label class="form-check-label" for="inlineRadio1">Hombre</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="genero" id="inlineRadio2" value="mujer" required="required">
									<label class="form-check-label" for="inlineRadio2">Mujer</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="genero" id="inlineRadio3" value="otro" required="required">
									<label class="form-check-label" for="inlineRadio3">Otro</label>
								</div>							
							</div>
						</div>
						<div class="col-sm-12 text-center pb-2">
							<div class="d-grid gap-2">
								<input type="hidden" name="sid" value="<?= base64_encode($sid); ?>">
								<input type="hidden" name="url" value="<?= base64_encode($location); ?>">
								<button	class="btn btn-success btn-block" name="enviar">Enviar</button>
							</div>
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