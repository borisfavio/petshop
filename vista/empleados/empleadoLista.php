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
                            Listado de Empleados
                        </h3>
                    </div>
                    <div class="col-xs-push-2 col-xs-2">
                        <a class="btn btn-md btn-primary pull-right" href="../../controlador/empleadoCtr/empleadoRegistro.php"><b class="glyphicon glyphicon-user"></b> Ingresar Nuevo Empleado</a>
                    </div>
                </div>
            </div>
            <div class="panel-body">



                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Nombre Empleado</th>
                            <th>CI</th>
                            <th>Direccion</th>
                            <th>Nombre Cargo</th>
                            <th colspan="2" class="text-center">Operaciones</th>
                        </tr>
                    </thead>   
                    <?php
                        while($reg=mysqli_fetch_array($res)){
                            echo "<tr>";
                            echo "<td>".$reg['nombre_completo']."</td>";
                            echo "<td>".$reg['ci_empleado']."</td>";
                            echo "<td>".$reg['direccion_empleado']."</td>";
                            echo "<td>".$reg['nombre_cargo']."</td>";

                            echo "<td><a href='../../controlador/empleadoCtr/empleadoElimina.php?cod=".$reg['id_empleado']."' class='btn btn-danger'>Eliminar</a></td>";
                            echo "<td><a href='../../controlador/empleadoCtr/empleadoModifica.php?cod=".$reg['id_empleado']."' class='btn btn-warning'>Modificar</a></td>";


                            echo "</tr>";
                        }
                    ?>
                </table>
                <td><a href="../../controlador/empleadoCtr/empleadoBusca.php" class="btn btn-primary">Buscar Empleado</a></td>
                <td><a href="../../controlador/empleadoCtr/empleadoReporte.php" target="blank" class="btn btn-primary">Reporte</a></td>

            </div>
        </div>
    </div>
</section>
    
<?php
    include "../../vista/includes/footer.php";
?>