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
                            Registro de Categoria
                        </h3>
                    </div>
                    <div class="col-xs-push-2 col-xs-2">
                        <a class="btn btn-md btn-primary pull-right" href="../../controlador/categoriaCtr/categoriaLista.php"><b class="glyphicon glyphicon-user"></b> Volver a la Lista</a>
                    </div>
                </div>
            </div>
            <div class="panel-body">



                <form method="post">
            		<input type="hidden" name="registrarCategoria">
                    <label for="nom">Nombre Categoria *</label>
                    <input type="text" name="nom" id="nom" placeholder="" class="form-control"/>
                   	<br>
                    <label for="des">Descripcion *</label>
                    <input type="text" name="des" id="des" placeholder="" class="form-control"/>
                          		
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