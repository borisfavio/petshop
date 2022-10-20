<?php
	include("../../modelo/usuarioClase.php");
	$usu = new Usuario("","","","","","");
	$res = $usu->reporte();
	// include("../reportes/reporte.php");
	include("../../vista/usuarios/usuarioReporte.php");
?>