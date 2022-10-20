<?php
	include("../../modelo/cargoClase.php");
	$car = new Cargo("","","");
	$res = $car->reporte();
	// include("../reportes/reporte.php");
	include("../../vista/cargos/cargoReporte.php");
?>