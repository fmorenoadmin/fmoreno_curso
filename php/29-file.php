<?php 
	session_start();
	$rut = '../';
	$pagina = 'Carga de archivos';
	$action = '29_file.php';
	require_once($rut.'0code.php');	
	/*
	Con php es muy facil cargar archivos al servidor sin embargo la facilidad conlleva un peligro asi que siempre tenga cuidado al eprmitir la carga de archivos, 
	hay unaa configuracionq ue se debe verificar antes de probar la carga de archivos: file_uploads = ON (dentro dle archivo php.ini)
	*/
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?= $pagina.TIT; ?></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/c1583151af.js" crossorigin="anonymous"></script>
	<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
</head>
<body>

	<div class="container pt-4">
		<div class="row pt-4">
			<div class="col-sm-6 offset-sm-3">
				<form class="row" method="POST" action="<?= ACTI.$action; ?>" enctype="multipart/form-data">
					<div class="col-sm-12">
						<div class="form-group">
							<label class="form-control-label">Imagen:</label>
							<input class="form-control" type="file" name="archivo" required="required">
						</div>
					</div>
					<div class="col-sm-12">
						<div class="d-grid gap-2">
							<input type="hidden" name="sid" value="<?= base64_encode($sid); ?>">
							<input type="hidden" name="url" value="<?= base64_encode($location); ?>">
							<button	class="btn btn-success btn-block" name="enviar">Enviar <i class="fas fa-paper-plane"></i></button>
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