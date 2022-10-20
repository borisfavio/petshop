<?php
	$id = $_GET['cod'];
	include("../../modelo/detalleClase.php");
	$dven = new Detalle($id,"","","");
	$res = $dven->getVentas();
	include("../../vista/ventas/listVen.php");
?>