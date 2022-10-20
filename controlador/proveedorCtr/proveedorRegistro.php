<?php
	include("../../vista/proveedores/proveedorRegistro.php");
	if (isset($_POST["registrarProveedor"])) {

		$emp = $_POST['emp'];
		$con = $_POST['con'];
		$cor = $_POST['cor'];
		$tel = $_POST['tel'];
		$dir = $_POST['dir'];
		$est = 1;

		include("../../modelo/proveedorClase.php");
		$prov = new Proveedor("",$emp,$con,$cor,$tel,$dir,$est);
		$r = $prov->grabarProveedor();
		if ($r) {
			?>
			<script type="text/javascript">
				alert("Se registro correctamente");
				location.href="proveedorLista.php";
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