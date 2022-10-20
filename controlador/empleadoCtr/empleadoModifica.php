<?php
		include_once("../../modelo/cargoClase.php");
		$ca = new Cargo("","","");

	$cod = $_GET['cod'];
	include("../../modelo/empleadoClase.php");
	$e = new Empleado($cod,"","","","","","","","");
	$res = $e->listarEmpleadoId();
	include("../../vista/empleados/empleadoModifica.php");
	



	if (isset($_GET["modificar"])) {
		$ide = $_GET['cod'];
		$idc = $_GET['cargo'];
		$ci = $_GET['ci'];
		$no = $_GET['nom'];
		$di = $_GET['dir'];
		$te = $_GET['tel'];
		$fn = $_GET['fnac'];
		$ge = $_GET['gen'];
		$es = 1;
		
		$r = $e->editarEmpleado($ide,$idc,$ci,$no,$di,$te,$fn,$ge,$es);
		if ($r) {
			echo "
			<script>
				alert('Si se modifico correctamente');
				location.href='empleadoLista.php';
			</script>";
		}else{
			echo "
			<script>
				alert('No se modifico');
			</script>";
		}

	}
?>