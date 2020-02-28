<?php include "modulos/config.php"; ?>
     <?php $titulo  = "Bienvenido "; $mostrarMenu = true; include 'modulos/componentes/header.php';?>
     <div class="container-fluid" style="padding-right: 0;">
               <div class="row" style="margin-top:4rem;padding-right: 0; margin-right:0;">
                   <?php $mostrarBusqueda = true; include 'modulos/componentes/busqueda.php';?>
                        <div class="col-4">
                        <?php for( $i = 0 ; $i < 20; $i++):?>
                            <div class="card mt-3 ml-3 mr-2" style="width: 47rem; height: 30rem;">
                                <img class="card-img-top" src="<?php echo $raizN;?>img/1234.png" alt="Card image cap" style="width: 47rem;">
                                <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                            <?php endfor;?>   
                        </div>
                        <div class="col-4">
                            <div class="contenedor"  style="width: 18rem; position: fixed; margin-left: 22rem; margin-top: 1rem;">
                                <div class="card mt-1">
                                    <div class="card-header">
                                        Featured
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">Cras justo odio</li>
                                        <li class="list-group-item">Dapibus ac facilisis in</li>
                                        <li class="list-group-item">Vestibulum at eros</li>
                                    </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                      </div>
                    </div>
               </div>
        </div>
       
<?php include 'modulos/componentes/footer.php'; ?>
