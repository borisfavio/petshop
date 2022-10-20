<?php
	class Cargo{
		private $id;
		private $cargo;
		private $estado;

		public function __construct($i,$ca,$es){
			$this->id=$i;
			$this->cargo=$ca;
			$this->estado=$es;
		}

		public function grabarCargo(){
			include("conexion.php");
			$db = new Conexion();
			$sql = $db->query("INSERT INTO cargo(nombre_cargo, estado_cargo) VALUES ('$this->cargo','$this->estado')");
			return($sql);
		}

		public function listar(){
			require_once('conexion.php');
			// include("conexion.php");
			$db = new Conexion();
			$sql = $db->query("select * from cargo");
			return($sql);
		}

		public function listarCargo(){
			include("conexion.php");
			$db = new Conexion();
			$sql = $db->query("select * from cargo where estado_cargo = 1");
			return($sql);
		}

		public function listarCargoId(){
			include("conexion.php");
			$db = new Conexion();
			$sql = $db->query("select * from cargo where estado_cargo = 1 and id_cargo='$this->id'");
			return($sql);
		}

		public function buscarCargo(){
			require_once("conexion.php");
			$db = new Conexion();
			$sql = $db->query("SELECT * FROM cargo WHERE nombre_cargo LIKE '%$this->cargo%'");
			return($sql);
		}

		public function eliminarCargo(){
			include("conexion.php");
			$db = new Conexion();
			$sql = $db->query("DELETE FROM cargo WHERE id_cargo = '$this->id'");
			return($sql);
		}

		public function editarCargo($co,$no,$e){
			$db = new Conexion();
			$sql = $db->query("UPDATE cargo SET nombre_cargo='$no', estado_cargo='$e' where id_cargo = '$co'");
			return($sql);
		}

		public function reporte(){
			include("conexion.php");
			$db = new Conexion();
			$sql = $db->query("SELECT * FROM cargo");
			return($sql);
		}		


		//get and set
		public function setId($idc){
			$this->id=$idc;
		}

		public function getId(){
			return $this->id;
		}
		
		public function setCar($ca){
			$this->cargo=$ca;
		}

		public function getCar(){
			return $this->cargo;
		}

		
		public function setEst($es){
			$this->estado=$es;
		}

		public function getEst(){
			return $this->estado;
		}



		
	}



?>