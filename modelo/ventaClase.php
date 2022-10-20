<?php
	class Venta{
		private $id_ven;
		private $id_cli;
		private $id_emp;
		private $fecha_ven;

		protected $last_id;
		
		public function __construct($iv,$ic,$ie,$fv){
			$this->id_ven=$iv;
			$this->id_cli=$ic;
			$this->id_emp=$ie;
			$this->fecha_ven=$fv;
		}

		public function grabarVenta(){
			require_once("conexion.php");
			$db = new Conexion();
			$sql = $db->query("INSERT INTO venta(id_cliente, id_empleado, fecha_venta) VALUES ('$this->id_cli','$this->id_emp','$this->fecha_ven')");
			$this->last_id = mysqli_insert_id($db);
			return($sql);
		}


		public function ultimoId(){
			return $this->last_id;
		}



		public function listarCargo(){
			include("conexion.php");
			$db = new Conexion();
			$sql = $db->query("SELECT * FROM venta");
			return($sql);
		}

		public function reporteVenta(){
			require_once("conexion.php");
			$db = new Conexion();
			$sql = $db->query("SELECT * 
				FROM venta v 

				INNER JOIN detalle_venta dv 
				ON v.id_venta = dv.id_venta

				INNER JOIN producto p 
				ON dv.id_producto = p.id

				INNER JOIN cliente c 
				ON v.id_cliente = c.id_cliente

				WHERE v.id_venta = '$this->id_ven' AND 
				v.id_cliente = '$this->id_cli' ");
			return($sql);
		}

		public function getVentas(){
			require_once("conexion.php");
			$db = new Conexion();
			$sql = $db->query("SELECT * 
				FROM venta v 
				INNER JOIN detalle_venta dv 
				ON v.id_venta = dv.id_venta
				INNER JOIN cliente cl 
				ON v.id_cliente = cl.id_cliente
				INNER JOIN empleado emp
				ON v.id_empleado = emp.id_empleado
     			INNER JOIN producto pro
				ON dv.id_producto = pro.id

				WHERE dv.id_venta = '$this->id_ven'
				ORDER BY v.fecha_venta ASC
				");
			return($sql);
		}


		public function getV(){
			require_once("conexion.php");
			$db = new Conexion();
			$sql = $db->query("SELECT * 
				FROM venta v 
				INNER JOIN cliente cl 
				ON v.id_cliente = cl.id_cliente
				INNER JOIN empleado emp
				ON v.id_empleado = emp.id_empleado
				ORDER BY v.fecha_venta ASC
				");
			return($sql);
		}




		//get and set
		public function setIdv($idv){
			$this->id_ven=$idv;
		}

		public function getIdv(){
			return $this->id_ven;
		}
		
		public function setIdc($idc){
			$this->id_cli=$idc;
		}

		public function getIdc(){
			return $this->id_cli;
		}

		
		public function setIde($ide){
			$this->id_emp=$ide;
		}

		public function getIde(){
			return $this->id_emp;
		}

		public function setFec($fc){
			$this->fecha_ven=$fc;
		}

		public function getFec(){
			return $this->fecha_ven;
		}

		
	}



?>