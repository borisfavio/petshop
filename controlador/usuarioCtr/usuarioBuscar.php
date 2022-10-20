<?php
if (isset($_POST['buscar'])){
	$buscar = $_POST['usu'];
	include("../../modelo/usuarioClase.php");
	$usu = new Usuario("","",$buscar,"","","");
	$res = $usu->buscarUsuario();
	include("../../vista/usuarios/usuarioBusca.php");
}
?>