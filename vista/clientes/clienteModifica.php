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
                        <a class="btn btn-md btn-primary pull-right" href="../../controlador/clienteCtr/clienteLista.php"><b class="glyphicon glyphicon-user"></b> Volver a la Lista</a>
                    </div>
                </div>
            </div>
            <div class="panel-body">


            <?php
                while($reg=mysqli_fetch_array($res)){
                    //var_dump($reg);

                    //exit();
                ?>

                <form action="clienteModifica.php" method="get">
            		<input type="hidden" name="cod" value="<?php echo $reg[0]; ?>" >
                    <label for="nombre_cli">Nit *</label>
                    <input type="text" name="nit" id="" placeholder="" class="form-control" value="<?php echo $reg['ci_cliente']; ?>" >
                   	<br>
                    <label for="telf">Razon Social *</label>
                    <input type="text" name="razon" id="" placeholder="" class="form-control" value="<?php echo $reg['nombre_cliente']; ?>" >
                          		
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