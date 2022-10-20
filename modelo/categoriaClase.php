<?php
	class Categoria{
		private $id;
		private $no;
		private $de;
		private $es;

		public function __construct($i,$n,$d,$e){
			$this->id=$i;
			$this->no=$n;
			$this->de=$d;
			$this->es=$e;
		}

		public function grabarCategoria(){
			include("conexion.php");
			$db = new Conexion();
			$sql = $db->query("INSERT INTO categoria(nombre_categoria, descripcion_categoria, estado_categoria) VALUES ('$this->no','$this->de','$this->es')");
			return($sql);
		}

		public function listarCategoria(){
			require_once("conexion.php");
			$db = new Conexion();
			$sql = $db->query("SELECT * FROM categoria WHERE estado_categoria = 1");
			return($sql);
		}

		public function listarCategoriaId(){
			require_once("conexion.php");
			$db = new Conexion();
			$sql = $db->query("select * from categoria where estado_categoria = 1 and id_categoria='$this->id'");
			return($sql);
		}

		public function buscarCategoria(){
			require_once("conexion.php");
			$db = new Conexion();
			$sql = $db->query("SELECT * FROM categoria WHERE nombre_categoria LIKE '%$this->no%'");
			return($sql);
		}

		public function eliminarCategoria(){
			include("conexion.php");
			$db = new Conexion();
			$sql = $db->query("delete from categoria where id_categoria = '$this->id'");
			return($sql);
		}

		public function editarCategoria($co,$no,$de){
			$db = new Conexion();
			$sql = $db->query("UPDATE categoria SET nombre_categoria='$no', descripcion_categoria='$de' where id_categoria = '$co'");
			return($sql);
		}

		public function reporte(){
			include("conexion.php");
			$db = new Conexion();
			$sql = $db->query("SELECT * FROM categoria");
			return($sql);
		}		


		//get and set
		public function setId($ide){
			$this->id=$ide;
		}

		public function getId(){
			return $this->id;
		}
		
		public function setNombre($nom){
			$this->no=$nom;
		}

		public function getNombre(){
			return $this->no;
		}

		public function setDescripcion($des){
			$this->de=$des;
		}

		public function getDescripcion(){
			return $this->de;
		}
		
		public function setEstado($est){
			$this->es=$est;
		}

		public function getEstado(){
			return $this->es;
		}



		
	}



?>