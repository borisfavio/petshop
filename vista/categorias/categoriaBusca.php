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
                            Listado de Categoria
                        </h3>
                    </div>
                    <div class="col-xs-push-2 col-xs-2">
                        <a class="btn btn-md btn-primary pull-right" href="../../controlador/categoriaCtr/categoriaRegistro.php"><b class="glyphicon glyphicon-user"></b> Ingresar Nuevo Categoria</a>
                    </div>
                </div>
            </div>
            <div class="panel-body">

                <form action="categoriaBuscar.php" method="post" class="form-horizontal">
                   
                    <div class="row">
                        <div class="col-md-10">
                            <input type="text" placeholder="" name="cat" class="form-control" value="">
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-primary" name="buscar">Buscar Categoria</button>
                        </div>   
                    </div>
                    <br>

                    <?php if (isset($_POST['buscar'])) { ?>

                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>ID Categoria</th>
                            <th>Nombre Categoria</th>
                            <th>Descripcion</th>
                            <th>Estado</th>
                            <th colspan="2">Operaciones</th>
                        </tr>
                    </thead>   
                    <?php
                        while($reg=mysqli_fetch_array($res)){
                            echo "<tr>";
                            echo "<td>".$reg['id_categoria']."</td>";
                            echo "<td>".$reg['nombre_categoria']."</td>";
                            echo "<td>".$reg['descripcion_categoria']."</td>";
                            echo "<td>".$reg['estado_categoria']."</td>";

                            echo "<td><a href='../../controlador/categoriaElimina.php?cod=".$reg['id_categoria']."' class='btn btn-danger'>Eliminar</a></td>";
                            echo "<td><a href='../../controlador/categoriaCtr/categoriaModifica.php?cod=".$reg['id_categoria']."' class='btn btn-warning'>Modificar</a></td>";


                            echo "</tr>";
                        }
                    }    
                    ?>
                </table>

                <td><a href="../../controlador/categoriaCtr/categoriaBusca.php" class="btn btn-primary">Buscar Categoria</a></td>
                <td><a href="../../controlador/categoriaCtr/categoriaReporte.php" target="_blank" class="btn btn-primary">Reporte</a></td>

            </div>
        </div>
    </div>
</section>
    
<?php
    include "../../vista/includes/footer.php";
?>