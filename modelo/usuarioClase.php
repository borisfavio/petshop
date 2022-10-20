<?php
	class Usuario{
		private $idUsuario;
		private $idEmpleado;
		private $usuario;
		private $password;
		private $nivel;
		private $estado;

		public function __construct($id_u,$id_e,$usu,$pass,$niv,$est){
			$this->idUsuario=$id_u;
			$this->idEmpleado=$id_e;
			$this->usuario=$usu;
			$this->password=$pass;
			$this->nivel=$niv;
			$this->estado=$est;
		}

		public function verificar(){
			include("conexion.php");
			$db = new Conexion();
			$sql = $db->query("SELECT * FROM usuarios WHERE user='$this->usuario' and password='$this->password'");
			return($sql);
		}

		public function grabarUsuario(){
			require_once("conexion.php");
			$db = new Conexion();
			$sql = $db->query("insert into usuarios(id_empleado, user, password, nivel, estado) values ('$this->idEmpleado','$this->usuario','$this->password','$this->nivel','$this->estado')");
			return($sql);
		}

		public function listarUsuario(){
			include("conexion.php");
			$db = new Conexion();
			$sql = $db->query("SELECT * FROM usuarios u
				INNER JOIN empleado e 
				ON u.id_empleado = e.id_empleado
				WHERE u.estado = 1
				");
			return($sql);
		}

		public function listarUsuarioDesactivado(){
			include("conexion.php");
			$db = new Conexion();
			$sql = $db->query("SELECT * FROM usuarios u
				INNER JOIN empleado e 
				ON u.id_empleado = e.id_empleado
				WHERE u.estado = 0
				");
			return($sql);
		}


		public function listarUsuarioId(){
			require_once("conexion.php");
			$db = new Conexion();
			$sql = $db->query("select * from usuarios where estado = 1 and id_usuario='$this->idUsuario'");
			return($sql);
		}

		public function buscarUsuario(){
			require_once("conexion.php");
			$db = new Conexion();
			$sql = $db->query("SELECT * FROM usuarios u
				INNER JOIN empleado e 
				ON u.id_empleado = e.id_empleado
				WHERE u.user LIKE '%$this->usuario%'");
			return($sql);
		}

		public function eliminarUsuario(){
			include("conexion.php");
			$db = new Conexion();
			$sql = $db->query("delete from usuarios where id = '$this->idUsuario'");
			return($sql);
		}

		public function editarUsuario($co,$ide,$u,$p,$n,$e){
			$db = new Conexion();
			$sql = $db->query("UPDATE usuarios SET id_empleado='$ide', user='$u', password='$p', nivel='$n', estado='$e' where id_usuario = '$co'");
			return($sql);
		}

		public function reporte(){
			include("conexion.php");
			$db = new Conexion();
			$sql = $db->query("SELECT * FROM usuarios u INNER JOIN empleado e ON u.id_empleado = e.id_empleado");
			return($sql);
		}		

		public function desactivarUsuario(){
			require_once("conexion.php");
			$db = new Conexion();
			$sql = $db->query("UPDATE usuarios SET estado = 0 WHERE id_usuario = '$this->idUsuario'");
			return($sql);
		}

		public function activarUsuario(){
			require_once("conexion.php");
			$db = new Conexion();
			$sql = $db->query("UPDATE usuarios SET estado = 1 WHERE id_usuario = '$this->idUsuario'");
			return($sql);
		}


		//get and set
		public function setIdUsu($idu){
			$this->idUsuario=$ide;
		}

		public function getIdUsu(){
			return $this->idUsuario;
		}
		
		public function setIdEmp($ide){
			$this->idEmpleado=$ide;
		}

		public function getIdEmp(){
			return $this->idEmpleado;
		}

		public function setUsuario($usu){
			$this->usuario=$usu;
		}

		public function getUsuario(){
			return $this->usuario;
		}
		
		public function setPassword($pass){
			$this->password=$pass;
		}

		public function getPassword(){
			return $this->password;
		}


		public function setNivel($niv){
			$this->nivel=$niv;
		}

		public function getNivel(){
			return $this->nivel;
		}

		public function setEstado($est){
			$this->estado=$est;
		}

		public function getEstado(){
			return $this->estado;
		}

		
	}



?>