<?php
		include("../../modelo/empleadoClase.php");
		$empleado = new Empleado("","","","","","","","","");

	include("../../vista/usuarios/usuarioRegistro.php");
	if (isset($_POST["registrarUsuario"])) {

		$ide = $_POST['emp'];
		$us = $_POST['usu'];
		$pa = md5($_POST['pass']);
		$ni = $_POST['niv'];
		$es = 1;
		include("../../modelo/usuarioClase.php");
		$usu = new Usuario("",$ide,$us,$pa,$ni,$es);
		$r = $usu->grabarUsuario();
		// var_dump($r);
		// exit();
		if ($r) {
			?>
			<script type="text/javascript">
				alert("Se registro correctamente");
				location.href="usuarioLista.php";
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