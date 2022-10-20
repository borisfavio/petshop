<?php
	session_start();
	if ($_SESSION['ingreso']!="si") {
		header("location:controlador/control.php?error=2");
	}
?>