<?php
if (isset($_POST['buscar'])){
	$buscar = $_POST['prove'];
	include("../../modelo/proveedorClase.php");
	$prov = new Proveedor("",$buscar,"","","","","");
	$res = $prov->buscarProveedor();
	include("../../vista/proveedores/proveedorBusca.php");
}	
?>