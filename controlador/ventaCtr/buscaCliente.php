<?php
if (isset($_GET['term'])){

	$razon = $_GET['term'];
	require_once("../../modelo/clienteClase.php");
	$cli = new Cliente("",$razon,"","");
	$res = $cli->autocompleteCliente();
	// var_dump($res);
	// exit();
	// include("../../vista/ventas/ventaLista.php");


		// // include("../../modelo/ventaClase.php");
		// // $ven = new Venta("","","",);
		// // $res = $ven->autocompleteVenta();

		// include("../../modelo/clienteClase.php");
		// $cli = new Cliente("","","","");
		// $res = $cli->autocompleteCliente();
}


?>