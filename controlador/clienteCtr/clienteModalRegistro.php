<?php
	if(isset($_POST) and $_POST['operacion'] == 'agregar'){
		$ni = $_POST['nit_cli'];
		$rs = $_POST['nombre_cli'];
		$es = 1;
		include("../../modelo/clienteClase.php");
		$cli = new Cliente("",$rs,$ni,$es);
		if ($r = $cli->grabarCliente()) {
            $resp = array(
                'respuesta'      => 'ok',
                'id_cliente'     => $cli->ultimoId(),
                'nombre_cliente' => $_POST['nombre_cli']
            );
            header('Content-Type: text/json');
            echo json_encode($resp);

		}else{
	        $resp = array(
                'respuesta'      => 'error'
            );
            header('Content-Type: text/json');
            echo json_encode($resp);
		}

	}
?>