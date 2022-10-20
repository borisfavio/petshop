<?php
if (isset($_POST['buscar'])){
	$buscar = $_POST['car'];
	include("../../modelo/cargoClase.php");
	$car = new Cargo("",$buscar,"");
	$res = $car->buscarCargo();
	include("../../vista/cargos/cargoBusca.php");
}
?>