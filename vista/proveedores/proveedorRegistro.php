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
                            Registro de Proveedor
                        </h3>
                    </div>
                    <div class="col-xs-push-2 col-xs-2">
                        <a class="btn btn-md btn-primary pull-right" href="../../controlador/proveedorCtr/proveedorLista.php"><b class="glyphicon glyphicon-user"></b> Volver a la Lista</a>
                    </div>
                </div>
            </div>
            <div class="panel-body">



                <form method="post">
            		<input type="hidden" name="registrarProveedor">
                    <label for="emp">Empresa *</label>
                    <input type="text" name="emp" id="" placeholder="" class="form-control"/>
                   	<br>
                    <label for="con">Contacto *</label>
                    <input type="text" name="con" id="" placeholder="" class="form-control"/>
                    <br>
                    <label for="cor">Correo *</label>
                    <input type="text" name="cor" id="" placeholder="" class="form-control"/>
                    <br>
                    <label for="tel">Telefono *</label>
                    <input type="text" name="tel" id="" placeholder="" class="form-control"/>
                    <br>
                    <label for="dir">Direccion *</label>
                    <input type="text" name="dir" id="" placeholder="" class="form-control"/>
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