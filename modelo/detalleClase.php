<?php
	class Detalle{
		private $id_ven;
		private $id_pro;
		private $cant;
		private $cost;

		public function __construct($iv,$ip,$ca,$co){
			$this->id_ven=$iv;
			$this->id_pro=$ip;
			$this->cant=$ca;
			$this->cost=$co;
		}

		public function getVentas(){
			require_once("conexion.php");
			$db = new Conexion();
			$sql = $db->query("SELECT * 
				FROM detalle_venta dv 
				INNER JOIN venta v
				ON dv.id_venta = v.id_venta
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



		//get and set
		public function setIdve($idv){
			$this->id_ven=$idv;
		}

		public function getIdve(){
			return $this->id_ven;
		}
		
		public function setIdpr($idp){
			$this->id_pro=$idp;
		}

		public function getIdpr(){
			return $this->id_pro;
		}

		
		public function setCan($ca){
			$this->cant=$ca;
		}

		public function getCan(){
			return $this->cant;
		}

		public function setCos($cos){
			$this->cost=$cos;
		}

		public function getCos(){
			return $this->cost;
		}

		
	}



?>