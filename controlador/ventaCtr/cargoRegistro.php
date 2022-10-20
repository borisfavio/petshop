<?php
	include("../../vista/cargos/cargoRegistro.php");
	if (isset($_POST["registrarCargo"])) {
		$ca = $_POST['cargo'];
		$es = 1;
		include("../../modelo/cargoClase.php");
		$car = new Cargo("",$ca,$es);
		$r = $car->grabarCargo();
		if ($r) {
			?>
			<script type="text/javascript">
				alert("Se registro correctamente");
				location.href="cargoLista.php";
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