<?php
		// include_once("../../modelo/categoriaClase.php");
		// $cate = new Categoria("","","","");

		// include_once("../../modelo/proveedorClase.php");
		// $prve = new Proveedor("","","","","","","");
	
	//include("../../vista/productos/productoRegistro.php");
	if (isset($_POST["registrarProducto"]) AND isset($_FILES['img']['name']) ){
		$cat = $_POST['cat'];
		$pro = $_POST['pro'];
		$nom = $_POST['nom'];
		$des = $_POST['des'];
		$coc = $_POST['coc'];
		$cov = $_POST['cov'];
		$sto = $_POST['sto'];
		$fec = $_POST['fec'];
		var_dump($nom);
		


		exit();
		// $img = $_POST['img'];

		// if (isset($_FILES['img']['name'])) {
			$a = $_FILES['img']['name'];
			$b = $_FILES['img']['tmp_name'];
		    $c = $_FILES['img']['size'];
			
		// }

   		include_once("../../modelo/productoClase.php");
		$produc = new Producto("","","","","","","","","","","");
		$verifica = $produc->verificaImagen($a);

	}
	
	
	

?>