<?php
if (isset($_POST['buscar'])){
	$buscar = $_POST['cat'];
	include("../../modelo/categoriaClase.php");
	$cat = new Categoria("",$buscar,"","","","","","","");
	$res = $cat->buscarCategoria();
	include("../../vista/categorias/categoriaBusca.php");
}
?>