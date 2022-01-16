<?php 
	session_start();
	$rut = '../';
	$pagina = 'formulario 3';
	$action = '24_form3.php';
	require_once($rut.'0code.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?=$pagina.TIT; ?></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/c1583151af.js" crossorigin="anonymous"></script>
	<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
</head>
<body>
	<div class="container pt-4 mt-4">
		<div class="row pt-2 mt-2">
			<div class="col-sm-10 offset-sm-1">
				<form class="col-sm-12" method="POST" enctype="multipart/form-data" action="<?= ACTI.$action;?>">
					<div class="row">
						<div class="col-sm-7">
							<div class="form-group">
								<label class="form-control-label">Título:</label>
								<input class="form-control" type="text" name="titulo1">
							</div>
							<div class="form-group">
								<label class="form-control-label">Sub Título:</label>
								<input class="form-control" type="text" name="subtitulo1">
							</div>
							<div class="form-group">
								<label class="form-control-label">Posición:</label>
								<input class="form-control" type="number" name="posicion">
							</div>
							<div class="form-group">
								<label class="form-control-label">Texto:</label>
								<textarea class="form-control ckeditor" name="texto"></textarea>
							</div>
						</div>
						<div class="col-sm-5">
							<div class="form-group">
								<label class="form-control-label">Imagen</label>
								<input type="file" name="imagen_1" id="imgInp1" class="form-control">
								<hr>
								<div class="row">
									<img src="#" class="img-thumbnail" alt="vista previa de imagen" id="blah1">
								</div>
							</div>
						</div>
						<div class="col-sm-8 offset-sm-2 text-center pt-4 pb-3">
							<div class="d-grid gap-2">
								<input type="hidden" name="sid" value="<?= base64_encode($sid); ?>">
								<input type="hidden" name="url" value="<?= base64_encode($location); ?>">
								<button	class="btn btn-success btn-block" name="enviar">Enviar <i class="fas fa-paper-plane"></i></button>
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

	<script type="text/javascript">
		function readURL1(input){
			if(input.files && input.files[0]){
				var reader = new FileReader();
				reader.onload = function(e){
					$( "#blah1" ).attr("src", e.target.result);
				}
				reader.readAsDataURL(input.files[0]);//aqui se convierte la informacion de la url como base 64, solo funciona con imagenesno con otras cosas
			}
		}
		//--------------------------------
		$( "#imgInp1" ).change(function(){
			readURL1(this);<?php //este elemento en jquery es, "este elemento que tiene este id" ?>
		});
	</script>
</body>
</html>