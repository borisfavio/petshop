<?php
	$cod = $_GET['cod'];
	include("../../modelo/clienteClase.php");
	$cli = new Cliente($cod,"","","");
	$res = $cli->eliminarCliente();
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