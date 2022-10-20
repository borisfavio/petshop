<?php
	require_once("../../modelo/productoClase.php");
	$pro = new 	Producto("","","","","","","","","","","");
	$res = $pro->listarProducto();
	require_once("../../vista/productos/productoBusca.php");


?>