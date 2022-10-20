<?php
	$cod = $_GET['cod'];
	include("../../modelo/cargoClase.php");
	$car = new Cargo($cod,"","");
	$res = $car->listarCargoId();
	include("../../vista/cargos/cargoModifica.php");
	if (isset($_GET["modificar"])) {
		$ca = $_GET['cargo'];
		$r = $car->editarCargo($cod,$ca,1);
		if ($r) {
			echo "<script>
				alert('Si se modifico correctamente');
				location.href='cargoLista.php';
			</script>";
		}else{
			echo "
			<script>
				alert('No se modifico');
				location.href='cargoLista.php';
			</script>";
		}

	}
?>