<?php
	$cod = $_GET['cod'];
	include("../../modelo/categoriaClase.php");
	$cat = new Categoria($cod,"","","");
	$res = $cat->eliminarCategoria();
		if ($res) 
		{
			?>
				<script type="text/javascript">
					alert("Se elimino");

					location.href='clienteLista.php';
				</script>
			<?php
		}else{
			?>
				<script type="text/javascript">
					alert("No se elimino");
				</script>
			<?php
		}
?>