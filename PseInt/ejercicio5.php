<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Multiples operaciones con 2 numeros</title>
	<?php
		//------------------------------
		//definición de variables
		$n1 = 0;
		$n2 = 0;
		$suma = 0;	
        $resta = 0;
        $multiplicacion= 0;
        $division = 0;
 
		//------------------------------
		if (isset($_POST['calcular'])) {
			//------------------------------
			//capturar la información
			$n1 = $_POST['n1'];
			$n2 = $_POST['n2'];
			//------------------------------
			//Realizar la operación
			$suma = $n1 + $n2;
			$resta = $n1 - $n2;
			$multiplicacion = $n1 * $n2;
			$division = $n1 / $n2;
		}
	?>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
	<div class="container pt-4 mt-4">
		<div class="row pt-4 mt-4">
			<div class="col-sm-6 offset-sm-3 text-center">
				<?php //comentario ?>
				<!-- comentario -->
				<h3>Programa para realizar multiples operaciones con 2 numeros</h3>
			</div>
			<hr>
			<div class="col-sm-6 offset-sm-3">
				<form class="row" action="ejercicio5.php" method="POST" enctype="multipart/form-data">
					<div class="col-sm-6">
						<div class="form-group">
							<label class="form-control-label">Ingrese el n1</label>
							<input type="number" name="n1" step="1" class="form-control" required="required" value="<?= (($n1 > 0) ? $n1 : NULL); ?>">
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label class="form-control-label">Ingrese el n2</label>
							<input type="number" name="n2" step="1" class="form-control" required="required" value="<?= (($n2 > 0) ? $n2 : NULL); ?>">
						</div>
					</div>
					<div class="col-sm-12 pt-2 mt-2">
						<div class="form-group">
							<?php if ($suma > 0){ ?>
								<div class="alert alert-success" role="alert">
									La suma es <?= $suma; ?>
								</div>
							<?php } ?>
							<?php if (strlen($resta) > 0){ ?>
								<div class="alert alert-success" role="alert">
									El volumen del cilindro es <?= $resta; ?>
								</div>
							<?php } ?>
							<?php if ($multiplicacion > 0){ ?>
								<div class="alert alert-success" role="alert">
									La multiplicacion es <?= $multiplicacion; ?>
								</div>
							<?php } ?>
							<?php if ($division > 0){ ?>
								<div class="alert alert-success" role="alert">
									La division es <?= $division; ?>
								</div>
							<?php } ?>
							<button class="btn btn-success" type="submit" name="calcular" style="width: 100%;">Realizar operacion</button>
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