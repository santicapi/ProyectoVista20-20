<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Ópticas Chavarría</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <link rel="shortcut icon" href="logos/logo.png" />
    <link rel="stylesheet" href="font/iconsmind-s/css/iconsminds.css" />
    <link rel="stylesheet" href="font/simple-line-icons/css/simple-line-icons.css" />
    <link rel="stylesheet" href="css/vendor/dropzone.min.css" />
    <link rel="stylesheet" href="css/vendor/bootstrap.min.css" />
    <link rel="stylesheet" href="css/vendor/bootstrap.rtl.only.min.css" />
    <link rel="stylesheet" href="css/vendor/component-custom-switch.min.css" />
    <link rel="stylesheet" href="css/vendor/jquery.contextMenu.min.css" />
    <link rel="stylesheet" href="css/vendor/perfect-scrollbar.css" />
    <link rel="stylesheet" href="css/main.css" />
</head>

<body id="app-container" class="menu-default show-spinner">
    <nav class="navbar fixed-top">
        <div class="d-flex align-items-center navbar-left">
            <a href="#" class="menu-button d-none d-md-block">
                <svg class="main" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9 17">
                    <rect x="0.48" y="0.5" width="7" height="1" />
                    <rect x="0.48" y="7.5" width="7" height="1" />
                    <rect x="0.48" y="15.5" width="7" height="1" />
                </svg>
                <svg class="sub" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 17">
                    <rect x="1.56" y="0.5" width="16" height="1" />
                    <rect x="1.56" y="7.5" width="16" height="1" />
                    <rect x="1.56" y="15.5" width="16" height="1" />
                </svg>
            </a>

            <a href="#" class="menu-button-mobile d-xs-block d-sm-block d-md-none">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 17">
                    <rect x="0.5" y="0.5" width="25" height="1" />
                    <rect x="0.5" y="7.5" width="25" height="1" />
                    <rect x="0.5" y="15.5" width="25" height="1" />
                </svg>
            </a>
            <div>
            <img class="center-block" src="logos/opt-icon.png"alt="Solvetic" width="100" height="70" style="margin-right: 40px;">
            
            </div>

            <div class="search" data-search-path="Pages.Search.html?q=">
                <input placeholder="Buscar cliente">
                <span class="search-icon">
                    <i class="simple-icon-magnifier"></i>
                </span>

                
            </div>

           

            
        </div>
        
        <div class="d-flex align-items-center navbar-left">
        <a class="btn btn-secondary btn-xl mr-2 mb-2" target="_top"
        
            href="index.php">Cerrar Sesión</a>
        </div>
  
           
    </nav>
    <div class="menu">
        <div class="main-menu">
            <div class="scroll">
                <ul class="list-unstyled">
                    <li>
                        <a href="Dashboard.AdministradorGeneral.php">
                            <i class="iconsminds-sunglasses-w-3"></i>
                            <span>Registro Cliente</span>
                        </a>
                    </li>
                    <li>
                        <a href="Apps.MediaLibrary.php">
                            <i class="iconsminds-photo"></i>Fotos
                        </a>
                    </li>
                    
                    <li class="active">
                        <a href="Apps.MediaLibrary.Promociones.php">
                            <i class="iconsminds-shopping-bag"></i>Promociones
                        </a>
                    </li>
            </div>
        </div>
    </div>

    <main>  
    <div class="container-fluid library-app">
            <div class="row">
                <div class="col-12">
                    <div class="mb-3">
                        <h1>Fotos de Promociones</h1>
                        <div class="text-zero top-right-button-container">   
                        </div>
                    </div>

                    <div class="separator mb-5"></div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-xl-4 drop-area-container">
                    <div class="card drop-area">
                    
                        <div class="card-body">
                            <form action="/file-upload">
                                <div class="dropzone ">
                                </div>
                            </form>
                        </div>
                    </div>
                    <br>
                    <br>
                    <a class="btn btn-secondary btn-xl mr-2 mb-2" target="_top"

                    href="#subirImagen">Subir Imágenes</a>
    
                    
                </div>
                <div class="col-12 col-xl-8 list disable-text-selection" data-check-all="checkAll">
                    <div class="row">

                        <div class="col-xxl-4 col-xl-6 col-12">
                            <div class="card d-flex flex-row mb-4 media-thumb-container">
                                <a class="d-flex align-self-center" href="Apps.MediaLibrary.ViewImage.html">
                                    <img src="img/promos/1.jpg" alt="uploaded image"
                                        class="list-media-thumbnail responsive border-0" />
                                </a>
                                <div class="d-flex flex-grow-1 min-width-zero">
                                    <div
                                        class="card-body align-self-center d-flex flex-column justify-content-between min-width-zero align-items-lg-center">
                                        <a href="#imagen1" class="w-100">
                                            <p class="list-item-heading mb-1 truncate">Promo-1.jpg</p>
                                        </a>
                                        <p class="mb-1 text-muted text-small w-100 truncate">16.09.2018 14:04</p>
                                    </div>
                                    <div class="pl-1 align-self-center">
                                        <label class="custom-control custom-checkbox mb-0">
                                            <input type="checkbox" class="custom-control-input">
                                            <span class="custom-control-label"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-4 col-xl-6 col-12">
                            <div class="card d-flex flex-row mb-4 media-thumb-container ">
                                <a class="d-flex align-self-center" href="Apps.MediaLibrary.ViewImage.html">
                                    <img src="img/promos/2.jpg" alt="uploaded image"
                                        class="list-media-thumbnail responsive border-0" />
                                </a>
                                <div class="d-flex flex-grow-1 min-width-zero">
                                    <div
                                        class="card-body align-self-center d-flex flex-column justify-content-between min-width-zero align-items-lg-center">
                                        <a href="Apps.MediaLibrary.ViewImage.html" class="w-100">
                                            <p class="list-item-heading mb-1 truncate">Promo-2.jpg</p>
                                        </a>
                                        <p class="mb-1 text-muted text-small w-100 truncate">16.09.2018 14:05</p>
                                    </div>
                                    <div class="pl-1 align-self-center">
                                        <label class="custom-control custom-checkbox mb-0">
                                            <input type="checkbox" class="custom-control-input">
                                            <span class="custom-control-label"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                    



                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-xl-8 offset-0 offset-xl-4">
                    <nav class="mt-4 mb-3">
                        <ul class="pagination justify-content-center mb-0">
                            <li class="page-item ">
                                <a class="page-link first" href="#">
                                    <i class="simple-icon-control-start"></i>
                                </a>
                            </li>
                            <li class="page-item ">
                                <a class="page-link prev" href="#">
                                    <i class="simple-icon-arrow-left"></i>
                                </a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item ">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">3</a>
                            </li>
                            <li class="page-item ">
                                <a class="page-link next" href="#" aria-label="Next">
                                    <i class="simple-icon-arrow-right"></i>
                                </a>
                            </li>
                            <li class="page-item ">
                                <a class="page-link last" href="#">
                                    <i class="simple-icon-control-end"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>

                </div>
            </div>
        </div>

                    
        
            
               
    </main>


    <script src="js/vendor/jquery-3.3.1.min.js"></script>
    <script src="js/vendor/bootstrap.bundle.min.js"></script>
    <script src="js/vendor/perfect-scrollbar.min.js"></script>
    <script src="js/vendor/dropzone.min.js"></script>
    <script src="js/vendor/mousetrap.min.js"></script>
    <script src="js/vendor/jquery.contextMenu.min.js"></script>
    <script src="js/dore.script.js"></script>
    <script src="js/scripts.js"></script>
</body>

</html>