<?php
	include("../../modelo/productoClase.php");
	$pro = new 	Producto("","","","","","","","","","","");
	$res = $pro->listarProducto();
	include("../../vista/productos/productoLista.php");
?>