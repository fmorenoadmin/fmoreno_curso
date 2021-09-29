<?php
	/**
	 * El nombre de mi clase tiene que ser deaceurdo al nombre de mi tabla
	 */
	class tipo_productos extends database
	{
		private $table = 'tipo_productos';
		private $tid = "id_tp";//el PK de tipo_producto
		//--------------------------------
		function cbo($c1){//cbo es la abreviatura de combobox o select
			$data = new stdClass(); $inf = NULL;//siempre son data y inf las mismas variarables
			//--------------------------------
			$inf .= '<option value="'.base64_encode(0).'">Seleccione el Tipo de Producto:</option>';//opcion html apra el selct
			$sql = "SELECT ".$this->tid.", nombres_tpro FROM ".$this->table." WHERE status = 1;";// siempre es este orden de secuencia sql y res
			$res = mysqli_query($c1, $sql) OR $_SESSION['Mysqli_Error'] = (mysqli_error($c1));
			//mysqli_query ejecuta la sentencia de mysql $sql, recibe la cadena de coneccion y la sentencia mysql
			//mysqli_error es una funcion que te devuelve el ultimo error de ejecucion de mysql
			if ($res){// se esta validad si $res contiene informacion o no
				if ($res->num_rows > 0) {//si el numerod e filas del resultado es mayor que 0 
					while($row = mysqli_fetch_array($res)){//voy a recorrer fila por fila el resultado como un arreglo
						$inf .= '<option value="'.base64_encode($row[$this->tid]).'">'.$row['nombres_tpro'].'</option>';//estoy agregando mas ocpiones de aceurdo a la fila con la informacion que estoy trayendod e la base de datos, 
					}
					$data->result = 1;
					$data->mensaje = 'regitros encontrados.';
					$data->inf = $inf;
				}else{
					$data->result = 2;
					$data->mensaje = 'no se encontraron registros activos.';
					$data->inf = NULL;
				}
			}else{
				$data->result = 0;
				$data->mensaje = 'No se ejecuto la consulta. Error: '.$_SESSION['Mysqli_Error'];
				$data->inf = NULL;
			}
			//--------------------------------
			mysqli_close($c1);//mysqli sirve para poder cerrar la conexion a la base de datos
			return $data;
		}
	}