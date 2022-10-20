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
                            Listado de Clientes
                        </h3>
                    </div>
                    <div class="col-xs-push-2 col-xs-2">
                        <a class="btn btn-md btn-primary pull-right" href="../../controlador/clienteCtr/clienteRegistro.php"><b class="glyphicon glyphicon-user"></b> Ingresar Nuevo Cliente</a>
                    </div>
                </div>
            </div>
            <div class="panel-body">

                <form action="clienteBuscar.php" method="post" class="form-horizontal">
                   
                    <div class="row">
                        <div class="col-md-10">
                            <input type="text" placeholder="" name="cli" class="form-control" value="">
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-primary" name="buscar">Buscar Cliente</button>
                        </div>   
                    </div>
                    <br>

                    <?php if (isset($_POST['buscar'])) { ?>


                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>ID Cliente</th>
                            <th>Nit CI</th>
                            <th>Razon Social</th>
                        </tr>
                    </thead>   
                    <?php
                        while($reg=mysqli_fetch_array($res)){
                            echo "<tr>";
                            echo "<td>".$reg['id_cliente']."</td>";
                            echo "<td>".$reg['ci_cliente']."</td>";
                            echo "<td>".$reg['nombre_cliente']."</td>";

                            echo "<td><a href='../../controlador/clienteCtr/clienteElimina.php?cod=".$reg['id_cliente']."' class='btn btn-danger'>Eliminar</a></td>";
                            echo "<td><a href='../../controlador/clienteCtr/clienteModifica.php?cod=".$reg['id_cliente']."' class='btn btn-warning'>Modificar</a></td>";


                            echo "</tr>";
                        }
                    }    
                    ?>
                </table>

               
                <td><a href="../../controlador/clienteCtr/clienteBusca.php" class="btn btn-primary">Buscar Cliente</a></td>
                <td><a href="../../controlador/clienteCtr/clienteReporte.php" target="blank"  class="btn btn-primary">Reporte</a></td>

            </div>
        </div>
    </div>
</section>
    
<?php
    include "../../vista/includes/footer.php";
?>