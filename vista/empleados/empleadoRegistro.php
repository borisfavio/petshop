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
                            Registro de Empleados
                        </h3>
                    </div>
                    <div class="col-xs-push-2 col-xs-2">
                        <a class="btn btn-md btn-primary pull-right" href="../../controlador/empleadoCtr/empleadoLista.php"><b class="glyphicon glyphicon-user"></b> Volver a la Lista</a>
                    </div>
                </div>
            </div>
            <div class="panel-body">



                <form method="post">
            		<!-- <input type="hidden" name="registrarEmpleado"> -->



                    <label for="cargo">Cargo *</label>
                    <select name="cargo" id="cargo" class="form-control">
                        <option value="">Seleccionar Cargo</option>
                        <?php
                            // include("../../modelo/cargoClase.php");
                            // $ca = new Cargo("","","");
                            foreach ($ca->listar() as $cargo) {
                                echo '<option value="'.$cargo['id_cargo'].'">'.$cargo['nombre_cargo'].'</option>';
                            }
                            // while ($fila = mysqli_fetch_array($cargo)) {
                            //     echo '<option value="'.$fila['id_cargo'].'">'.$fila['nombre_cargo'].'</option>';
                            // }
                        ?>  
                    </select>


                    <br>
                    <label for="ci">CI *</label>
                    <input type="text" name="ci" id="ci" placeholder="" class="form-control"/>
                   	<br>
                    <label for="nom">Nombre Completo *</label>
                    <input type="text" name="nom" id="nom" placeholder="" class="form-control"/>
                    <br>

                    <label for="dir">Direccion *</label>
                    <input type="text" name="dir" id="dir" placeholder="" class="form-control"/>
                    <br>

                    <label for="tel">Telefono *</label>
                    <input type="text" name="tel" id="tel" placeholder="" class="form-control"/>
                    <br>

                    <label for="fnac">Fecha Nacimineto *</label>
                    <input type="date" name="fnac" id="fnac" placeholder="" class="form-control"/>
                    <br>

                    <label for="gen">Genero *</label>

                    <select name="gen" id="gen" class="form-control">
                        <option value="M">Masculino</option>
                        <option value="F">Femenino</option>
                    </select>
                    <br>







                    <button type="submit" name="registrarEmpleado" class="btn btn-primary">Guardar</button>
                </form>



            </div>
        </div>
    </div>
</section>

<?php
    include "../../vista/includes/footer.php";
?>