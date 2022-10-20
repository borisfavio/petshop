<?php
	include("../../modelo/empleadoClase.php");
	$e = new Empleado("","","","","","","","","");
	$respuesta = $e->reporte();
	// include("../../reportes/reporte.php");
	include("../../vista/empleados/empleadoReporte.php");
?>