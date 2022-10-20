<?php
	include("../../modelo/categoriaClase.php");
	$cat = new Categoria("","","","");
	$res = $cat->reporte();
	// include("../reportes/reporte.php");
	include("../../vista/categorias/categoriaReporte.php");
?>