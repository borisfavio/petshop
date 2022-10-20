<?php
	$cod = $_GET['cod'];
	include("../../modelo/clienteClase.php");
	$cli = new Cliente($cod,"","","");
	$res = $cli->listarClienteId();
	include("../../vista/clientes/clienteModifica.php");
	
	if (isset($_GET["modificar"])) {
		$ni = $_GET['nit'];
		$rs = $_GET['razon'];
		
		$r = $cli->editarCliente($cod,$ni,$rs);
		if ($r) {
			echo "
			<script>
				alert('Si se modifico correctamente');
				location.href='clienteLista.php';
			</script>";
		}else{
			echo "
			<script>
				alert('No se modifico');
			</script>";
		}

	}
?>