<?php
    include "../../vista/includes/head.php";
?>
<section class="container">
    <div class="row">    
        <div class="panel panel-default">
            <div class="alert alert-success">
                <div class="row">
                    <div class="col-xs-8">
                        <h3>
                            Modificar Cargo
                        </h3>
                    </div>
                    <div class="col-xs-push-2 col-xs-2">
                        <a class="btn btn-md btn-primary pull-right" href="../../controlador/cargoCtr/cargoLista.php"><b class="glyphicon glyphicon-user"></b> Volver a la Lista</a>
                    </div>
                </div>
            </div>
            <div class="panel-body">


            <?php
                while($reg=mysqli_fetch_array($res)){
                    // var_dump($reg);

                    // exit();
                ?>

                <form action="cargoModifica.php" method="get">
            		<input type="hidden" name="cod" value="<?php echo $reg[0]; ?>" >

                    <label for="cargo">Cargo *</label>
                    <input type="text" name="cargo" id="" placeholder="" class="form-control" value="<?php echo $reg['nombre_cargo']; ?>"/>

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