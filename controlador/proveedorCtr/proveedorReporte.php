<?php
	include("../../modelo/proveedorClase.php");
	$prv = new Proveedor("","","","","","","");
	$res = $prv->reporte();
	// include("../reportes/reporte.php");
	include("../../vista/proveedores/proveedorReporte.php");
?>