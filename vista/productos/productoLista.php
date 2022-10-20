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
                            Listado de producto
                        </h3>
                    </div>
                    <div class="col-xs-push-2 col-xs-2">
                        <a class="btn btn-md btn-primary pull-right" href="../../controlador/productoCtr/productoRegistro.php"><b class="glyphicon glyphicon-user"></b> Ingresar Nuevo producto</a>
                    </div>
                </div>
            </div>
            <div class="panel-body">



                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Nombre Producto</th>
                            <th>Nombre Categoria</th>
                            <th>Nombre Proveedor</th>
                            <th>Costo Compra</th>
                            <th>Costo Venta</th>
                            <th>Stock</th>
                            <th>Imagen</th>
                            <th colspan="2" class="text-center">Operaciones</th>
                        </tr>
                    </thead>   
                    <?php
                        while($reg=mysqli_fetch_array($res)){
                            echo "<tr>";
                            echo "<td>".$reg['nombreproducto']."</td>";
                            echo "<td>".$reg['nombre_categoria']."</td>";
                            echo "<td>".$reg['empresa']."</td>";
                            echo "<td>".$reg['costocompra']."</td>";
                            echo "<td>".$reg['costoventa']."</td>";
                            echo "<td>".$reg['stock']."</td>";
                            echo "<td><img style='width:80px;' src='../../vista/productos/imagenesproducto/".$reg["imagen_producto"]."'></td>";
                            echo "<td><a href='../../controlador/productoCtr/productoElimina.php?cod=".$reg['id']."' class='btn btn-danger'>Eliminar</a></td>";
                            echo "<td><a href='../../controlador/productoCtr/productoModifica.php?cod=".$reg['id']."' class='btn btn-warning'>Modificar</a></td>";
                            echo "</tr>";
                        }
                    ?>
                </table>
                <td><a href="../../controlador/productoCtr/productoBusca.php" class="btn btn-primary">Buscar producto</a></td>
                <td><a href="../../controlador/productoCtr/productoReporte.php" target="blank" class="btn btn-primary">Reporte</a></td>

            </div>
        </div>
    </div>
</section>
    
<?php
    include "../../vista/includes/footer.php";
?>