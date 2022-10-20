<?php
	$cod = $_GET['cod'];
	include("../../modelo/cargoClase.php");
	$car = new Cargo($cod,"","");
	// var_dump($car);

	// echo '<pre>',print_r($car),'</pre>';
	// exit();
	$res = $car->eliminarCargo();
		if ($res) 
		{
			?>
				<script type="text/javascript">
					alert("Se elimino");

					location.href='cargoLista.php';
				</script>
			<?php
		}else{
			?>
				<script type="text/javascript">
					alert("No se elimino");
				</script>
			<?php
		}
?>