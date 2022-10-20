<?php
	$cod = $_GET['cod'];
	include("../../modelo/proveedorClase.php");
	$prov = new Proveedor($cod,"","","","","","");
	$res = $prov->listarProveedorId();
	include("../../vista/proveedores/proveedorModifica.php");
	
	if (isset($_GET["modificar"])) {
		$idp = $_GET['cod'];
		$emp = $_GET['emp'];
		$con = $_GET['con'];
		$cor = $_GET['cor'];
		$tel = $_GET['tel'];
		$dir = $_GET['dir'];
		$est = 1;
		
		$r = $prov->editarProveedor($idp,$emp,$con,$cor,$tel,$dir,$est);
		if ($r) {
			echo "
			<script>
				alert('Si se modifico correctamente');
				location.href='proveedorLista.php';
			</script>";
		}else{
			echo "
			<script>
				alert('No se modifico');
			</script>";
		}

	}
?>