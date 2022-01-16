<?php 
	session_start();
	//Es una extension, esuna extension de php parecido a un plugin, los filtros de php tienen muchas funciones necesarias para verificar los datos que el usuarios ingresa y esta diseñada para que la validacion de estos datos sea mas facil y mas rapida.
	//filter_list(); es un arreglo+
	$rut = '../';
	$action = '';
	$pagina = 'Filtros';
	require_once($rut.'0code.php');
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?= $pagina.TIT ?></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/c1583151af.js" crossorigin="anonymous"></script>
	<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
</head>
<body>
 	<div class="container pt-4 pb-4">
 		<div class="row pt-4 pb-4">
 			<div class="col-sm-12">
 				<table class="table table-bordered table-hover table-responsive table-dark">
 					<thead>
 					 	<tr>
 					 		<th>Nombre del filtro</th>
 					 		<th>Id del filtro</th>
 					 	</tr>
 					</thead>
 					<tbody>
 						<?php 
 							foreach(filter_list() as $key => $value){
 								echo '<tr><td>'.$value.'</td><td>'.filter_id($value).'</td></tr>';
 							}
 						 ?>
 					</tbody>
 				</table>
 			</div>
 		</div>
 		<div class="row pt-4 pb-4">
 			<div class="col-sm-12">
 				<?php
 					//vamos a filtrar un string
 					//para poder filtrar un valor id necesitamos la funcion de php filter_var(variable,tipo de chequeo a utilizar);
 					$str1 = '<h1>Hola mundo</h1>';
 					$newstr1 = filter_var($str1, FILTER_SANITIZE_STRING);//limpia el codigo html, valida y desinfecta lso datos obligandoa  que sea solo un string
 					echo $newstr1.'<br>';
 					//------------------------------------------------------
 					$str11 = '<p>Hola 123456789 mundo</p>';
 					$newstr11 = filter_var($str11, FILTER_SANITIZE_STRING);//limpia el codigo html, valida y desinfecta lso datos obligandoa  que sea solo un string
 					echo $newstr11.'<br>';
 					//Vamos a filtrar un int
 					//vamosa  verificar si una variable es entero o no lo es, se utiliza para los numeros mayores a cero
 					$int1 = 0;
 					echo ((!filter_var($int1, FILTER_VALIDATE_INT) === false) ? 'El número es un INT' : 'El número no es un valor de tipo INT').'<br>';
 					/*if (!filter_var($int1, FILTER_VALIDATE_INT) === false) {
 						echo 'El número es un INT';
 					}else{
 						echo 'El número no es un valor de tipo INT';
 					}*/
 					//Este caso se utiliza para los enteros que son mayor igual a 0
 					echo ((filter_var($int1, FILTER_VALIDATE_INT) === 0 || !filter_var($int1, FILTER_VALIDATE_INT) === false) ? 'El numero es valido' : 'El numero no es invalido').'<br>';
 					//Validar una direccion ip 
 					$ip1 = '190.238.103.2530';
 					$ip1 = $_SERVER['REMOTE_ADDR'];
 					echo ((!filter_var($ip1, FILTER_VALIDATE_IP) === false) ? 'Esta es una ip valida: '.$ip1 : 'La ip ingresada es incorrecta').'<br>';
 					//desinfectar y validar un correo electronico
 					$email1 = 'h1de.sir@gmail_com>';
 					//remover caracteres ilegales dentro de un correo
 					$email1 = filter_var($email1, FILTER_SANITIZE_EMAIL);
 					//validar correo
 					echo ((!filter_var($email1, FILTER_VALIDATE_EMAIL) === false) ? 'es un correo valido: '.$email1 : 'El correo: <b>'.$email1.'</b> no es correcto.').'<br>';
 					//desinfectar y verificar una url
 					$url1 = 'https://frankmorenoalburqueque.com<h1>';
 					//desinfeccion
 					$url1 = filter_var(strip_tags($url1), FILTER_SANITIZE_URL);
 					//valiodacion
 					echo ((!filter_var($url1, FILTER_VALIDATE_URL) === false) ? 'la url es valida' : 'la url <b>'.$url1.'</b> es invalida').'<br>';
 					//validar un int dentro de un rango
 					$int2 = 95;
 					$min = 11;
 					$max = 53;
 					echo (
 						(
 							filter_var(
 								$int2, 
 								FILTER_VALIDATE_INT, 
 								array(
 									"options" => array(
 										"min_range" => $min, 
 										"max_range" => $max
 									)
 								)
 							) === false
 						) ? 'El valor <b>'.$int2.'</b> no esta dentro del rango' : 'El valor se enceuntra dentro del rango'
 					).'<br>';
 					//validar direccion ip version 6
 					$ip2 = '2001:0db8:85a3:08d3:1319:8a2e:0370:7334';
 					$ip3 = 'fe80::5cc2:d822:ff31:dc36%12';
 					echo((!filter_var($ip2, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) === false) ? 'la ip pertenece a la v6' : 'La ip <b>'.$ip2.'</b> no pertenece a la v6').'<br>';
 					echo((!filter_var($ip3, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) === false) ? 'la ip pertenece a la v6' : 'La ip <b>'.$ip3.'</b> no pertenece a la v6').'<br>';
 					//eliminar caracteres con valor ascii
 					$str2 = '<h1>Hola mundoÆØÅ!ą</h1>';
 					$newstr2 = filter_var($str2, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
 					echo $newstr2;
 					//_------------------------
 					$user = 'admin@gmail.com';
 					$new_user = filter_var($user, FILTER_SANITIZE_STRING);
 					echo '<br>';
 					echo $new_user;
 				?>
 			</div>
 		</div>
 	</div>

 	<script src="https://code.jquery.com/jquery-3.5.1.slim.js" integrity="sha256-DrT5NfxfbHvMHux31Lkhxg42LY6of8TaYyK50jnxRnM=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>
</html>