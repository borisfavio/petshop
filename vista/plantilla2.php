<?php
    // include ("seguridad.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>index</title>
	<link rel="stylesheet" type="text/css" href="vista/assets/css/estilos.css">
	<!-- <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css"> -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.cerulean.css">
</head>
<body>


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
                    <a class="navbar-brand" href="home.php">VENDEDOR</a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav"> 

                    
                        
                
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-file"></span> Clientes <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="controlador/clienteCtr/clienteLista.php"><span class="glyphicon glyphicon-list-alt"></span> Listar Cliente</a></li>
                                <li><a href="controlador/clienteReporte.php" target="blank"><span class="glyphicon glyphicon-list-alt"></span> Reporte Cliente</a></li>
                            </ul>
                        </li> 

                       


                        <li><a href="controlador/proveedorCtr/proveedorLista.php"><span class="glyphicon glyphicon-unchecked"></span> Proveedor</a></li>

                        <li><a href="controlador/productoCtr/productoLista.php"><span class="glyphicon glyphicon-tag"></span> Producto</a></li>

                        <li><a href="controlador/categoriaCtr/categoriaLista.php"><span class="glyphicon glyphicon-th-list"></span> Categoria</a></li>


                        <li><a href="controlador/ventaCtr/ventaLista.php"><span class="glyphicon glyphicon-shopping-cart"></span> Ventas</a></li>



                       <!-- <li><a href="usuarios/index.php"><span class="glyphicon glyphicon-user"></span> Usuarios</a></li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-file"></span> Reportes <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="controlador/clienteReporte.php" target="blank"><span class="glyphicon glyphicon-list-alt"></span> Reporte Cliente</a></li>
                            </ul>
                        </li> 
                        -->
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
                                <li><a href="salir.php">
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

<section class="container">
    <div class="row">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h4 class="panel-title text-center"><strong>SISTEMA DE VENTAS</strong></h4>
            </div>
            <div class="panel-body">
                <div class="row">
                    <!-- Carousel -->
                    <div class="col-xs-12 col-md-6">
                        <h2 class="text-center text-primary">PET SHOP</h2>
                        <h5 class="text-center text-info">TIENDA DE MASCOTAS</h5>
                        <br/>   

                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <!-- Indicadores -->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            </ol>

                            <!-- Contenedor para Slides-->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="assets/images/carousel/inicio.jpg" alt="" class="img-responsive">
                                    <div class="carousel-caption">Pet Shop</div>
                                </div>
                                <div class="item">
                                    <img src="assets/images/carousel/inicio2.jpg" alt="" class="img-responsive">
                                    <div class="carousel-caption">Oficinas</div>
                                </div>
                            </div>

                            <!-- Controles -->
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>


                    </div>
                    <div class="col-xs-12 col-md-6">                  
                        <div class="row">
                            <img src="assets/images/carousel/huella.jpg" alt="" class="img-responsive huella"/>
                           <div class="caja-menu text-center bg-gris">
                                <h2 class="text-center"><strong>S I S P E T</strong></h2>
                                <h4 class="text-center">Sistema de Ventas</h4>

                                <strong>Autor</strong>

                                <p>Ariel Ramos Paucara</p>
                                <p>Boris Quispe Santos</p>
                                <strong>Tecnologías de Desarrollo</strong>
                                <p>HTML5, CSS3, Javascript, Ajax, PHP, MySQL</p>
                                <strong>Herramientas de Desarrollo</strong>
                                <p>Sublime Text 3(Editor de Código), MySQL Workbench(Gestor gráfico de base de datos MySQL)</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<style type="text/css">
    .bg-gris{
        background-color: #E0E0E4;
    }
    a.caja-menu{
        text-decoration: none;
        color: #FFF;
    }
    .caja-menu{
        font-size: 18px;
        /*background-color: #c7254e;*/
        display: block;
        border-radius: 3px;
        width: 100%;
        padding: 15px;
        margin-top: 10px;
        margin-bottom: 10px;
    }
    div.caja-menu{
        text-align: left;
    }
    a.caja-menu:hover{
        opacity: 0.8;
    }

    .huella {
        width: 100px;
        margin: auto;
    }
</style>

	<!-- <script type="text/javascript" src="vista/assets/js/scripts.js"></script> -->

    <script src="assets/js/jquery-2.2.3.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>