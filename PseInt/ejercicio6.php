<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Area de un circulo</title>
	<?php
		//------------------------------
		//definición de variables
		$radio = 0;
		$pi = 3.141516;
		$area = 0;
		//------------------------------
		if (isset($_POST['calcular'])) {
			//------------------------------
			//capturar la información
			$radio = $_POST['radio'];
			//------------------------------
			//Realizar la operación	
			$area = $pi*$radio * 2;
		}
	?>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
	<div class="container pt-4 mt-4">
		<div class="row pt-4 mt-4">
			<div class="col-sm-6 offset-sm-3 text-center">
				<h3>Programa para hallar el area del circulo</h3>
			</div>
			<hr>
			<div class="col-sm-6 offset-sm-3">
				<form class="row" action="ejercicio6.php" method="POST" enctype="multipart/form-data">
					<div class="col-sm-12">
						<div class="form-group">
							<label class="form-control-label">Ingrese el radio</label>
							<input type="number" name="radio" step="1" class="form-control" required="required" value="<?= (($radio > 0) ? $radio : NULL); ?>">
						</div>
					</div>
					
					<div class="col-sm-12 pt-2 mt-2">
						<div class="form-group">
							<?php if ($area > 0){ ?>
								<div class="alert alert-success" role="alert">
									El area del circulo es <?= $area; ?> 
								</div>
							<?php } ?>
							<button class="btn btn-success" type="submit" name="calcular" style="width: 100%;">Operar el area</button>
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