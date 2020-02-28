<?php include "../config.php"; ?>
<?php $titulo  = "Bienvenido "; $mostrarMenu = true; include '../componentes/header.php';?>
        <div class="container-fluid" style="padding-right: 0;">
               <div class="row" style="margin-top:4rem;padding-right: 0; margin-right:0;">
                    <?php $mostrarBusqueda = true; include '../componentes/busqueda.php';?>
                    <div class="row" style="margin-left: 12rem;">
                              <?php for( $i = 0 ; $i < 20; $i++):?>
                                   <div class="coll col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                        <div class="card text-white mt-3">
                                                  <div class="row contenedor">
                                                       <div class="col-12">
                                                            <div class="btn-group pull-xs-right float-right mr-2" style="color:black;">
                                                                 <button class="btn bmd-btn-icon dropdown-toggle" type="button" id="mw1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                 <i class="material-icons">...</i>
                                                                 </button>
                                                                 <div class="dropdown-menu" aria-labelledby="mw1">
                                                                      <button class="dropdown-item" type="button">A</button>
                                                                      <button class="dropdown-item" type="button">B</button>
                                                                 </div>
                                                            </div>
                                                       </div>
                                                       <a href="<?php echo $raizN;?>modulos/paginas/informacion-prod.php"><img class="card-img-top ml-4" src="<?php echo $raizN;?>img/lemon.jpg" alt="Card image cap" style="width: 13rem; "></i></a>
                                                       <div class="card-img-overlay">
                                                            <p class="card-text mt-3"><span class="badge badge-info">$400</span></p>
                                                            <a href="" class="card-title h5">Card title</a>
                                                            <small class="card-p text-muted card-text mt-2">Last updated 3 mins ago</small>
                                                       </div>
                                             </div>
                                        </div>
                                   </div>
                              <?php endfor;?>
          </div>

                    </div>
               </div>
        </div>
<?php include '../componentes/footer.php'; ?>
