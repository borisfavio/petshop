<?php
	$cod = $_GET['id'];
	$idcli = $_GET['idc'];
	// var_dump($cod);
	include("../../modelo/ventaClase.php");
	$venta = new Venta($cod,$idcli,"","");
	$respuesta = $venta->reporteVenta();
	$res = $venta->reporteVenta();
	// var_dump($respuesta);
	
	// cliente
	// include("../../modelo/clienteClase.php");
	// $cliente = new Cliente($idcli,"","","");
	// $getcli = $cliente->getClienteId();

	include("../../vista/ventas/ventaReporte.php");
?>