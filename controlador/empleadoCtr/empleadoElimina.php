<?php
	$cod = $_GET['cod'];
	include("../../modelo/empleadoClase.php");
	$emp = new Empleado($cod,"","","","","","","","");
	$res = $emp->eliminarEmpleado();
		if ($res) 
		{
			?>
				<script type="text/javascript">
					alert("Se elimino");

					location.href='empleadoLista.php';
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