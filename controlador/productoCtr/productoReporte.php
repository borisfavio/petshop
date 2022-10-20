<?php
	include("../../modelo/productoClase.php");
	$p = new Producto("","","","","","","","","","","");
	$respuesta = $p->reporte();
	// include("../../reportes/reporte.php");
	include("../../vista/productos/productoReporte.php");
?>