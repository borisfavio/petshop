<?php
    include "../../vista/includes/head.php";
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
                        <a class="btn btn-md btn-primary pull-right" href="../../controlador/ventaCtr/ventaListaVentas.php"><b class="glyphicon glyphicon-user"></b> Regresar a ventas</a>
                    </div>
                </div>
            </div>
            <div class="panel-body">



                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>CLIENTE</th>
                            <th>PRODUCTO</th>
                            <th>CANTIDAD</th>
                            <th>COSTO</th>
                        </tr>
                    </thead>   
                    <?php
                        while($reg=mysqli_fetch_array($res)){
                            echo "<tr>";
                            echo "<td>".$reg['nombre_cliente']."</td>";
                            echo "<td>".$reg['nombreproducto']."</td>";
                            echo "<td>".$reg['cantidad']."</td>";
                            echo "<td>".$reg['costo']."</td>";
            
                     
                            //echo "<td><a href='../../controlador/ventaCtr/ventaModifica.php?cod=".$reg['id_venta']."' class='btn btn-success'>Reporte</a></td>";


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