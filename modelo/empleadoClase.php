<?php
	require_once 'conexion.php';
	class Empleado{
		private $ide;
		private $idc;
		private $ci;
		private $nom;
		private $dir;
		private $tel;
		private $fec;
		private $gen;
		private $est;

		public function __construct($ie,$ic,$ci,$no,$di,$te,$fe,$ge,$es){
			$this->ide=$ie;
			$this->idc=$ic;
			$this->ci=$ci;
			$this->nom=$no;
			$this->dir=$di;
			$this->tel=$te;
			$this->fec=$fe;
			$this->gen=$ge;
			$this->est=$es;
		}

		public function grabarEmpleado(){
			//include_once("conexion.php");
			$db = new Conexion();
			$sql = $db->query("INSERT INTO empleado(id_cargo, ci_empleado, nombre_completo, direccion_empleado, telefono_empleado, fechanacimiento, genero_empleado, estado_empleado) VALUES ('$this->idc','$this->ci','$this->nom','$this->dir','$this->tel','$this->fec','$this->gen','$this->est')");
			return($sql);
		}

		public function listarEmpleado(){
			// include("conexion.php");
			$db = new Conexion();
			$sql = $db->query("SELECT * FROM empleado e INNER JOIN cargo c ON e.id_cargo = c.id_cargo WHERE e.estado_empleado = 1");
			return($sql);
		}

		public function listarEmpleadoId(){
			// include("conexion.php");
			$db = new Conexion();
			$sql = $db->query("SELECT * FROM empleado e INNER JOIN cargo c ON e.id_cargo = c.id_cargo WHERE estado_empleado = 1 AND id_empleado='$this->ide'");
			return($sql);
		}

		public function buscarEmpleado(){
			require_once("conexion.php");
			$db = new Conexion();
			$sql = $db->query("SELECT * FROM empleado e INNER JOIN cargo c ON e.id_cargo = c.id_cargo WHERE e.nombre_completo LIKE '%$this->nom%'");
			return($sql);
		}

		public function eliminarEmpleado(){
			// include("conexion.php");
			$db = new Conexion();
			$sql = $db->query("DELETE from empleado where id_empleado = '$this->ide'");
			return($sql);
		}

		public function editarEmpleado($ide,$idc,$c,$n,$d,$t,$f,$g,$e){
			$db = new Conexion();
			$sql = $db->query("UPDATE empleado SET 
				id_cargo='$idc', 
				ci_empleado='$c',
				nombre_completo='$n',
				direccion_empleado='$d',
				telefono_empleado='$t',
				fechanacimiento='$f',
				genero_empleado='$g',
				estado_empleado='$e' 
				where id_empleado = '$ide'");
			return($sql);
		}

		public function reporte(){
			// include("conexion.php");
			$db = new Conexion();
			$sql = $db->query("SELECT * FROM empleado e INNER JOIN cargo c ON e.id_cargo = c.id_cargo");
			return($sql);
		}		


		//get and set
		public function setIde($ide){
			$this->ide=$ide;
		}

		public function getIde(){
			return $this->ide;
		}

		public function setIdc($idc){
			$this->idc=$idc;
		}

		public function getIdc(){
			return $this->idc;
		}
		
		public function setCi($ci){
			$this->ci=$ci;
		}

		public function getCi(){
			return $this->ci;
		}

		public function setNom($no){
			$this->nom=$no;
		}

		public function getNom(){
			return $this->nom;
		}
		
		public function setDir($di){
			$this->dir=$di;
		}

		public function getDir(){
			return $this->dir;
		}


		public function setTel($te){
			$this->tel=$te;
		}

		public function getTel(){
			return $this->tel;
		}


		public function setFec($fe){
			$this->fec=$fe;
		}

		public function getFec(){
			return $this->fec;
		}


		public function setGen($ge){
			$this->gen=$ge;
		}

		public function getGen(){
			return $this->gen;
		}

		public function setEst($es){
			$this->est=$es;
		}

		public function getEst(){
			return $this->est;
		}


		
	}



?>
