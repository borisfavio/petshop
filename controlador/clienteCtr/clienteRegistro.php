<?php
	include("../../vista/clientes/clienteRegistro.php");
	if (isset($_POST["registrarCliente"])) {
		$ni = $_POST['nit'];
		$rs = $_POST['razon'];
		$es = 1;
		include("../../modelo/clienteClase.php");
		$cli = new Cliente("",$rs,$ni,$es);
		$r = $cli->grabarCliente();
		if ($r) {
			?>
			<script type="text/javascript">
				alert("Se registro correctamente");
				location.href="clienteLista.php";
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