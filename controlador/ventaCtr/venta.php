<?php
	session_start();

	if(isset($_POST) and $_POST['registrarVenta'] == 'agregar'){
		date_default_timezone_set('America/La_Paz');
		$hoy = date('Y-m-d');
		$idcliente = $_POST['id_cli'];
		$idEmpleado = $_SESSION['id_emp'];
		$fechaventa = $hoy;
		include("../../modelo/ventaClase.php");
		$ven = new Venta("",$idcliente,$idEmpleado,$fechaventa);	
		if ($r = $ven->grabarVenta()){
			//ultimo id
   			$ventas_id = $ven->ultimoId(); 
		    $id_prod = $_POST['id_productos'];
		    $contar = count($id_prod);
            $cantidad = $_POST['cantidads'];
            $precio = $_POST['precios'];

			include("../../modelo/ventadetalleClase.php");
            $arr = array();
            for ($i=0; $i<$contar; $i++) {
				$ven_det = new Ventadetalle($ventas_id,$id_prod[$i],$cantidad[$i],$precio[$i]);
                $det = $ven_det->grabarVentaDetalle();

				$data = (array)$ven_det;
				array_push($arr,$data);
            }
            include("../../modelo/productoClase.php");
            $pro = new Producto("","","","","","","","","","","");
            $dato = $pro->listarProducto();

            while($data = mysqli_fetch_array($dato)){
				// var_dump($arr);
				foreach($arr as $key => $value){
					if ($data['id'] == $value['idp']) {
	            		$id = $data['id'];
	            		$cantidad = $data['stock'] - $value['can'];

	            		$resul = $pro->editarStockProducto($id,$cantidad);
	           		}	
				}
	        }

            $resp = array('resp' => 'ok', 'id_venta' => $ventas_id, 'id_cliente' => $idcliente);
            header('Content-Type: text/json');
            echo json_encode($resp);
		}else{
            $resp = array('resp' => 'error');
            header('Content-Type: text/json');
            echo json_encode($resp);
		}
	}
?>