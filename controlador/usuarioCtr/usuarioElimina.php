<?php
	$cod = $_GET['cod'];
	include("../../modelo/usuarioClase.php");
	$usu = new Usuario($cod,"","","","","");
	$res = $usu->eliminarUsuario();
		if ($res) 
		{
			?>
				<script type="text/javascript">
					alert("Se elimino");

					location.href='usuarioLista.php';
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