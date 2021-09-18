<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Calculando el promedio de Pepito</title>
	<?php
		//------------------------------
		//definición de variables
		$nota1 = 0;						 
		$nota2 = 0;				
		$nota3 = 0;		
		$nota4 = 0;
		$nota5 = 0;
		$nota6 = 0;
		$nota7 = 0;
		$promedio = 0;		
		//------------------------------
		if (isset($_POST['calcular'])) {
			//------------------------------
			//capturar la información

			$nota1 = $_POST['nota1'];
			$nota2 = $_POST['nota2'];
			$nota3 = $_POST['nota3'];
			$nota4 = $_POST['nota4'];
			$nota5 = $_POST['nota5'];
			$nota6 = $_POST['nota6'];
			$nota7 = $_POST['nota7'];


			//------------------------------
			//Realizar la operación round(numero, cantidad de decimales)
			$promedio = round(($nota1 + $nota2 + $nota3 + $nota4 +$nota5 + $nota6 + $nota7)/7, 2);
		}
	?>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
	<div class="container pt-4 mt-4">
		<div class="row pt-4 mt-4">
			<div class="col-sm-6 offset-sm-3 text-center">
				<h3>Programa para calcular el promedio de Pepito</h3>
			</div>
			<hr>
			<div class="col-sm-6 offset-sm-3">
				<form class="row" action="ejercicio4.php" method="POST" enctype="multipart/form-data">
					<div class="col-sm-6">
						<div class="form-group">
							<label class="form-control-label">Ingrese nota1</label>
							<input type="number" name="nota1" step="1" class="form-control" required="required" value="<?= (($nota1 > 0) ? $nota1 :NULL); ?>">
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label class="form-control-label">Ingrese nota2</label>
							<input type="number" name="nota2" step="1" class="form-control" required="required" value="<?= (($nota2 > 0) ? $nota2 : NULL); ?>">
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label class="form-control-label">Ingrese nota3</label>
							<input type="number" name="nota3" step="1" class="form-control" required="required" value="<?= (($nota3 > 0) ? $nota3 : NULL); ?>">
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label class="form-control-label">Ingrese nota4</label>
							<input type="number" name="nota4" step="1" class="form-control" required="required" value="<?= (($nota4 > 0) ? $nota4 : NULL); ?>">
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label class="form-control-label">Ingrese nota5</label>
							<input type="number" name="nota5" step="1" class="form-control" required="required" value="<?= (($nota5 > 0) ? $nota5 : NULL); ?>">
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label class="form-control-label">Ingrese nota6</label>
							<input type="number" name="nota6" step="1" class="form-control" required="required" value="<?= (($nota6 > 0) ? $nota6 : NULL); ?>">
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label class="form-control-label">Ingrese nota7</label>
							<input type="number" name="nota7" step="1" class="form-control" required="required" value="<?= (($nota7 > 0) ? $nota7 : NULL); ?>">
						</div>
					</div>
					<div class="col-sm-12 pt-2 mt-2">
						<div class="form-group">
							<?php if ($promedio > 0){ ?>
								<div class="alert alert-success" role="alert">
									El promedio de Pepito es <?= $promedio; ?>
								</div>
							<?php } ?>
							
							<button class="btn btn-success" type="submit" name="calcular" style="width: 100%;">Calcular promedio</button>
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