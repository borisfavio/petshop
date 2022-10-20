<?php
	include_once("../../modelo/categoriaClase.php");
	$cate = new Categoria("","","","");

	include_once("../../modelo/proveedorClase.php");
	$prve = new Proveedor("","","","","","","");

	$cod = $_GET['cod'];
	include("../../modelo/productoClase.php");
	$produc = new Producto($cod,"","","","","","","","","","");
	$res = $produc->listarProductoId();

	include("../../vista/productos/productoModifica.php");
	

	if (isset($_POST["modificarProducto"])){
		$idp = $_POST['cod'];
		$cat = $_POST['cat'];
		$pro = $_POST['pro'];
		$nom = $_POST['nom'];
		$des = $_POST['des'];
		$coc = $_POST['coc'];
		$cov = $_POST['cov'];
		$sto = $_POST['sto'];
		$fec = $_POST['fec'];
		$est = 1;
		$old = $_POST['img_old'];
		
		if (!empty($_FILES['img']['name'])) {
			$a = $_FILES['img']['name'];
			$b = $_FILES['img']['tmp_name'];
		    $c = $_FILES['img']['size'];
	
			$pr = new Producto("","","","","","","","","","","");
			$verifica = $pr->verificaImagen($a);

			// var_dump($verifica);
			// exit();

			$nnlogo = explode(".", $a);
			$nn = $nnlogo[0].$verifica.".".$nnlogo[1];

			if ($verifica > 0) {
				$r = $produc->editarProducto($idp,$cat,$pro,$nom,$des,$coc,$cov,$sto,$fec,$est,$nn);
				if ($r) {
					@copy($b,"../../vista/productos/imagenesproducto/".$nn);
					echo "<script>
						alert('Datos actualizados con éxito 1');
						location.href='productoLista.php';
					</script>";
				}else{
					echo "<script>
						alert('No se pudieron actualizar los datos');
						location.href='productoLista.php';
					</script>";
				}
			}else{
				$r = $produc->editarProducto($idp,$cat,$pro,$nom,$des,$coc,$cov,$sto,$fec,$est,$a);
				if ($r) {
					@copy($b,"../../vista/productos/imagenesproducto/".$a);
					echo "<script>
						alert('Datos Guardados con éxito 3');
						location.href='productoLista.php';
					</script>";
				}
			}
		}else{
			$r = $produc->editarProducto($idp,$cat,$pro,$nom,$des,$coc,$cov,$sto,$fec,$est,$old);
			if ($r) {
				echo "<script>
					alert('Datos actualizados con éxito 2');
					location.href='productoLista.php';
				</script>";
			}else{
				echo "<script>
					alert('No se pudieron actualizar los datos');
					location.href='productoLista.php';
				</script>";
			}
		}
		


	}
?>