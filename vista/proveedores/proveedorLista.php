<?php
    include_once "../../vista/includes/head.php";

    if($_SESSION['nivel'] == 1){
        include_once '../../vista/includes/menu1.php';
    }
    if($_SESSION['nivel'] == 2){
        include_once '../../vista/includes/menu2.php';
    }
?>
<section class="container">
    <div class="row">    
        <div class="panel panel-default">
            <div class="alert alert-success">
                <div class="row">
                    <div class="col-xs-8">
                        <h3>
                            Listado de Proveedores
                        </h3>
                    </div>
                    <div class="col-xs-push-2 col-xs-2">
                        <a class="btn btn-md btn-primary pull-right" href="../../controlador/proveedorCtr/proveedorRegistro.php"><b class="glyphicon glyphicon-user"></b> Ingresar Nuevo Proveedor</a>
                    </div>
                </div>
            </div>
            <div class="panel-body">



                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Empresa</th>
                            <th>Contacto</th>
                            <th>Email</th>
                            <th>Telefono</th>
                            <th>Direccion</th>
                        </tr>
                    </thead>   
                    <?php
                        while($reg=mysqli_fetch_array($res)){
                            echo "<tr>";
                            echo "<td>".$reg['empresa']."</td>";
                            echo "<td>".$reg['contacto']."</td>";
                            echo "<td>".$reg['mail']."</td>";
                            echo "<td>".$reg['telefono']."</td>";
                            echo "<td>".$reg['direccion']."</td>";

                            echo "<td><a href='../../controlador/proveedorCtr/proveedorElimina.php?cod=".$reg['id_proveedor']."' class='btn btn-danger'>Eliminar</a></td>";
                            echo "<td><a href='../../controlador/proveedorCtr/proveedorModifica.php?cod=".$reg['id_proveedor']."' class='btn btn-warning'>Modificar</a></td>";


                            echo "</tr>";
                        }
                    ?>
                </table>

               
                <td><a href="../../controlador/proveedorCtr/proveedorBusca.php" class="btn btn-primary">Buscar Proveedor</a></td>
                <td><a href="../../controlador/proveedorCtr/proveedorReporte.php" target="blank"  class="btn btn-primary">Reporte</a></td>

            </div>
        </div>
    </div>
</section>
    
<?php
    include "../../vista/includes/footer.php";
?>