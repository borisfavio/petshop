
<header class="container">
    <div class="row">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="../../home.php">VENDEDOR</a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">  



                       
                    

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-file"></span> Clientes <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="../../controlador/clienteCtr/clienteLista.php"><span class="glyphicon glyphicon-list-alt"></span> Listar Cliente</a></li>
                                <li><a href="../../controlador/clienteReporte.php" target="blank"><span class="glyphicon glyphicon-list-alt"></span> Reporte Cliente</a></li>
                            </ul>
                        </li> 

                  


                        <li><a href="../../controlador/proveedorCtr/proveedorLista.php"><span class="glyphicon glyphicon-unchecked"></span> Proveedor</a></li>

                        <li><a href="../../controlador/productoCtr/productoLista.php"><span class="glyphicon glyphicon-tag"></span> Producto</a></li>

                        <li><a href="../../controlador/categoriaCtr/categoriaLista.php"><span class="glyphicon glyphicon-th-list"></span> Categoria</a></li>




                        <li><a href="../../controlador/ventaCtr/ventaLista.php"><span class="glyphicon glyphicon-shopping-cart"></span> Ventas</a></li>

                   
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <span class="glyphicon glyphicon-user" aria-hidden="true"></span> Hola! 
                            <?php echo $_SESSION['nombre'];?>
                            <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="usuarios/cambiar_clave.php">
                                <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span> Cambiar Contraseña</a>
                                </li>
                                <li class="divider"></li>                              
                                <li><a href="../../salir.php">
                                <span class="glyphicon glyphicon-off" aria-hidden="true"></span> Salir</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
