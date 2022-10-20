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
                            Registro de Producto
                        </h3>
                    </div>
                    <div class="col-xs-push-2 col-xs-2">
                        <a class="btn btn-md btn-primary pull-right" href="../../controlador/productoCtr/productoLista.php"><b class="glyphicon glyphicon-user"></b> Volver a la Lista</a>
                    </div>
                </div>
            </div>
            <div class="panel-body">



                <form method="post" enctype="multipart/form-data">
                    <input type="hidden" name="registrarProducto">

                    <label for="catego">Categoria *</label>
                    <select name="cat" id="cat" class="form-control">
                        <option value="">Seleccionar Categoria</option>
                        <?php
                            foreach ($cate->listarCategoria() as $categoria) {
                                echo '<option value="'.$categoria['id_categoria'].'">'.$categoria['nombre_categoria'].'</option>';
                            }
                        ?>  
                    </select>
                    <br>
                    <label for="pro">Proveedor *</label>
                    <select name="pro" id="pro" class="form-control">
                        <option value="">Seleccionar Proveedor</option>
                        <?php
                            foreach ($prve->listarProveedor() as $provee) {
                                echo '<option value="'.$provee['id_proveedor'].'">'.$provee['empresa'].'</option>';
                            }
                        ?>  
                    </select>
                    <br>


                    <label for="nom">Nombre *</label>
                    <input type="text" name="nom" id="nom" placeholder="" class="form-control"/>
                    <br>
                    <label for="des">Descripcion *</label>
                    <input type="text" name="des" id="des" placeholder="" class="form-control"/>
                    <br>

                    <label for="coc">Costo Compra *</label>
                    <input type="text" name="coc" id="coc" placeholder="" class="form-control"/>
                    <br>

                    <label for="cov">Costo Venta *</label>
                    <input type="text" name="cov" id="cov" placeholder="" class="form-control"/>
                    <br>

                    <label for="sto">Stock *</label>
                    <input type="text" name="sto" id="sto" placeholder="" class="form-control"/>
                    <br>

                    <label for="fec">Fecha *</label>
                    <input type="date" name="fec" id="fec" placeholder="" class="form-control"/>
                    <br>

                    <label for="img">Imagen *</label>
                    <input type="file" name="img" id="img" class="form-control" />
                    <br>







                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>



            </div>
        </div>
    </div>
</section>

<?php
    include "../../vista/includes/footer.php";
?>