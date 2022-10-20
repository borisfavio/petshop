<?php 
	include ("../vista/login.php");
	if (isset($_POST['ingresar'])) {
		$usr = $_POST['usr'];
		$pwd = $_POST['pwd'];
		// var_dump($pwd);exit();
		$pswd=md5($pwd);
		include ("../modelo/usuarioClase.php");
		$usr = new Usuario("","",$usr,$pswd,"","");
		$rs = $usr->verificar();
		if (mysqli_num_rows($rs) != 0) {
			session_start();
			$_SESSION['ingreso'] = 'si';
			if ($r = mysqli_fetch_array($rs)) {
				//var_dump($r);
				//exit();
				$_SESSION['id_emp'] = $r['id_empleado'];
				$_SESSION['nombre'] = $r['user'];
				$_SESSION['nivel'] = $r['nivel'];
			}
			header("Location:../home.php");
		}else{
			header("Location:../controlador/control.php?error=1");
		}
	}

?>