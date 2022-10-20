<?php
	include("../../modelo/usuarioClase.php");
	$usu = new Usuario("","","","","","");
	$res = $usu->listarUsuarioDesactivado();
	include("../../vista/usuarios/desactivadoLista.php");
?>