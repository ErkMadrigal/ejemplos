<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $titulo; ?></title>
    <link rel="shortcut icon" href="<?php echo $raizN;?>img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo $raizN;?>css/all.css">
    <link rel="stylesheet" href="<?php echo $raizN;?>css/bootstrap-material-design.css">
    <link rel="stylesheet" href="<?php echo $raizN;?>css/nube.css">
</head>
<body>
    <main>
    <?php if( $mostrarMenu ): ?>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
                        <a class="navbar-brand" href="<?php echo $raizN;?>index.php"><img src="<?php echo $raizN;?>img/logo.png" alt="" style="height: 2.5rem;width: 5rem;"></a>
    
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                        <div class="collapse navbar-collapse" id="collapsibleNavbar">
                                <ul class="navbar-nav">
                                    <li class="nav-items">
                                        <a class="nav-link" href="<?php echo $raizN;?>modulos/paginas/venta.php">venta</a>
                                    </li>
                                    <li class="nav-items">
                                        <a class="nav-link" href="#">Link 2</a>
                                    </li>

                                    <!-- Dropdown -->
                                    <li class="nav-item dropdowns">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                            Perfile
                                        </a>
                                    <div class="dropdown-menu" style="margin-left:15rem;">
                                        <a class="dropdown-item" href="#">Tema Dark</a>
                                        <a class="dropdown-item" href="#">Configuracion</a>
                                        <a class="dropdown-item" href="#">Salir</a>
                                    </div>
                                    </li>
                                    <li class="menu-buscar nav-item dropdowns">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                        <i class="fas fa-bars"></i>
                                        </a>
                                    <div class="col-2 fixed-top" style="margin-top:4rem; padding-left: 0" >
                                        <div class="input-group dropdown-menu mt-1"  style="width: 36rem;padding-top: 0;">
                                             <?php $mostrarBusqueda = false; include 'busqueda.php';?>
                                        </div>
                                    </div>

                                    </li>
                                </ul>
                            </div>
                            


            </nav>
            
            <?php else: ?>
            
    <?php endif;?>
