<?php
	$cod = $_GET['cod'];
	include("../../modelo/categoriaClase.php");
	$cat = new Categoria($cod,"","","");
	$res = $cat->listarCategoriaId();
	include("../../vista/categorias/categoriaModifica.php");
	if (isset($_GET["modificar"])) {
		$no = $_GET['nom'];
		$de = $_GET['des'];
		$es = 1;
		$r = $cat->editarCategoria($cod,$no,$de,$es);
		if ($r) {
			echo "
			<script>
				alert('Si se modifico correctamente');
				location.href='categoriaLista.php';
			</script>";
		}else{
			echo "
			<script>
				alert('No se modifico');
			</script>";
		}

	}
?>