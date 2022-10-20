<?php
if (isset($_POST['buscar'])){
	$buscar = $_POST['cli'];
	include("../../modelo/clienteClase.php");
	$cli = new Cliente("",$buscar,"","");
	$res = $cli->buscarCliente();
	include("../../vista/clientes/clienteBusca.php");
}	
?>