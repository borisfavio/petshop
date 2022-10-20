<?php
		//include("../../modelo/cargoClase.php");
		//$ca = new Cargo("","","");
	include("../../vista/categorias/categoriaRegistro.php");
	if (isset($_POST["registrarCategoria"])) {
		$nom = $_POST['nom'];
		$des = $_POST['des'];
		$est = 1;
		include("../../modelo/categoriaClase.php");
		$cat = new Categoria("",$nom,$des,$est);
		$r = $cat->grabarCategoria();
		// var_dump($r);
		// exit();
		if ($r) {
			?>
			<script type="text/javascript">
				alert("Se registro correctamente");
				location.href="categoriaLista.php";
			</script>
			<?php

		}else{
			?>
			<script type="text/javascript">
				alert("NO se registro");
			</script>
			<?php
		}

	}
	
	
	

?>