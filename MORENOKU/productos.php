<?php 
	/**
	 * 
	 */
	class productos extends database
	{
		private $table = 'productos';	
		private $id = "id_pro";
		//-------------------------------
		function add($c1,$dt){
			$data = new stdClass(); $inf = null;
			//----------------------------------
			function validarAdd($id_tp, $nombre_pro, $medida_pro, $id_um, $precio_pro, $stock_pro){
				$er = 1;
				if(is_null($id_tp)){ $er = 0; }
				if($id_tp < 1){ $er = 0; }
				if(is_null($nombre_pro)){ $er = 0; }
				if(is_null($medida_pro)){ $er = 0; }
				if(is_null($id_um)){ $er = 0; }
				if($id_um < 1){ $er = 0; }
				if(is_null($precio_pro)){ $er = 0; }
				if(is_null($stock_pro)){ $er = 0; }
				return $er;
			}
			//----------------------------------
			if(validarAdd($dt->id_tp, $dt->nombre_pro, $dt->medida_pro, $dt->id_um, $dt->precio_pro, $dt->stock_pro) == 1){
				$sql = "INSERT INTO ".$this->table." (id_tp, nombre_pro, marca_pro, medida_pro, id_um, precio_pro, stock_pro, created_at) VALUES (".$dt->id_tp.", '".$dt->nombre_pro."', '".$dt->marca_pro."', '".$dt->medida_pro."', ".$dt->id_um.", '".$dt->precio_pro."', '".$dt->stock_pro."', '".$dt->fecha."');";
				$res = mysqli_query($c1, $sql) OR $_SESSION['Mysqli_Error'] = (mysqli_error($c1));
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