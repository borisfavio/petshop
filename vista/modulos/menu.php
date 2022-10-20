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
                    <a class="navbar-brand" href="index.php">CORMESA </a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">   
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-th-list"></span> Productos <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="productos/index.php"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> Lista</a>
                                </li>
                                <li class="divider"></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-check"></span> Cargo <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="controlador/cargoLista.php"><span class="glyphicon glyphicon-warning-sign" aria-hidden="true"></span> Lista</a>
                                </li>
                                <li class="divider"></li>
                            </ul>
                        </li>
                        <li><a href="controlador/clienteLista.php"><span class="glyphicon glyphicon-user"></span> Clientes</a></li>
                        <li><a href="usuarios/index.php"><span class="glyphicon glyphicon-user"></span> Usuarios</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-file"></span> Reportes <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="reportes/dist-cli.php"><span class="glyphicon glyphicon-list-alt"></span> Reporte de Productos por Cliente</a></li>
                            </ul>
                        </li>                      
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <span class="glyphicon glyphicon-user" aria-hidden="true"></span> Hola! AAAA
                            <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="usuarios/cambiar_clave.php">
                                <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span> Cambiar Contraseña</a>
                                </li>
                                <li class="divider"></li>                              
                                <li><a href="login/logout.php">
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