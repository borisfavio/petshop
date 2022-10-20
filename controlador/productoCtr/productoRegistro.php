<?php
		include_once("../../modelo/categoriaClase.php");
		$cate = new Categoria("","","","");

		include_once("../../modelo/proveedorClase.php");
		$prve = new Proveedor("","","","","","","");
	include("../../vista/productos/productoRegistro.php");
	if (isset($_POST["registrarProducto"]) and isset($_FILES['img']['name']) ){
		$cat = $_POST['cat'];
		$pro = $_POST['pro'];
		$nom = $_POST['nom'];
		$des = $_POST['des'];
		$coc = $_POST['coc'];
		$cov = $_POST['cov'];
		$sto = $_POST['sto'];
		$fec = $_POST['fec'];
		$est = 1;

			$a = $_FILES['img']['name'];
			$b = $_FILES['img']['tmp_name'];
		    $c = $_FILES['img']['size'];

   		include_once("../../modelo/productoClase.php");
		$produc = new Producto("","","","","","","","","","","");
		$verifica = $produc->verificaImagen($a);
		$nnlogo = explode(".", $a);
		$nn = $nnlogo[0].$verifica.".".$nnlogo[1];
		$produc = new Producto("",$cat,$pro,$nom,$des,$coc,$cov,$sto,$fec,$est,$nn);
		if ($verifica > 0) {
			$r = $produc->grabarProducto();
			if ($r) {
				@copy($b,"../../vista/productos/imagenesproducto/".$nn);
				echo "<script>
					alert('Datos Guardados con éxito');
					location.href='productoLista.php';
				</script>";
			}
		}else{
			$r = $produc->grabarProducto();
			if ($r) {
				@copy($b,"../../vista/productos/imagenesproducto/".$a);
				echo "<script>
					alert('Datos Guardados con éxito');
					location.href='productoLista.php';
				</script>";
			}		
		}
	}
?>