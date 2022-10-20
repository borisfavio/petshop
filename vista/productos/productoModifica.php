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
                            Modificar Clientes
                        </h3>
                    </div>
                    <div class="col-xs-push-2 col-xs-2">
                        <a class="btn btn-md btn-primary pull-right" href="../../controlador/productoCtr/productoLista.php"><b class="glyphicon glyphicon-user"></b> Volver a la Lista</a>
                    </div>
                </div>
            </div>
            <div class="panel-body">


            <?php
                while($reg=mysqli_fetch_array($res)){
                    //var_dump($reg);

                    //exit();
                ?>

                <form action="productoModifica.php?cod=<?php echo $reg['id']; ?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="modificarProducto">
            		<input type="hidden" name="cod" value="<?php echo $reg['id']; ?>" >
                    
                    
                    <label for="catego">Categoria *</label>
                    <select name="cat" id="cat" class="form-control">
                        <option value="">Seleccionar Categoria</option>
                        <?php

                            foreach ($cate->listarCategoria() as $categoria) {

                                if($categoria['id_categoria'] == $reg['id_categoria']){
                                    echo '<option value="'.$categoria['id_categoria'].'" selected="selected">'.$categoria['nombre_categoria'].'</option>';
                                }else{
                                    echo '<option value="'.$categoria['id_categoria'].'">'.$categoria['nombre_categoria'].'</option>';
                                }
                               

                            }
                        ?>  
                    </select>
                    <br>
                    <label for="pro">Proveedor *</label>
                    <select name="pro" id="pro" class="form-control">
                        <option value="">Seleccionar Proveedor</option>
                        <?php
                            foreach ($prve->listarProveedor() as $provee) {
                                if($provee['id_proveedor'] == $reg['id_proveedor']){
                                    echo '<option value="'.$provee['id_proveedor'].'" selected="selected">'.$provee['empresa'].'</option>';
                                }else{
                                    echo '<option value="'.$provee['id_proveedor'].'">'.$provee['empresa'].'</option>';
                                }    
                            }
                        ?>  
                    </select>
                    <br>


                    <label for="nom">Nombre *</label>
                    <input type="text" name="nom" id="nom" placeholder="" class="form-control" value="<?php echo $reg['nombreproducto']; ?>"/>
                    <br>
                    <label for="des">Descripcion *</label>
                    <input type="text" name="des" id="des" placeholder="" class="form-control" value="<?php echo $reg['descripcion']; ?>"/>
                    <br>

                    <label for="coc">Costo Compra *</label>
                    <input type="text" name="coc" id="coc" placeholder="" class="form-control" value="<?php echo $reg['costocompra']; ?>"/>
                    <br>

                    <label for="cov">Costo Venta *</label>
                    <input type="text" name="cov" id="cov" placeholder="" class="form-control" value="<?php echo $reg['costoventa']; ?>"/>
                    <br>

                    <label for="sto">Stock *</label>
                    <input type="text" name="sto" id="sto" placeholder="" class="form-control" value="<?php echo $reg['stock']; ?>"/>
                    <br>

                    <label for="fec">Fecha *</label>
                    <input type="date" name="fec" id="fec" placeholder="" class="form-control" value="<?php echo $reg['fecha']; ?>"/>
                    <br>

                    <label for="img">Imagen *</label>
                    <input type="file" name="img" id="img" class="form-control"/>
                    <input type="hidden" name="img_old" value="<?php echo $reg['imagen_producto']?>">
                    <br>


                    <button type="submit" class="btn btn-primary">Modificar</button>
                </form>
            <?php
                }
            ?>


            </div>
        </div>
    </div>
</section>
    
<?php
    include "../../vista/includes/footer.php";
?>