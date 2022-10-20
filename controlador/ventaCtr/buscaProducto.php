<?php
	if (isset($_GET['term'])){
		$pro = $_GET['term'];
		require_once("../../modelo/productoClase.php");
		$pro = new Producto("","","",$pro,"","","","","","","");
		$respuesta = $pro->autocompleteProducto();
	}
?>