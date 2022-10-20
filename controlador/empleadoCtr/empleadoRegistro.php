<?php
		include_once("../../modelo/cargoClase.php");
		$ca = new Cargo("","","");
		//$cargo = $ca->listar();
	
	include("../../vista/empleados/empleadoRegistro.php");
	if (isset($_POST["registrarEmpleado"])) {
		$idc = $_POST['cargo'];
		$ci = $_POST['ci'];
		$no = $_POST['nom'];
		$di = $_POST['dir'];
		$te = $_POST['tel'];
		$fn = $_POST['fnac'];
		$ge = $_POST['gen'];
		$es = 1;
		include("../../modelo/empleadoClase.php");
		$emp = new Empleado("",$idc,$ci,$no,$di,$te,$fn,$ge,$es);
		$r = $emp->grabarEmpleado();
		// var_dump($r);
		// exit();
		if ($r) {
			?>
			<script type="text/javascript">
				alert("Se registro correctamente");
				location.href="empleadoLista.php";
			</script>
			<?php

		}else{
			?>
			<script type="text/javascript">
				alert("NO se registro");
			</script>
			<?php
		}

	}
	
	
	

?>