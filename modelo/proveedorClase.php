<?php
	class Proveedor{
		private $idp;
		private $emp;
		private $con;
		private $mai;
		private $tel;
		private $dir;
		private $est;

		public function __construct($id,$em,$co,$ma,$te,$di,$es){
			$this->idp=$id;
			$this->emp=$em;
			$this->con=$co;
			$this->mai=$ma;
			$this->tel=$te;
			$this->dir=$di;
			$this->est=$es;
		}

		public function grabarProveedor(){
			include("conexion.php");
			$db = new Conexion();
			$sql = $db->query("insert into proveedor(empresa, contacto, mail, telefono, direccion, estado) values ('$this->emp','$this->con','$this->mai','$this->tel','$this->dir','$this->est')");
			return($sql);
		}

		public function listarProveedorId(){
			include("conexion.php");
			$db = new Conexion();
			$sql = $db->query("SELECT * FROM proveedor WHERE id_proveedor='$this->idp'");
			return($sql);
		}

		public function listarProveedor(){
			require_once("conexion.php");
			$db = new Conexion();
			$sql = $db->query("SELECT * FROM proveedor");
			return($sql);
		}

		// public function listarProductoId(){
		// 	require_once("conexion.php");
		// 	$db = new Conexion();
		// 	$sql = $db->query("SELECT * FROM producto WHERE id='$this->idp'");
		// 	return($sql);
		// }


		public function editarProveedor($id,$emp,$con,$cor,$tel,$dir,$est){
			$db = new Conexion();
			$sql = $db->query("UPDATE proveedor SET empresa='$emp', contacto='$con', mail='$cor', telefono='$tel', direccion='$dir', estado='$est' where id_proveedor = '$id'");
			return($sql);
		}

		public function eliminarProveedor(){
			include("conexion.php");
			$db = new Conexion();
			$sql = $db->query("delete from proveedor where id_proveedor = '$this->idp'");
			return($sql);
		}



		public function reporte(){
			include("conexion.php");
			$db = new Conexion();
			$sql = $db->query("SELECT * FROM proveedor");
			return($sql);
		}

		public function buscarProveedor(){
			require_once("conexion.php");
			$db = new Conexion();
			$sql = $db->query("SELECT * FROM proveedor WHERE empresa LIKE '%$this->emp%'");
			return($sql);
		}


		//get and set
		public function setIdpv($idpvv){
			$this->idpv=$idpvv;
		}

		public function getIdpv(){
			return $this->idpv;
		}

		public function setEmp($empl){
			$this->emp=$empl;
		}

		public function getEmp(){
			return $this->emp;
		}

		public function setCon($cont){
			$this->con=$cont;
		}

		public function getCon(){
			return $this->con;
		}

		public function setMail($ma){
			$this->mai=$ma;
		}

		public function getMail(){
			return $this->mai;
		}

		public function setTel($te){
			$this->tel=$te;
		}

		public function getTel(){
			return $this->tel;
		}

		public function setDir($di){
			$this->dir=$di;
		}

		public function getDir(){
			return $this->dir;
		}

		public function setEst($e){
			$this->est=$e;
		}
		
		public function getEst(){
			return $this->est;
		}

		
	}
?>