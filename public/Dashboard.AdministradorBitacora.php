<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Ópticas Chavarría</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="font/iconsmind-s/css/iconsminds.css" />
    <link rel="stylesheet" href="font/simple-line-icons/css/simple-line-icons.css" />
    <link rel="shortcut icon" href="logos/logo.png" />
    <link rel="stylesheet" href="css/vendor/bootstrap.min.css" />
    <link rel="stylesheet" href="css/vendor/bootstrap.rtl.only.min.css" />
    <link rel="stylesheet" href="css/vendor/fullcalendar.min.css" />
    <link rel="stylesheet" href="css/vendor/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" href="css/vendor/datatables.responsive.bootstrap4.min.css" />
    <link rel="stylesheet" href="css/vendor/select2.min.css" />
    <link rel="stylesheet" href="css/vendor/perfect-scrollbar.css" />
    <link rel="stylesheet" href="css/vendor/glide.core.min.css" />
    <link rel="stylesheet" href="css/vendor/bootstrap-stars.css" />
    <link rel="stylesheet" href="css/vendor/nouislider.min.css" />
    <link rel="stylesheet" href="css/vendor/bootstrap-datepicker3.min.css" />
    <link rel="stylesheet" href="css/vendor/component-custom-switch.min.css" />
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/table.css" />
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
                <img class="center-block" src="logos/opt-icon.png" alt="Solvetic" width="100" height="70" style="margin-right: 40px;">

            </div>

            <div class="search" data-search-path="Pages.Search.html?q=">
                <input placeholder="Buscar cliente">
                <span class="search-icon">
                    <i class="simple-icon-magnifier"></i>
                </span>


            </div>

        </div>

        <div class="d-flex align-items-center navbar-left">
            <a class="btn btn-secondary btn-xl mr-2 mb-2" target="_top" href="index.php">Cerrar Sesión</a>
        </div>


    </nav>
    <div class="menu">
        <div class="main-menu">
            <div class="scroll">
                <ul class="list-unstyled">
                    <li >
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
                    <li>
                        <a href="#Apps.MediaLibrary.Promociones.php">
                            <i class="iconsminds-shopping-bag"></i>Promociones
                        </a>
                    </li>
                    <li class="active">
                        <a href="Dashboard.AdministradorBitacora.php">
                            <i class="iconsminds-big-data"></i>Consulta Bitácora
                        </a>
                    </li>
            </div>
        </div>
    </div>

    <main>

        <div class="mb-3">
            <h1>Consulta de Bitácoras</h1>
            <div class="text-zero top-right-button-container">

            </div>

        </div>
        <div class="separator mb-5"></div>
        <div class="card mb-4">
            <div class="card-body">
                <form class="needs-validation tooltip-label-right" novalidate>

                    <div class="form-row">
                        <div class="form-group col-md-5">
                            <label>Fecha inicial:</label>
                            <input type="date" class="form-control" placeholder="Fecha inicial" required>
                            <div class="invalid-tooltip">
                                Espacio requerido!
                            </div>
                        </div>


                        <div class="form-group col-md-5">
                            <label>Fecha final:</label>
                            <input type="date" class="form-control" placeholder="Fecha final" required>
                            <div class="invalid-tooltip">
                                Espacio requerido!
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label>Acción:</label>
                            <select class="custom-select" required>
                                <option value="Todos">Todos</option>
                                <option value="Registrado">Registrado</option>
                                <option value="Modificado">Modificado</option>
                                <option value="Eliminado">Eliminado</option>
                            </select>
                            <div class="invalid-tooltip">
                                Espacio requerido!
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <button type="submit" class="btn btn-primary mb-0">Consultar</button>
                            <button type="submit" class="btn btn-primary mb-0">Limpiar</button>
                        </div>
                    </div>


                    <div class="form-row">
                        <div class="form-group col-md-10">
                            <table id="tablaBitacora" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Fecha</th>
                                        <th>Usuario</th>
                                        <th>Opción</th>
                                        <th>Acción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>12/05/2021 08:30 a.m</td>
                                        <td>achavarria</td>
                                        <td>Registro cliente</td>
                                        <td>Registrar</td>
                                    <tr>
                                <tbody>
                                <tfoot>
                                    <tr>
                                        <th>Fecha</th>
                                        <th>Usuario</th>
                                        <th>Opción</th>
                                        <th>Acción</th>
                                    <tr>
                                </tfoot>
                        </div>
                    </div>

                </form>
            </div>


    </main>


    <script src="js/vendor/jquery-3.3.1.min.js"></script>
    <script src="js/vendor/bootstrap.bundle.min.js"></script>
    <script src="js/vendor/Chart.bundle.min.js"></script>
    <script src="js/vendor/chartjs-plugin-datalabels.js"></script>
    <script src="js/vendor/moment.min.js"></script>
    <script src="js/vendor/fullcalendar.min.js"></script>
    <script src="js/vendor/datatables.min.js"></script>
    <script src="js/vendor/perfect-scrollbar.min.js"></script>
    <script src="js/vendor/progressbar.min.js"></script>
    <script src="js/vendor/jquery.barrating.min.js"></script>
    <script src="js/vendor/select2.full.js"></script>
    <script src="js/vendor/nouislider.min.js"></script>
    <script src="js/vendor/bootstrap-datepicker.js"></script>
    <script src="js/vendor/Sortable.js"></script>
    <script src="js/vendor/mousetrap.min.js"></script>
    <script src="js/vendor/glide.min.js"></script>
    <script src="js/dore.script.js"></script>
    <script src="js/scripts.js"></script>
</body>

</html>