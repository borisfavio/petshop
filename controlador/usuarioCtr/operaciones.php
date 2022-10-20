<?php

	$cod = $_GET['id'];	
	
	include("../../modelo/usuarioClase.php");
	$usu = new Usuario($cod,"","","","","");

	if($_GET["desactivar"] == 1){
		if ($res = $usu->desactivarUsuario()) {
			?>
				<script type="text/javascript">
					alert("Se Desactivo");
					location.href='desactivadosLista.php';
				</script>
			<?php
		}

	}elseif($_GET["activar"] == 0){
		if ($res = $usu->activarUsuario()) {
			?>
				<script type="text/javascript">
					alert("Se Activo");
					location.href='usuarioLista.php';
				</script>
			<?php
		}
	}


?>