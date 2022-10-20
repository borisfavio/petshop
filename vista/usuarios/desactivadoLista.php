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
                            Listado de Usuarios Desactivados
                        </h3>
                    </div>
                    <div class="col-xs-push-2 col-xs-2">
                        <a class="btn btn-md btn-primary pull-right" href="../../controlador/usuarioCtr/usuarioRegistro.php"><b class="glyphicon glyphicon-user"></b> Ingresar Nuevo Usuario</a>
                    </div>
                </div>
            </div>
            <div class="panel-body">



                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Empleado</th>
                            <th>Usuario</th>
                            <th>Estado</th>
                        </tr>
                    </thead>   
                    <?php
                        while($reg=mysqli_fetch_array($res)){
                            echo "<tr>";
                            echo "<td>".$reg['nombre_completo']."</td>";
                            echo "<td>".$reg['user']."</td>";


echo "<td><a onclick='return confirm(\"Desea Activar el Usuario?\")' href='../../controlador/usuarioCtr/operaciones.php?id=".$reg['id_usuario']."&desactivar=".$reg['estado']."' class='btn btn-xs btn-success'>Activar</a></td>";


                            echo "<td><a href='../../controlador/usuarioElimina.php?cod=".$reg['id_usuario']."' class='btn btn-danger'>Eliminar</a></td>";
                            echo "<td><a href='../../controlador/usuarioCtr/usuarioModifica.php?cod=".$reg['id_usuario']."' class='btn btn-warning'>Modificar</a></td>";


                            echo "</tr>";
                        }
                    ?>
                </table>

                <td><a href="../../controlador/usuarioCtr/clienteBusqueda.php" class="btn btn-primary">Buscar Usuario</a></td>
                <td><a href="../../controlador/usuarioCtr/desactivadosLista.php" class="btn btn-primary">Reporte</a></td>

            </div>
        </div>
    </div>
</section>
    
<?php
    include "../../vista/includes/footer.php";
?>