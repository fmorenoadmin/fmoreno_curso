<?php
	$a = 10;
	$b = 3;
	$c = 10;
	$d = '3';
	$e = 3;
	$f = 1;
	$g = 10;
	//--------------------
	$h = 0;
	$i = 0;
	//--------------------
	$j = 10;
	$k = 10;
	//--------------------
	$l = 11;
	$m = 15;
	$n = 5;
	$o = 11;
	$p = true;
	$q = "hola";
	$r = "mundo";
	$inf = NULL;
	$a_x = array("a" => 'Manzana',"b" => 'Pera',"c" => 'Piña');
	$a_y = array("d" => 'tomate', "e" => 'durazno',"f" => 'mandarinda');
	$b_x = array("a" => 'Manzana',"b" => 'Pera',"c" => 'Piña');
	$b_y = array("d" => 150, "e" => 900,"f" => 15000);
	$s = 0;
	$t = 0;

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Operadores</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
	<?php
		//Operadores aritmeticos 
	?>
	<div class="container pb-4 mb-4">
		<!--div-->
		<div class="row pt-4 mt-4">
			<div class="col-sm-12">
				<table class="table table-dark table-striped">
					<thead>
						<tr>
							<th colspan="4" class="text-center"><h2>Operadores Aritméticos</h2></th>
						</tr>
						<tr>
							<th>Operador</th>
							<th>Nombre</th>
							<th>Ejemplo</th>
							<th>Resultado</th>
						</tr>	
					</thead>
					<tbody>
						<tr>
							<td class="text-center">+</td>
							<td>Suma</td>
							<td>$a + $b</td>
							<td><?= $a + $b; ?></td>
						</tr>
						<tr>
							<td class="text-center">-</td>
							<td>Resta</td>
							<td>$a - $b</td>
							<td><?= $a - $b; ?></td>
						</tr>
						<tr>
							<td class="text-center">*</td>
							<td>Multiplicacion</td>
							<td>$a * $b</td>
							<td><?= $a * $b; ?></td>
						</tr>
						<tr>
							<td class="text-center">/</td>
							<td>Division</td>
							<td>$a / $b</td>
							<td><?= $a / $b; ?></td>
						</tr>
						<tr>
							<td class="text-center">%</td>
							<td>Modulo</td>
							<td>$a % $b</td>
							<td><?= $a % $b; ?></td>
						</tr>
						<tr>
							<td class="text-center">**</td>
							<td>Exponienciacion</td>
							<td>$a ** $b</td>
							<td><?= $a ** $b; ?></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<!--end div-->
		<!--div-->
		<div class="row pt-4 mt-4">
			<div class="col-sm-12">
				<table class="table table-dark table-striped">
					<thead>
						<tr>
							<th colspan="4" class="text-center"><h2>Operadores de Asignación</h2></th>
						</tr>
						<tr>
							<th>Operador</th>
							<th>Nombre</th>
							<th>Ejemplo</th>
							<th>Resultado</th>
						</tr>	
					</thead>
					<tbody>
						<tr>
							<td class="text-center">=</td>
							<td>Igual a</td>
							<td>$a = $b</td>
							<td><?= $a = $b; ?></td><?php //ahora a va a valer 3 ?>
						</tr>
						<tr>
							<td class="text-center">+=</td>
							<td>
								Adicion<br>
								Direfencia entre suma y adición
								<?php
									echo 'Suma:<br>';
									echo ($c + $b).'<br>';
									echo 'Valor de c: '.$c.'<br>';
									echo 'Valor de b: '.$b.'<br>';
									//en la suma suma el valor de la primera variable no se ve afectada.
									//en la adicion, la suma de estas variables se guarda en la primera variable a
									echo 'Adición:<br>';
									echo ($c += $b).'<br>';
									echo 'Valor de c: '.$c.'<br>';
									echo 'Valor de b: '.$b.'<br>';
								?>
							</td>
							<td>$c += $b</td>
							<td><?= $c += $b; ?></td>
						</tr>
						<tr>
							<td class="text-center">-=</td>
							<td>Sustraccion</td>
							<td>$c -= $b</td>
							<td><?= $c -= $b; ?></td>
						</tr>
						<tr>
							<td class="text-center">*=</td>
							<td>Acumulador de Multiplicacion</td>
							<td>$a *= $b</td>
							<td><?= $a *= $b; ?></td>
						</tr>
						<tr>
							<td class="text-center">/=</td>
							<td>Acumulador de Division</td>
							<td>$a /= $b</td>
							<td><?= $a /= $b; ?></td>
						</tr>
						<tr>
							<td class="text-center">%=</td>
							<td>Acumulador de Modulo</td>
							<td>$c %= $b</td>
							<td><?= $c %= $b; ?></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<!--end div-->
		<!--div-->
		<div class="row pt-4 mt-4">
			<div class="col-sm-12">
				<table class="table table-dark table-striped">
					<thead>
						<tr>
							<th colspan="4" class="text-center"><h2>Operadores de comparacion</h2></th>
						</tr>
						<tr>
							<th>Operador</th>
							<th>Nombre</th>
							<th>Ejemplo</th>
							<th>Resultado</th>
						</tr>	
					</thead>
					<tbody>
						<tr>
							<td class="text-center">==</td>
							<td>
								Compara igualdad
								<?php //se utiliza para comparar si 2 variables son iguales ?>
							</td>
							<td>$a == $b</td>
							<td>
								<?php
									if($a == $b){
										echo 'true';
									}else{
										echo 'false';
									}
								?>
							</td>
						</tr>
						<tr>
							<td class="text-center">===</td>
							<td>
								Equidad
								<?php //se utiliza para comparar si 2 variables son iguales y a su ves son del mismo tipo ?>
							</td>
							<td>$b === $d<br>$b === $e</td>
							<td>
								<?php
									if($b === $d){
										echo 'true<br>';
									}else{
										echo 'false<br>';
									}
									if($b === $e){
										echo 'true';
									}else{
										echo 'false';
									}
								?>
							</td>
						</tr>
						<tr>
							<td class="text-center">!=</td>
							<td>
								NO igual
								<?php //Se utiliza para comparar si 2 varibales no son iguales ?>
							</td>
							<td>$a != $c</td>
							<td>
								<?php
									if($a != $c){
										echo 'true';
									}else{
										echo 'false';
									}
								?>
							</td>
						</tr>
						<tr>
							<td class="text-center">!==</td>
							<td>
								NO igual
								<?php //Se utiliza para comparar si 2 varibales no son iguales y tmpc son del mismo tipo ?>
							</td>
							<td>$c !== $d</td>
							<td>
								<?php
									if($c !== $d){
										echo 'true';
									}else{
										echo 'false';
									}
								?>
							</td>
						</tr>
						<tr>
							<td class="text-center">></td>
							<td>
								Mayor que
							</td>
							<td>$e > $f</td>
							<td>
								<?php
									if($e > $f){
										echo 'Es mayor';
									}else{
										echo 'No es mayor';
									}
								?>
							</td>
						</tr>
						<tr>
							<td class="text-center"><</td>
							<td>
								Menor que
							</td>
							<td>$f < $g</td>
							<td>
								<?php
									if($f < $g){
										echo 'Es menor';
									}else{
										echo 'No es menor';
									}
								?>
							</td>
						</tr>
						<tr>
							<td class="text-center">>=</td>
							<td>
								Mayor o igual que
							</td>
							<td>$e >= $f</td>
							<td>
								<?php
									if($e >= $f){
										echo 'Es mayor o igual';
									}else{
										echo 'No es mayor o igual';
									}
								?>
							</td>
						</tr>
						<tr>
							<td class="text-center"><=</td>
							<td>
								Menor o igual que
							</td>
							<td>$f <= $g</td>
							<td>
								<?php
									if($f <= $g){
										echo 'Es menor o igual';
									}else{
										echo 'No es menor o igual';
									}
								?>
							</td>
						</tr>
						<tr>
							<td class="text-center"><=></td>
							<td>
								Diferentes 
							</td>
							<td>
								$a <=> $g<br>
								$a <=> $e
							</td>
							<td>
								<?php
									if($a <=> $g){
										echo 'Son diferentes<br>';
									}else{
										echo 'No son diferentes<br>';
									}
									if($a <=> $e){
										echo 'Son diferentes';
									}else{
										echo 'No son diferentes';
									}
								?>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<!--end div-->
		<!--div-->
		<div class="row pt-4 mt-4">
			<div class="col-sm-12">
				<table class="table table-dark table-striped">
					<thead>
						<tr>
							<th colspan="4" class="text-center"><h2>Operadores de Incremento/Decremento</h2></th>
						</tr>
						<tr>
							<th>Operador</th>
							<th>Nombre</th>
							<th>Ejemplo</th>
							<th>Resultado</th>
						</tr>	
					</thead>
					<tbody>
						<tr>
							<td class="text-center">++VAR</td>
							<td>Preincremento</td>
							<td>++$h</td>
							<td>
								<?php
									echo 'Antes: '.$h.'<br>';
									echo 'Pre:  '. ++$h. '<br>';
									echo 'Despues: '.$h;
									//Necesitas esperar hasta la siguiente linea para usar el incremento
								?>
							</td>
						</tr>
						<tr>
							<td class="text-center">VAR++</td>
							<td>Postincremento</td>
							<td>$i++</td>
							<td>
								<?php
									echo 'Antes: '.$i.'<br>';
									echo 'Post: '. $i++. '<br>';
									echo 'Despues: '.$i;
									//En el caso de que quieras usar el incremento sin esperar
								?>
							</td>
						</tr>
						<tr>
							<td class="text-center">--VAR</td>
							<td>Predecremento</td>
							<td>--$j</td>
							<td>
								<?php
									echo 'Antes: '.$j.'<br>';
									echo 'Pre:  '.--$j.'<br>';
									echo 'Despues: '.$j;
									//Necesitas esperar hasta la siguiente linea para usar el decremento
								?>
							</td>
						</tr>
						<tr>
							<td class="text-center">VAR--</td>
							<td>Postdecremento</td>
							<td>$k--</td>
							<td>
								<?php
									echo 'Antes: '.$k.'<br>';
									echo 'Post: '.$k--.'<br>';
									echo 'Despues: '.$k;
									//En el caso de que quieras usar el decremento sin esperar
								?>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<!--end div-->
		<!--div-->
		<div class="row pt-4 mt-4">
			<div class="col-sm-12">
				<table class="table table-dark table-striped">
					<thead>
						<tr>
							<th colspan="4" class="text-center"><h2>Operadores logicos</h2></th>
						</tr>
						<tr>
							<th>Operador</th>
							<th>Nombre</th>
							<th>Ejemplo</th>
							<th>Resultado</th>
						</tr>	
					</thead>
					<tbody>
						<tr>
							<td class="text-center">and / &&</td>
							<td>AND / Y</td>
							<td>($l == $m && $n > $o)</td>
							<td>
								<?php
									if ($l == $m and $n > $o) {
										echo 'Es verdadero';
									}else{
										echo 'Es falso';
									}
									//Validar si el 1er y el 2do caso son verdaderos para que sea verdadero
								?>
							</td>
						</tr>
						<tr>
							<td class="text-center">or / ||</td>
							<td>OR / O</td>
							<td>($l == $m || $n > $o)</td>
							<td>
								<?php
									if ($l == $m || $n > $o) {
										echo 'Es verdadero';
									}else{
										echo 'Es falso';
									}
									//Valida que una de las dos opciones como minimo sea verdadero para soltar verdadero
								?>
							</td>
						</tr>
						<tr>
							<td class="text-center">xor / !VAR</td>
							<td>Negacion </td>
							<td>!$p</td>
							<td>
								<?php
									if ($p != false) {
										echo 'Es falso';
									}else {
										echo 'Es verdadero';
									}
									//
								?>
							</td>						
					</tbody>
				</table>
			</div>
		</div>
		<!--end div-->
		<div class="row pt-4 mt-4">
			<div class="col-sm-12">
				<table class="table table-dark table-striped">
					<thead>
						<tr>
							<th colspan="4" class="text-center"><h2>Operadores de Cadenas</h2></th>
						</tr>
						<tr>
							<th>Operador</th>
							<th>Nombre</th>
							<th>Ejemplo</th>
							<th>Resultado</th>
						</tr>	
					</thead>
					<tbody>
						<tr>
							<td class="text-center">.</td>
							<td>Concatenacion</td>
							<td>echo $q.'<code><br></code>'.$r</td>
							<td>
								<?php
									echo $q.'<br>'.$r;
									//Para poder unir 2 variables o mas se debe usar (.)
								?>
							</td>
						</tr>
						<tr>
							<td class="text-center">.=</td>
							<td>concatenacion agregada</td>
							<td>
								$inf .= '{';<br>
									$inf .= '"id": 1,';<br>
									$inf .= '"name": "Marcelo"';<br>
								$inf .= '}';<br>
							</td>
							<td><code>
								<?php
									$inf .= '{';
										$inf .= '"id": 1,';
										$inf .= '"name": "Marcelo"';
									$inf .= '}';
									echo $inf;
									//
								?></code>
							</td>
						</tr>
												
					</tbody>
				</table>
			</div>
		</div>
		<!--end div-->		
		<div class="row pt-4 mt-4">
			<div class="col-sm-12">
				<table class="table table-dark table-striped">
					<thead>
						<tr>
							<th colspan="4" class="text-center"><h2>Operadores de Matriz</h2></th>
						</tr>
						<tr>
							<th>Operador</th>
							<th>Nombre</th>
							<th>Ejemplo</th>
							<th>Resultado</th>
						</tr>	
					</thead>
					<tbody>
						<tr>
							<td class="text-center">+</td>
							<td>Union</td>
							<td>$a_x + $a_y</td>
							<td>
								<code>
									<?php
										print_r($a_x + $a_y);//prin_r poqeu voy a imprimir un array
										//La union solo se va a efectuar cuando ambos arreglos tengan llaves (keys), lo quetiene antes del =>
									?>							
								</code>
							</td>
						</tr>
						<tr>
							<td class="text-center">==</td>
							<td>Igualdad</td>
							<td>
								($a_x == $b_x)
							</td>
							<td>
								<?php
									if ($a_x == $b_x) {
										echo 'Ambos arreglos son iguales';
									}else{
										echo 'Ambos arreglos no son iguales';
									}
									//solo por contenido
								?>
							</td>
						</tr>
						<tr>
							<td class="text-center">===</td>
							<td>Identico</td>
							<td>
								($a_x === $b_y)
							</td>
							<td>
								<?php
									if ($a_x === $b_y) {
										echo 'Ambos arreglos son identicos';
									}else{
										echo 'Ambos arreglos no son identicos';
									}
									//por contenido y tipo 
								?>
							</td>
						</tr>
						<tr>
							<td class="text-center">!= / <code><></code></td>
							<td>No iguales</td>
							<td>
								($a_x != $b_y)
							</td>
							<td>
								<?php
									if ($a_x != $b_y) {
										echo 'Ambos arreglos no son iguales';
									}else{
										echo 'Ambos arreglos son iguales';
									}
									//por contenido y tipo 
								?>
							</td>
						</tr>
						<tr>
							<td class="text-center">!==</td>
							<td>No identico</td>
							<td>
								($a_x !== $b_y)
							</td>
							<td>
								<?php
									if ($a_x !== $b_y) {
										echo 'Ambos arreglos no son identicos';
									}else{
										echo 'Ambos arreglos son identicos';
									}
									//por contenido y tipo 
								?>
							</td>
						</tr>						
					</tbody>
				</table>
			</div>
		</div>
		<!--end div-->
		<div class="row pt-4 mt-4">
			<div class="col-sm-12">
				<table class="table table-dark table-striped">
					<thead>
						<tr>
							<th colspan="4" class="text-center"><h2>Operadores de asignacion condicional</h2></th>
						</tr>
						<tr>
							<th>Operador</th>
							<th>Nombre</th>
							<th>Ejemplo</th>
							<th>Resultado</th>
						</tr>	
					</thead>
					<tbody>
						<tr>
							<td class="text-center">? :</td>
							<td>Operador ternario</td>
							<td>$s = expr1 ? expr2 : expr3;</td>
							<td>
								<?php
									echo $s = (0 < 10) ? 'es menor' : 'no es menor';
									//la expr1 es la condicional, la expr2 es el valor verdadero y la expr3 es el valor falso
								?>
							</td>
						</tr>
						<tr>
							<td class="text-center">??</td>
							<td>Nulo fucionado</td>
							<td>$t = expr1 ?? expr2;</td>
							<td>
								<?php
									echo $t = (isset($total)) ?? 'Es verdadero';
									//Si se cumple lo de la exp1 entonces te mostrara el valor verdadero(expr2) caso contrario retornara nulo
								?>
							</td>
						</tr>
												
					</tbody>
				</table>
			</div>
		</div>
		<!--end div-->

	</div>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.js" integrity="sha256-DrT5NfxfbHvMHux31Lkhxg42LY6of8TaYyK50jnxRnM=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>
</html>