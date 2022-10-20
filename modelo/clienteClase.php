<?php
	class Cliente{
		private $id;
		private $nit;
		private $razon;
		private $estado;

		protected $last_id;

		public function __construct($i,$ra,$n,$es){
			$this->id=$i;
			$this->razon=$ra;
			$this->nit=$n;
			$this->estado=$es;
		}

		public function autocompleteCliente(){
			include("conexion.php");
			$db = new Conexion();
			$datos = array();
			    $sql = $db->query("SELECT * FROM cliente WHERE nombre_cliente LIKE '%".$this->razon."%' ");
			    while($row = mysqli_fetch_array($sql)){
			        $datos[] = array("value" => $row['nombre_cliente'],
			                          "ci" => $row['ci_cliente'],
			                         "idc" => $row['id_cliente']
			                        );
			    }
				header('Content-Type: text/json; charset=UTF-8');
				echo json_encode($datos); 
		}

		public function autocompleteProducto(){
			include("conexion.php");
			$db = new Conexion();
			$datos = array();
			    $sql = $db->query("SELECT * FROM producto WHERE nombreproducto LIKE '%".$this->razon."%' ");
			    while($row = mysqli_fetch_array($sql)){
			        $datos[] = array("value" => $row['nombre_cliente'],
			                          "ci" => $row['ci_cliente'],
			                         "idc" => $row['id_cliente']
			                        );
			    }
				header('Content-Type: text/json; charset=UTF-8');
				echo json_encode($datos); 
		}


		public function ultimoId(){
			return $this->last_id;
		}
		
		public function grabarCliente(){
			include("conexion.php");
			$db = new Conexion();
			$sql = $db->query("insert into cliente(nombre_cliente, ci_cliente, estado_cliente) values ('$this->razon','$this->nit','$this->estado')");
			$this->last_id = mysqli_insert_id($db);
			return($sql);
		}

		public function listarCliente(){
			include("conexion.php");
			$db = new Conexion();
			$sql = $db->query("select * from cliente where estado_cliente = 1");
			return($sql);
		}

		public function listarClienteId(){
			include("conexion.php");
			$db = new Conexion();
			$sql = $db->query("SELECT * FROM cliente WHERE estado_cliente = 1 and id_cliente='$this->id'");
			return($sql);
		}


		public function getClienteId(){
			require_once("conexion.php");
			$db = new Conexion();
			$sql = $db->query("SELECT * FROM cliente WHERE id_cliente='$this->id'");
			return($sql);
		}

		public function buscarCliente(){
			require_once("conexion.php");
			$db = new Conexion();
			$sql = $db->query("SELECT * FROM cliente WHERE nombre_cliente LIKE '%$this->razon%'");
			return($sql);
		}

		public function eliminarCliente(){
			include("conexion.php");
			$db = new Conexion();
			$sql = $db->query("delete from cliente where id_cliente = '$this->id'");
			return($sql);
		}

		public function editarCliente($co,$n,$rs){
			$db = new Conexion();
			$sql = $db->query("UPDATE cliente SET nombre_cliente='$rs', ci_cliente='$n' where id_cliente = '$co'");
			return($sql);
		}

		public function reporte(){
			include("conexion.php");
			$db = new Conexion();
			$sql = $db->query("select * from cliente where estado_cliente = 1 ");
			return($sql);
		}		


		//get and set
		public function setId($ide){
			$this->id=$ide;
		}

		public function getId(){
			return $this->id;
		}
		
		public function setNit($ni){
			$this->nit=$ni;
		}

		public function getNit(){
			return $this->nit;
		}

		public function setRazon($ra){
			$this->razon=$ra;
		}

		public function getRazon(){
			return $this->razon;
		}
		
		public function setEstado($es){
			$this->estado=$es;
		}

		public function getEstado(){
			return $this->estado;
		}



		
	}



?>