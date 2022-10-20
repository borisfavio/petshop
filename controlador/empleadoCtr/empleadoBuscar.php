<?php
if (isset($_POST['buscar'])){
	$buscar = $_POST['emp'];
	include("../../modelo/empleadoClase.php");
	$emp = new Empleado("","","",$buscar,"","","","","");
	$res = $emp->buscarEmpleado();
	include("../../vista/empleados/empleadoBusca.php");
}	
?>