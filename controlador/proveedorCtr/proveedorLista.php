<?php
	include("../../modelo/proveedorClase.php");
	$prov = new Proveedor("","","","","","","");
	$res = $prov->listarProveedor();
	include("../../vista/proveedores/proveedorLista.php");
?>