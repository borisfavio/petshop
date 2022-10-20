<?php
	include("../../modelo/usuarioClase.php");
	$usu = new Usuario("","","","","","");
	$res = $usu->listarUsuario();
	include("../../vista/usuarios/usuarioLista.php");
?>