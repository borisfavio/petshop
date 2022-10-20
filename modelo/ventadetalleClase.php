<?php
	class Ventadetalle{
		public $idv;
		public $idp;
		public $can;
		public $cos;

		public function __construct($iv,$ip,$ca,$co){
			$this->idv=$iv;
			$this->idp=$ip;
			$this->can=$ca;
			$this->cos=$co;
		}

		public function grabarVentaDetalle(){
			require_once("conexion.php");
			$db = new Conexion();
			$sql = $db->query("INSERT INTO detalle_venta(id_venta,id_producto,cantidad,costo) VALUES ('$this->idv','$this->idp','$this->can','$this->cos')");
			return($sql);
		}

		

		//get and set
		public function setIdv($idve){
			$this->idv=$idve;
		}

		public function getIdv(){
			return $this->idv;
		}
		
		public function setIdpro($ip){
			$this->idp=$ip;
		}

		public function getIdpro(){
			return $this->idp;
		}

		
		public function setCan($ca){
			$this->can=$ca;
		}

		public function getCan(){
			return $this->can;
		}



		public function setCos($co){
			$this->cos=$co;
		}

		public function getCos(){
			return $this->cos;
		}



		
	}



?>