<?php
	/**Las clases son unas funciones de php en las cuales podemos ingresar mas fun
	 * cones, de esta manera podemos hacer trabjaos multiples para una clase 
	 * $inf .= 'hola';
	 * $inf .= ' numdo';
	 * echo $inf; // hola mundo
	 */
	class formularios_21 extends database
	{
		private $table ='formularios_21';//esa variable privada $table es de la clase privada, elv alor de esta varibale debe ser el mismo nombre de la tabla en la base de datos
		//-------------------------------
		function add($c1,$dt){
			$data = new stdClass(); $inf = null;
			//----------------------------------
			function validarAdd($nombres, $apellidos, $correo){
				$er = 1;
				if(is_null($nombres)){ $er = 0; }
				if(is_null($apellidos)){ $er = 0; }
				if(is_null($correo)){ $er = 0; }
				return $er;
			}
			//----------------------------------
			if(validarAdd($dt->nombres, $dt->apellidos, $dt->correo) == 1){
				//para llamr una variable de un objeto se usa flecha y no se usa $ dps de la flecha, dt es el objeto definido en acciones, aqui lo estoy reciviendo; igualo a 1 para saber si si lleno el campo
				$sql = "INSERT INTO ".$this->table." (nombres, apellidos,telefono, correo, created_at) VALUES ('".$dt->nombres."', '".$dt->apellidos."', '".$dt->telefono."', '".$dt->correo."', '".$dt->fecha."');";
				//estoy invocando a la variable privada table que se encuentra en esta clase, this lo uso apra variables privadas que se usan en la misma clase
				$res = mysqli_query($c1, $sql) OR $_SESSION['Mysqli_Error'] = (mysqli_error($c1));
				//si no se ejecuta la sentencia sql se va a llamar el ultimo error de MySql y se va a guadar en MySql error
				// este codigo de aqui se aplica apra todo
				if ($res) {
					$data->result = 1;
					$data->mensaje = 'Registro agregado correctamente.';
					$data->inf = 'add';
				}else{
					$data->result = 0;
					$data->mensaje = 'No se ejecutó la consulta. Error: '.$_SESSION['Mysqli_Error'];
					$data->inf = 'add';
				}
			}else{
				$data->result = 2;
				$data->mensaje = 'Existe un campo obligatorio vacío.';
				$data->inf = 'noadd';
			}
			//----------------------------------
			return $data;
		}
	}