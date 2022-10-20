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
                            Registro de Usuario
                        </h3>
                    </div>
                    <div class="col-xs-push-2 col-xs-2">
                        <a class="btn btn-md btn-primary pull-right" href="../../controlador/usuarioCtr/usuarioLista.php"><b class="glyphicon glyphicon-user"></b> Volver a la Lista</a>
                    </div>
                </div>
            </div>
            <div class="panel-body">



                <form method="post">
            		<!-- <input type="hidden" name="registrarEmpleado"> -->



                    <label for="emp">Empleado *</label>
                    <select name="emp" id="emp" class="form-control">
                        <option value="">Seleccionar Empleado</option>
                        <?php
                            foreach ($empleado->listarEmpleado() as $em) {
                                echo '<option value="'.$em['id_empleado'].'">'.$em['nombre_completo'].'</option>';
                            }
                        ?>  
                    </select>

                    <br>
                    <label for="usu">Usuario*</label>
                    <input type="text" name="usu" id="usu" placeholder="" class="form-control"/>
                   	<br>
                    <label for="pass">Password *</label>
                    <input type="password" name="pass" id="pass" placeholder="" class="form-control"/>
                    <br>

                    <label for="niv">Nivel *</label>
                    <select name="niv" id="niv" class="form-control" >
                          <option value="">Seleccionar un Nivel</option>
                          <option value="1">Administrador</option>
                          <option value="2">Vendedor</option>
                     </select>

                    <br>

                    <button type="submit" name="registrarUsuario" class="btn btn-primary">Guardar</button>
                </form>



            </div>
        </div>
    </div>
</section>

<?php
    include "../../vista/includes/footer.php";
?>