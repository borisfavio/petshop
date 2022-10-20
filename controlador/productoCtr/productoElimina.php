<?php
	$cod = $_GET['cod'];
	include("../../modelo/productoClase.php");
	$pro = new Producto($cod,"","","","","","","","","","");
	$res = $pro->eliminarProducto();
		if ($res) 
		{
			?>
				<script type="text/javascript">
					alert("Se elimino correctamente");

					location.href='productoLista.php';
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