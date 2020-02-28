        <?php if( $mostrarBusqueda ): ?>
            <div class="col-lg-2 col-md-3 buscador" style="padding-left: 0;
                padding-right: 0;">
                    <div class="contenedor-menu" style="position: fixed; margin-left: 1rem;
                border-radius: 0.125rem;
                box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.2), 
                0 1px 5px 0 rgba(0, 0, 0, 0.12); left: -1.235294118rem; height: -webkit-fill-available; ">
                        <div class="input-group mt-1">
                                    <input type="text" style="width: 6rem;margin-left: 0.882353rem;" class="form-control input-busqueda" placeholder="Buscar">
                                    <div class="input-group-append icono-busqueda">
                                    <button type="button" class="btn btn-secondary" style="text-transform: inherit;"><i class="fas fa-search"></i></button>
                                    </div>
                            </div>
                            <div class="mt-5 ml-2">
                                    <div class="media border-bottom ">
                                        <button type="button" class="btn btn-secondary" style="text-transform: inherit;"> Archivos</button>
                                    </div>
                                    <div class="media border-bottom ">
                                        <button type="button" class="btn btn-secondary" style="text-transform: inherit;"> Recientes</button>
                                    </div> 
                                    <div class="media border-bottom ">
                                        <button type="button" class="btn btn-secondary" style="text-transform: inherit;"> Fotos</button>
                                    </div>
                                    <div class="media border-bottom ">
                                        <button type="button" class="btn btn-secondary" style="text-transform: inherit;"> Compartido</button>
                                    </div>
                                    <div class="media border-bottom ">
                                        <button type="button" class="btn btn-secondary" style="text-transform: inherit;"> Papelera de reciclaje</button>
                                    </div>
                            </div>
                        </div>
                    </div>
            <?php else: ?>
                <div class="row" style="padding-right: 0; margin-right:0;">
                    <div class="col-lg-12 col-md-12" style="padding-left: 0;padding-right: 0;">
                        <div class="contenedor-menu" style="border-radius: 0.125rem; ">
                            <div class="input-group">
                                    <input type="text" style="width: 6rem;margin-left: 0.882353rem;color:black;" class="form-control input-busqueda" placeholder="Buscar">
                                    <div class="input-group-append icono-busqueda">
                                        <button type="button" class="btn btn-secondary" style="text-transform: inherit;"><i class="fas fa-search"></i></button>
                                    </div>
                            </div>
                            <div class="mt-5 ml-2">
                                    <div class="media border-bottom ">
                                        <button type="button" class="btn btn-secondary" style="text-transform: inherit;"> Archivos</button>
                                    </div>
                                    <div class="media border-bottom ">
                                        <button type="button" class="btn btn-secondary" style="text-transform: inherit;"> Recientes</button>
                                    </div>
                                    <div class="media border-bottom ">
                                        <button type="button" class="btn btn-secondary" style="text-transform: inherit;"> Fotos</button>
                                    </div>
                                    <div class="media border-bottom ">
                                        <button type="button" class="btn btn-secondary" style="text-transform: inherit;"> Compartido</button>
                                    </div>
                                    <div class="media border-bottom ">
                                        <button type="button" class="btn btn-secondary" style="text-transform: inherit;"> Papelera de reciclaje</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    <?php endif;?>
