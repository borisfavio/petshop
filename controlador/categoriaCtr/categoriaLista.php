<?php
	include("../../modelo/categoriaClase.php");
	$cat = new Categoria("","","","","","","","","");
	$res = $cat->listarCategoria();
	include("../../vista/categorias/categoriaLista.php");
?>