<?php
	include("../../modelo/empleadoClase.php");
	$emp = new Empleado("","","","","","","","","");
	$res = $emp->listarEmpleado();
	include("../../vista/empleados/empleadoLista.php");
?>