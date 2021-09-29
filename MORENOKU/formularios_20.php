<?php
	/**
	 * Las clases son unas funciones de php en las cuales podemos ingresar mas funcones, de esta manera podemos hacer trabjaos multiples para una clase 
	 * $inf .= 'hola';
	 * $inf .= ' numdo';
	 * echo $inf; // hola mundo
	 */
	class formularios_20
	{
		function saludo($nombre){
			$data = new stdClass(); $inf = null;
			//-----------------------------
			function validarSal($nombre){
				$er=1;
				if(is_null($nombre)){ $er=0; }
				if(strlen($nombre) < 3){ $er=0; }//funcion para saber el alrgo de cadena
				return $er;
			}
			//-----------------------------
			if (validarSal($nombre) == 1) {
				$data->result = 1;//ta haceindo objeto
				$data->mensaje = "Todo está okey";
					$inf .= '<div class="card" style="width: 18rem;">';
						$inf .= '<div class="card-body">';
							$inf .= '<h5 class="card-title">Hola '.$nombre.'</h5>';
							$inf .= '<p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content.</p>';
						$inf .= '</div>';
					$inf .= '</div>';
				$data->inf = $inf;
			}else{
				$data->result = 0;//ta haceindo objeto
				$data->mensaje = '<div class="alert alert-danger" role="alert">El valor de la variable (nombre) tiene un largo de cadena inferior a 3 digitos.</div>';
				$data->inf = $inf;
			}
			//-----------------------------
			return $data;
		}
	}