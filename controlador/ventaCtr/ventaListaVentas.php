<?php
	include("../../modelo/ventaClase.php");
	$ven = new Venta("","","","");
	$res = $ven->getV();
	include("../../vista/ventas/ventas.php");
?>