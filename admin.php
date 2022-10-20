<?php
	include("../controlador/seguridad.php");
	if ($_SESSION['nivel'] == 1) {
		header("location:principal.php");
	}else{
		if ($_SESSION['nivel'] == 2) {
			header("location:principal2.php");
		}	
	}

?>