<?php
	$cod = $_GET['cod'];
	include("../../modelo/proveedorClase.php");
	$prov = new Proveedor($cod,"","","","","","");
	$res = $prov->eliminarProveedor();
		if ($res) 
		{
			?>
				<script type="text/javascript">
					alert("Se elimino");

					location.href='proveedorLista.php';
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