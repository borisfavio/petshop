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
                            Modificar Usuarios
                        </h3>
                    </div>
                    <div class="col-xs-push-2 col-xs-2">
                        <a class="btn btn-md btn-primary pull-right" href="../../controlador/usuarioCtr/usuarioLista.php"><b class="glyphicon glyphicon-user"></b> Volver a la Lista</a>
                    </div>
                </div>
            </div>
            <div class="panel-body">


            <?php
                while($reg=mysqli_fetch_array($res)){
                    //var_dump($reg);

                    //exit();
                ?>

                <form action="usuarioModifica.php" method="get">
            		<input type="hidden" name="cod" value="<?php echo $reg[0]; ?>" >


                    <label for="emp">Empleado *</label>
                    <select name="emp" id="emp" class="form-control">
                        <option value="">Seleccionar Empleado</option>
                        <?php
                            foreach ($empleado->listarEmpleado() as $em) {

                                if($em['id_empleado'] == $reg['id_empleado']){
                                    echo '<option value="'.$em['id_empleado'].'" selected="selected">'.$em['nombre_completo'].'</option>';
                                }else{
                                    echo '<option value="'.$em['id_empleado'].'">'.$em['nombre_completo'].'</option>';
                                }


                            }
                        ?>  
                    </select>

                    <br>
                    <label for="usu">Usuario*</label>
                    <input type="text" name="usu" id="usu" placeholder="" class="form-control" value="<?php echo $reg['user'] ?>" />
                    <br>
                    <label for="pass">Password *</label>
                    <input type="password" name="pass" id="pass" placeholder="" class="form-control" value="<?php echo $reg['password'] ?>" />
                    <input type="hidden" name="pass1" id="pass1" class="form-control" value="<?php echo $reg['password']; ?>" />
                    <br>

                    <label for="niv">Nivel *</label>
                  

                        <select name="niv" id="niv" class="form-control" >
                            <option value="1" <?php if ($reg['nivel'] == "1" ) { echo "Selected"; } ?> >Administrador</option>
                            <option value="2" <?php if ($reg['nivel'] == "2" ) { echo "Selected"; } ?> >Vendedor</option>
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