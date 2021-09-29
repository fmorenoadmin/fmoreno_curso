<?php
	session_start();
	$rut ='../../';//accedo a mi carpeta raiz
	$rut2='../';//accedo a mi carpeta raiz
	$pagina ='Nuevo Producto';//El nombre de la vista en la cual te encuentras
	$action ='productos.php';//El archivo de accion al que va apuntar o se va a dirigir
	require_once($rut.'0code.php');//esta requiriendo a 0code.php que se encuentra en la raiz y que al mismo tiempo esta requiereiendo a constat.php
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?= $pagina.TIT; ?></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<?php
		//-----------------------------
		$data = NULL;$inf = NULL;
		//-----------------------------
		require_once($rut.DIRACT.$action);//traer al archivo productos.php
		$data = nuevo($rut);
		//-----------------------------
		$cboTP = $data->cboTP;
		if(isset($cboTP->result) && $cboTP->result == 1){
			$cboUM = $data->cboUM;
		}else{
			header("Location: ".$rut2);
			exit();
		}
		//-----------------------------
		require_once($rut.'0mens.php');
	?>
</head>
<body>
	<?php
	//Las variables super globals de php: $_GET $_POST $_REQUEST se utilizan para recopilar datos de los formularios
	//un combo box es una lista desplegable que contiene valores y claves 
	?>
	<div class="container pt-4 mt-4">
		<div class="row pt-4 mt-4">
			<div class="col-sm-4 offset-sm-4">
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
				<form class="card row" method="POST" enctype="multipart/form-data" action="<?= ACTI.$action; ?>">
					<div class="card-header">
						<h2 class="card-title"><?= $pagina; ?></h2>
					</div>
					<div class="card-body">
						<div class="form-group">
							<label class="form-control-label">Tipo de Producto</label>
							<select class="form-control" name="id_tp" required="required">
								<?= $cboTP->inf; ?>
							</select>
						</div>
						<div class="form-group">
							<label class="form-control-label">Nombre del Producto</label>
							<input type="text" name="nombre_pro" class="form-control" required="required">
						</div>
						<div class="form-group">
							<label class="form-control-label">Marca del Producto</label>
							<input type="text" name="marca_pro" class="form-control" required="required">
						</div>
						<div class="form-group">
							<label class="form-control-label">Medida del Producto</label>
							<input type="number" step="0.01" name="medida_pro" class="form-control"><!--El el step es apra ñadirle un de cuanto en cuanto se a a incrementar-->
						</div>
						<div class="form-group">
							<label class="form-control-label">Unidade de Medida</label>
							<select class="form-control" name="id_um" required="required">
								<?= $cboUM->inf; ?>
							</select>
						</div>
						<div class="form-group">
							<label class="form-control-label">Precio del Producto</label>
							<input type="number" step="0.01" name="precio_pro" class="form-control">
						</div>
						<div class="form-group">
							<label class="form-control-label">Stock del Producto</label>
							<input type="number" step="0.01" name="stock_pro" class="form-control">
						</div>
					</div>
					<div class="card-footer text-center">
						<button type="submit" name="nuevo" class="btn btn-success">Enviar</button>	
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
<?php
	unset($_SESSION['Mysqli_Error']);
	unset($_SESSION['result']);
?>