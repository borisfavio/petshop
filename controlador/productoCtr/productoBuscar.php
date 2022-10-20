<?php
if (isset($_POST['buscar'])){
	$buscar = $_POST['pro'];
	require_once("../../modelo/productoClase.php");
	$pro = new 	Producto("","","",$buscar,"","","","","","","");
	$res = $pro->buscarProducto();
	require_once("../../vista/productos/productoBusca.php");
}


?>