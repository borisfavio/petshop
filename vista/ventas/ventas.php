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
                            Listado de Ventas
                        </h3>
                    </div>
                    <div class="col-xs-push-2 col-xs-2">
                        <a class="btn btn-md btn-primary pull-right" href="../../controlador/ventaCtr/ventaLista.php"><b class="glyphicon glyphicon-user"></b> Regresar a ventas</a>
                    </div>
                </div>
            </div>
            <div class="panel-body">



                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>CODIGO</th>
                            <th>CLIENTE</th>
                            <th>FECHA</th>
                            <th>EMPLEADO</th>
                            <th>ACCIONES</th>
                        </tr>
                    </thead>   
                    <?php
                        while($reg=mysqli_fetch_array($res)){
                            echo "<tr>";
                            echo "<td>".$reg['id_venta']."</td>";
                            echo "<td>".$reg['nombre_cliente']."</td>";
                            echo "<td>".$reg['fecha_venta']."</td>";
                            echo "<td>".$reg['nombre_completo']."</td>";

                            echo "<td><a href='../../controlador/ventaCtr/ventaReporte.php?id=".$reg['id_venta']."&idc=".$reg['id_cliente']."' target='_blank' class='btn btn-warning'>Ver Ventas PDF</a></td>";


                            echo "</tr>";
                        }
                    ?>
                </table>



            </div>
        </div>
    </div>
</section>
    
<?php
    include "../../vista/includes/footer.php";
?>