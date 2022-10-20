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
                        <a class="btn btn-md btn-primary pull-right" href="../../controlador/empleadoCtr/empleadoLista.php"><b class="glyphicon glyphicon-user"></b> Volver a la Lista</a>
                    </div>
                </div>
            </div>
            <div class="panel-body">


            <?php
                while($reg=mysqli_fetch_array($res)){
                    //var_dump($reg);

                    //exit();
                ?>

                <form action="empleadoModifica.php" method="get">
            		<input type="hidden" name="cod" value="<?php echo $reg[0]; ?>" >
                    
                    <label for="cargo">Cargo *</label>
                    <select name="cargo" id="cargo" class="form-control">
                        <option value="">Seleccionar Cargo</option>
                        <?php
                            foreach ($ca->listar() as $cargo) {
                              if($cargo['id_cargo'] == $reg['id_cargo']){
                                echo '<option value="'.$cargo['id_cargo'].'" selected="selected">'.$cargo['nombre_cargo'].'</option>';
                              }else{
                                  echo '<option value="'.$cargo['id_cargo'].'">'.$cargo['nombre_cargo'].'</option>';
                              }
                            }
                        ?>
                    </select>


                    <br>
                    <label for="ci">CI *</label>
                    <input type="text" name="ci" id="ci" placeholder="" class="form-control" value="<?php echo $reg['ci_empleado'] ?>" />
                    <br>
                    <label for="nom">Nombre Completo *</label>
                    <input type="text" name="nom" id="nom" placeholder="" class="form-control" value="<?php echo $reg['nombre_completo'] ?>"/>
                    <br>

                    <label for="dir">Direccion *</label>
                    <input type="text" name="dir" id="dir" placeholder="" class="form-control" value="<?php echo $reg['direccion_empleado'] ?>"/>
                    <br>

                    <label for="tel">Telefono *</label>
                    <input type="text" name="tel" id="tel" placeholder="" class="form-control" value="<?php echo $reg['telefono_empleado'] ?>"/>
                    <br>

                    <label for="fnac">Fecha Nacimineto *</label>
                    <input type="date" name="fnac" id="fnac" placeholder="" class="form-control" value="<?php echo $reg['fechanacimiento'] ?>"/>
                    <br>

                    <label for="gen">Genero *</label>
                  


                    <select name="gen" id="gen" class="form-control">
                        <option value="M" <?php if($reg['genero_empleado'] == 'M'){ echo "selected"; }?>>Masculino</option>
                        <option value="F" <?php if($reg['genero_empleado'] == 'F'){ echo "selected"; }?>>Femenino</option>
                    </select>


                    <br>


                    <button type="submit" class="btn btn-primary" name="modificar">Modificar</button>
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