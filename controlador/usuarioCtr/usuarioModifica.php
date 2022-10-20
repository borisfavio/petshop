<?php
		include("../../modelo/empleadoClase.php");
		$empleado = new Empleado("","","","","","","","","");

		
	$cod = $_GET['cod'];
	include("../../modelo/usuarioClase.php");
	$usu = new Usuario($cod,"","","","","");
	$res = $usu->listarUsuarioId();
	include("../../vista/usuarios/usuarioModifica.php");
	
	if (isset($_GET["modificar"])) {

		$idu = $_GET['cod'];
		$ide = $_GET['emp'];
		$us = $_GET['usu'];
		//$pa = md5($_GET['pass']);
		$ni = $_GET['niv'];
		$es = 1;

		$pas1 = $_GET['pass'];	
		$pass1 = $_GET['pass1'];
		if($pas1 != $pass1 ){
			$clave = md5($_GET['pass']);
		}else{
			$clave = $_GET['pass1'];
		}

		$r = $usu->editarUsuario($idu,$ide,$us,$clave,$ni,$es);
		if ($r) {
			echo "
			<script>
				alert('Si se modifico correctamente');
				location.href='usuarioLista.php';
			</script>";
		}else{
			echo "
			<script>
				alert('No se modifico');
			</script>";
		}

	}
?>