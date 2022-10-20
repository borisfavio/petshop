<?php

require_once("seguridad.php");
class ControladorPlantilla{

	public function ctrPlantilla(){
		if ($_SESSION['nivel'] == 1) {
			// header("location:principal.php");
			// header("location:vista/plantilla.php");
			require_once "vista/plantilla.php";
		}else{
			if ($_SESSION['nivel'] == 2) {
				// header("location:principal2.php");
				require_once "vista/plantilla2.php";
			}	
		}

		// include "vista/plantilla.php";
	}
}



