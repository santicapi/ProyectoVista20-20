<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Ópticas Chavarría</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <link rel="stylesheet" href="font/iconsmind-s/css/iconsminds.css" />
    <link rel="stylesheet" href="font/simple-line-icons/css/simple-line-icons.css" />

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

            <div class="search" data-search-path="Pages.Search.html?q=">
                <input placeholder="Buscar cliente">
                <span class="search-icon">
                    <i class="simple-icon-magnifier"></i>
                </span>

                
            </div>
            <div>
            <img class="center-block" src="logos/opt-icon.png"alt="Solvetic" width="100" height="75" >
            </div>
        </div>
        
 
  
           
    </nav>
    <div class="menu">
        <div class="main-menu">
            <div class="scroll">
                <ul class="list-unstyled">
                    <li class="active">
                        <a href="#Registro">
                            <i class="iconsminds-sunglasses-w-3"></i>
                            <span>Registro cliente</span>
                        </a>
                    </li>
                    <li>
                        <a href="#Actualización">
                            <i class="iconsminds-hipster-men"></i> Clientes
                        </a>
                    </li>
                    <li>
                        <a href="#fotos">
                            <i class="iconsminds-photo"></i>Fotos
                        </a>
                    </li>
                    <li>
                        <a href="#promos">
                            <i class="iconsminds-shopping-bag"></i>Promociones
                        </a>
                    </li>
            </div>
        </div>
    </div>

    <main>
    
        <div class="card mb-4">
            <div class="card-body">
                <h5 class="mb-4">Registro Cliente regular</h5>
                <form class="needs-validation tooltip-label-right" novalidate>
              
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Fecha de registro:</label>
                        <input class="form-control datepicker" placeholder="Fecha">
                       
                    </div>
                    </div>

                    
                    <div class="form-row">
                        <div class="form-group col-md-4">
                        <label >Nombre</label>
                        <input type="name" class="form-control" id="nombre" placeholder="Nombre">
                       
                        </div>
                        <div class="form-group col-md-4">
                        <label >Primer Apellido</label>
                        <input type="name" class="form-control" id="ape1" placeholder="Apellido">
                        <div class="invalid-tooltip">
                            Espacio requerido!
                        </div>
                        </div>
                        <div class="form-group col-md-4">
                        <label >Segundo Apellido</label>
                        <input type="name" class="form-control" id="ape2" placeholder="Apellido">
                       
                        </div>
                    </div>

                    <div class="form-group position-relative error-l-50 form-row">
                    <div class=" form-group col-md-4">
                        <label >Edad:</label>
                        <input type="number" class="form-control" id="edad" placeholder="Edad">
                        </div>
                        <div class="form-group col-md-4">
                        <label >Numero de télefono</label>
                        <input type="number" class="form-control" id="tel" placeholder="télefono">
                        </div
                        <div class="form-group col-md-4">
                        <label >Numero de Celular</label>
                        <input type="number" class="form-control" id="tel" placeholder="télefono">
                        </div>
                        <div class="form-group col-md-6">
                        <label for="inputEmail4">Email</label>
                        <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                        </div>
                        <div class="form-group col-md-6">
                        <label>Fecha de nacimiento:</label>
                        <input type="date" class="form-control" placeholder="Fecha">
                        
                        </div>
                    </div>   
                       <div class="form-group position-relative">
                            <label>Sexo</label>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio1" name="customRadio"
                                    class="custom-control-input" required>
                                <label class="custom-control-label" for="customRadio1">Femenino</label>
                                <div class="invalid-tooltip">
                                Espacio requerido!
                            </div>
                            </div>
                            
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio2" name="customRadio"
                                    class="custom-control-input" required>
                                <label class="custom-control-label" for="customRadio2">Masculino</label>
                            <div class="invalid-tooltip">
                                Espacio requerido!
                            </div>
                       </div>
                       </br>
                       <div class="form-row">
                        <div class="form-group col-md-4">
                            <label>Provincia</label>
                            <select class="custom-select" required>
                                <option value=""></option>
                                <option value="1">San José</option>
                                <option value="2">Alajuela</option>
                                <option value="3">Cartago</option>
                                <option value="4">Heredia</option>
                                <option value="5">Guanacaste</option>
                                <option value="6">Puntarenas</option>
                                <option value="7">Limón</option>
                                
                            </select>
                            <div class="invalid-tooltip">
                            Espacio requerido!
                        </div>
                            
                        </div>
                        <div class="form-row">
                        <div class="form-group col-md-4">
                            <label>Cantón</label>
                            <select class="custom-select" required>
                                <option value=""></option>
                                <option value="1">Abangares</option>
                                <option value="2">Acosta</option>
                                <option value="3">Alajuela</option>
                                <option value="4">Alajuelita</option>
                                <option value="5">Alvarado</option>
                                <option value="6">Aserrí</option>
                                <option value="7">Atenas</option>
                                <option value="8">Bagaces</option>
                                <option value="9">Barva</option>
                                <option value="10">Belén</option>
                                <option value="11">Buenos Aires</option>
                                <option value="12">Cañas</option>
                                <option value="13">Carrillo</option>
                                <option value="14">Cartago</option>
                                <option value="15">Corredores</option>
                                <option value="16">Coto Brus</option>
                                <option value="17">Curridabat</option>
                                <option value="18">Desamparados</option>
                                <option value="19">Dota</option>
                                <option value="20">EL Guarco</option>
                                <option value="21">Escazú</option>
                                <option value="22">Esperanza</option>
                                <option value="23">Flores </option>
                                <option value="24">Garabito</option>
                                <option value="25">Goicoechea</option>
                                <option value="26">Golfito</option>
                                <option value="27">Grecia</option>
                                <option value="28">Guácimo</option>
                                <option value="29">Guatuso</option>
                                <option value="30">Heredia</option>
                                <option value="31">Hojancha</option>
                                <option value="32">Jiménez</option>
                                <option value="33">La Cruz</option>
                                <option value="34">La Unión</option>
                                <option value="35">León Cortés</option>
                                <option value="36">Liberia</option>
                                <option value="37">Limón</option>
                                <option value="38">Los Chiles</option>
                                <option value="39">Matina</option>
                                <option value="40">Montes de Oca</option>
                                <option value="41">Montes de Oro</option>
                                <option value="42">Mora</option>
                                <option value="43">Moravia</option>
                                <option value="44">Nandayure</option>
                                <option value="45">Naranjo</option>
                                <option value="46">Nicoya</option>
                                <option value="47">Oreamuno</option>
                                <option value="48">Orotina</option>
                                <option value="49">Osa</option>
                                <option value="50">Palmares</option>
                                <option value="51">Paraíso</option>
                                <option value="52">Parrita</option>
                                <option value="53">Pérez Zeledón</option>
                                <option value="54">Poás</option>
                                <option value="55">Pococí</option>
                                <option value="56">Puntarenas</option>
                                <option value="57">Puriscal</option>
                                <option value="58">Quepos</option>
                                <option value="59">Río Cuarto</option>
                                <option value="60">San Carlos</option>
                                <option value="61">San Isidro</option>
                                <option value="62">San José</option>
                                <option value="63">San Mateo</option>
                                <option value="64">San Pablo</option>
                                <option value="65">San Ramón </option>
                                <option value="66">Santa Ana</option>
                                <option value="67">Santa Bárbara</option>
                                <option value="68">Santa Cruz</option>
                                <option value="69">Santo Domingo</option>
                                <option value="70">Sarapiquí</option>
                                <option value="71">Sarchí</option>
                                <option value="72">Siquirres</option>
                                <option value="73">Talamanca </option>
                                <option value="74">Tarrazú</option>
                                <option value="75">Tibás</option>
                                <option value="76">Tilarán</option>
                                <option value="77">Turrialba</option>
                                <option value="78">Turrubares</option>
                                <option value="79">Upala</option>
                                <option value="80">Vázquez de Coronado</option>
                                <option value="81">Zarcero </option>
                                <option value="82">Otro </option>
                               
                            </select>
                            <div class="invalid-tooltip">
                            Espacio requerido!
                        </div>
                            
                        </div>
                        
                        <div class="form-group col-md-4">
                            <label >Código postal</label>
                            <input type="text" class="form-control" id="codigoP">
                            <div class="invalid-tooltip">
                            Espacio requerido!
                        </div>
                        </div>

               
                </div>
                </div>

                <div class="form-group position-relative error-l-50">
                    <label>Dirección:</label>
                    <textarea class="form-control" rows="2" required></textarea>
                    <div class="invalid-tooltip">
                            Espacio requerido!
                        </div>
                </div>
                

                    <div class="form-group position-relative error-l-50">
                        <label>Servicio</label>
                        <select class="custom-select" required>
                            <option value=""></option>
                            <option value="1">Examines por computadora</option>
                            <option value="2">Adaptación de lente de contacto</option>
                            <option value="3">Terapias Oculares</option>
                            <option value="4">Examen Optométrico Completo</option>
                            <option value="5">Optometría Pediátrica</option>
                            <option value="6">Adaptación de lentes Rigidos Permeables</option>
                            <option value="7">Adaptación de lentes de contacto Blandas</option>
                            <option value="9">Otros servicios</option>
                            
                        </select>
                        <div class="invalid-tooltip">
                            espacio requerido!
                        </div>
                    </div>

                    <div class="form-group position-relative error-l-50">
                        <label>Observaciones:</label>
                        <textarea class="form-control" rows="2" required></textarea>
                        
                    </div>
                    
                    <div class="form-group position-relative">
                        
                            <fieldset>
                                <legend>Padecimientos del cliente</legend>
                                <label>
                                    <input type="checkbox" name="enfermedad" value="hta">  HTA
                                </label>
                                <label>
                                    <input type="checkbox" name="enfermedad" value="rojo">  Ojo rojo
                                </label>
                                <label>
                                    <input type="checkbox" name="enfermedad" value="cirugias">  Cirugias
                                </label>
                                <label>
                                    <input type="checkbox" name="enfermedad" value="cefalea">  Cefalea
                                </label>
                                <label>
                                    <input type="checkbox" name="enfermedad" value="diabetes">  Diabetes
                                </label>
                                <label>
                                    <input type="checkbox" name="enfermedad" value="lagrimeo"> Lagrimeo
                                </label>
                                <label>
                                    <input type="checkbox" name="enfermedad" value="catarata"> Catarata
                                </label>
                                <label>
                                    <input type="checkbox" name="enfermedad" value="mareos"> Mareos
                                </label>
                                
                            </fieldset>
                            <br>
                            <fieldset>
                                <label>
                                    <input type="checkbox" name="enfermedad" value="tiroides"> Tiroides
                                </label>
                                <label>
                                    <input type="checkbox" name="enfermedad" value="extraño"> Cuerpo extraño
                                </label>
                                <label>
                                    <input type="checkbox" name="enfermedad" value="glaucomal"> Glaucoma
                                <label>
                                    <input type="checkbox" name="enfermedad" value="irritacion"> Irritación
                                </label>
                                <label>
                                    <input type="checkbox" name="enfermedad" value="colestero"> Colesteron
                                </label>
                                <label>
                                    <input type="checkbox" name="enfermedad" value="pterigión"> Pterigión 
                                </label>
                                <label>
                                    <input type="checkbox" name="enfermedad" value="picazón"> Picazón
                                </label>
                               
                            </fieldset>

                    </div>
                    <legend>Lente RX Final</legend>
                    <div class="form-group position-relative error-l-50 form-row">
                    <div class=" form-group col-md-1">
                        <label >Esfera:</label>
                        <input type="number" class="form-control" id="esf" >
                        </div>
                        <div class="form-group col-md-1">
                        <label >Cilindro:</label>
                        <input type="number" class="form-control" id="cyl" >
                        </div>
                        <div class="form-group col-md-1">
                        <label >Eje:</label>
                        <input type="number" class="form-control" id="eje" >
                        </div>
                        <div class="form-group col-md-1">
                        <label >Adicion:</label>
                        <input type="number" class="form-control" id="edd">
                        </div>
                    <div class="form-group col-md-1">
                        <label >Prisma:</label>
                        <input type="number" class="form-control" id="pris">
                        </div>
                        <div class="form-group position-relative error-l-50">
                        <label>Resultado</label>
                        <select class="custom-select" required>
                            <option value=""></option>
                            <option value="1">Anisometropia</option>
                            <option value="2">Astigmatismo</option>
                            <option value="3">Hipermetropía</option>
                            <option value="4">Miopía</option>
                            <option value="5">Presbicia</option>
                            <option value="6">Defecto acomodativo</option>
                            <option value="7">Estrabismo</option>f
                            <option value="8">Foria</option>
                            <option value="9">otros</option>
                           
                        </select>
                    </div>
                        </div>
                    </div> 
                    
                    <legend>Lente Contacto RX Final</legend>
                    <div class="form-group position-relative error-l-50 form-row">
                    <div class=" form-group col-md-1">
                        <label >Esfera:</label>
                        <input type="number" class="form-control" id="esf" >
                        </div>
                    <div class="form-group col-md-1">
                        <label >Cilindro:</label>
                        <input type="number" class="form-control" id="cyl" >
                        </div>
                    <div class="form-group col-md-1">
                        <label >Eje:</label>
                        <input type="number" class="form-control" id="eje" >
                        </div>
                    <div class="form-group col-md-1">
                        <label >Adicion:</label>
                        <input type="number" class="form-control" id="edd">
                        </div>
                    <div class="form-group col-md-1">
                        <label >Prisma:</label>
                        <input type="number" class="form-control" id="pris">
                        </div>
                    <div class="form-group col-md-1">
                        <label >Curva Base:</label>
                        <input type="number" class="form-control" id="cb">
                        </div>
                        <div class="form-group position-relative error-l-50">
                        <label>Resultado</label>
                        <select class="custom-select" required>
                            <option value=""></option>
                            <option value="1">Anisometropia</option>
                            <option value="2">Astigmatismo</option>
                            <option value="3">Hipermetropía</option>
                            <option value="4">Miopía</option>
                            <option value="5">Presbicia</option>
                            <option value="6">Defecto acomodativo</option>
                            <option value="7">Estrabismo</option>f
                            <option value="8">Foria</option>
                            <option value="9">otros</option>
                           
                        </select>
                        </div>
                        </div>
                    <button type="submit" class="btn btn-primary mb-0">Guardar</button>
                    <button type="submit" class="btn btn-primary mb-0">Eliminar</button>
                </form>
            </div>
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