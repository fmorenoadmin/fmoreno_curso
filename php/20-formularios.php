<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formularios</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
	<?php 
	//Las variables super globals de php: $_GET $_POST $_REQUEST se utilizan para recopilar datos de los formularios
	?>
	<div class="container">
		<div class="row">
			<div class="col-sm-4 offset-sm-4">
				<form class="card row" method="POST" enctype="multipart/form-data" action="">
					<div class="card-header">
						<h2 class="card-title">HOLA</h2>
					</div>
					<div class="card-body">
						<div class="form-group">
							<label class="form-control-label">Ingresa tu nombre</label>
							<input type="text" name="nombre" class="form-control">
						</div>
					</div>
					<div class="card-footer text-center">
						<button type="submit" class="btn btn-success">Enviar</button>	
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