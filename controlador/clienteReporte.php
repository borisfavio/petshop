<?php
	include("../modelo/clienteClase.php");
	$cli = new Cliente("","","","");
	$res = $cli->reporte();
	include("../reportes/reporte.php");
?>