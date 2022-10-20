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
                        <h3>VENTAS</h3>
                    </div>
                    <div class="col-xs-push-2 col-xs-2">
                        <a class="btn btn-md btn-primary pull-right" href="../../controlador/ventaCtr/ventaListaVentas.php"><b class="glyphicon glyphicon-shopping-cart"></b> Ver Ventas</a>
                    </div>
                </div>
            </div>
            <div class="panel-body">
                <form class="panel-body form-datos-comprobante" action="venta.php" method="post" role="form" data-toggle="validatos">
                    <input type="hidden" name="registrarVenta" value="agregar">
                    <input type="hidden" name="id_cli" value="" id="idc"/>
                    <input type="hidden" name="id_pro" value="" id="idp"/>
                    <div class="row">
                        <div class="col-xs-12">
                            <fieldset>
                                <legend>Datos</legend>
                                <div class="row">
                                    <div class="col-xs-1">
                                        <div class="form-group">
                                            <label>Añadir</label>
                                                <button id="anadir" type="button" class="btn btn-success" data-toggle="modal" data-target=".modal-operaciones"><i class="glyphicon glyphicon-plus"></i></button>
                                        </div>        
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>Nombre Cliente</label>
                                            <input id="cliente" name="cliente" class="form-control" type="text" placeholder="Ingrese el nombre del cliente" value="" required/>
                                        </div>
                                    </div>
                                    <div class="col-xs-5">
                                        <div class="form-group">
                                            <label>CI/NIT</label>
                                            <input id="nit" class="form-control" type="text" placeholder="CI/NIT" readonly="reandoly"/>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <div class="well well-lg">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <label>Nombre Producto</label>
                                        <input id="producto" name="producto" class="form-control producto" type="text" placeholder="Nombre del producto" />
                                    </div>
                                    <div class="col-xs-2 stock-cantidad text-center">
                                        <label>Stock</label><br>
                                        <!-- <input autocomplete="off" id="stock" name="stock" class="bol form-control cantidad" type="number" placeholder="Stock" readonly /> -->
                                        <button type="button" class="btn btn-primary" id="stock">0</button>
                                    </div>
                                    <div class="col-xs-2">
                                        <label>Cantidad</label>
                                        <input autocomplete="off" id="cantidad" name="cantidad" class="bol form-control cantidad" min="1" max="" type="number" placeholder="Cantidad"/>
                                    </div>
                                    <div class="col-xs-2">
                                        <label>Precio</label>
                                        <div class="input-group">
                                          <span class="input-group-addon" id="sizing-addon2">Bs/.</span>
                                          <input id="precio" name="precio" class="form-control precio" type="text" placeholder="Precio" readonly="reandoly"/>
                                        </div>
                                    </div>
                                    <div class="col-xs-1">
                                        <label>Carrito</label>
                                        <button id="addNew" type="button" class="btn btn-primary"><i class="glyphicon glyphicon-shopping-cart"></i></button>
                                    </div>
                                </div>            
                            </div>
                            <div class="table table-responsive">
                                <table class="table table-responsive table-striped table-bordered" id="tabla">
                                    <thead>
                                        <tr>
                                            <td class="col-xs-6 text-center"><strong>Nombre Producto</strong></td>
                                            <td class="col-xs-2 text-center"><strong>Cantidad</strong></td>
                                            <td class="col-xs-2 text-center"><strong>Precio</strong></td>
                                            <td class="col-xs-2 text-center"><strong>Total</strong></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                            <li class="list-group-item">
                                <div class="row text-right">
                                    <div class="col-xs-10 text-right">
                                        <h4>Total</h4>
                                    </div>
                                    <div class="col-xs-2">
                                        <div class="form-group">
                                            <div class="input-group"> 
                                                <input type="text" name="total-fila" class="form-control text-right input-lg total-fila" value="" required readonly="reandoly"/>
                                                <span class="input-group-addon">
                                                <strong>Bs.</strong>
                                                </span>
                                            </div>
                                        </div>    
                                    </div>
                                </div>
                            </li>
                            <div class="panel-body">
                                <button type="submit" class="btn btn-lg btn-success pull-right" style="margin-left: 10px;"><i class="glyphicon glyphicon-floppy-disk"></i> GUARDAR VENTA</button>
                                <a href="" target="_blank" class="btn btn-lg btn-default pull-right btn-comprobante" style="display: none;"><i class="glyphicon glyphicon-print"></i> IMPRIMIR VENTA</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Modal de Nuevo Cliente -->
<div class="modal fade modal-operaciones" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Clientes</h4>
            </div>
            <form class="form-datos-cliente" action="../clienteCtr/clienteModalRegistro.php" method="post">
                <input type="hidden" name="operacion" value="agregar"/>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12">
                            <div class="form-group">
                                <label for="nombre_cli" class="control-label">Razon Social <span class="text-danger">*</span></label>
                                <input type="text" name="nombre_cli" class="form-control cliente" required>
                                <span class="help-block with-errors"></span>
                            </div>
                            <div class="form-group">
                                <label for="nit_cli" class="control-label">CI/NIT <span class="text-danger">*</span></label>
                                <input type="text" name="nit_cli" class="form-control nit" required>
                                <span class="help-block with-errors"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-md" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-info btn-md"><i class="fa fa-check"></i>Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- fin modal -->
<?php
    include "../../vista/includes/footer.php";
?>