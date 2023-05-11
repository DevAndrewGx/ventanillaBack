<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador - Ventanilla Única Virtual</title>
    <link rel="icon" href="img/favicon.ico" type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/base-ventanilla.css">
</head>

<body>

    <div id="profile">
        <button class="btn-menu-top" onclick="activarMenu()"><i class="bi bi-microsoft"></i></button>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-person-circle"></i>
                ADMINISTRADOR
            </button>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="#"><i class="bi bi-file-text"></i> Ver Trámites</a></li>
                <li><a class="dropdown-item" href="#"><i class="bi bi-person-lines-fill"></i> Editar Información</a>
                </li>

                <li><a class="dropdown-item" href="#"><i class="bi bi-power"></i> Cerrar Sesión</a></li>
            </ul>
        </div>
    </div>

    <div id="menu-admin">
        <div class="container">
            <ul>
                <li><a href="#"><i class="bi bi-house"></i> INICIO</a></li>
                <li><a href="#"><i class="bi bi-filetype-doc"></i> DOCUMENTOS NORMATIVOS</a></li>
                <li><a href="#"><i class="bi bi-file-text"></i> REPORTES DE TRÁMITES</a></li>
                <li><a href="#"><i class="bi bi-journal-text"></i></i> TRÁMITES DE FOES</a></li>
                <li><a href="#"><i class="bi bi-cash-stack"></i> INTERESES DE CRÉDITOS FOES</a></li>
                <li><a href="#"><i class="bi bi-arrow-counterclockwise"></i> RENOVACIONES DE FOES</a></li>
                <li><a href="#"><i class="bi bi-journals"></i> GENERAR CONSOLIDACIONES EN EQUIDAD</a></li>
                <li><a href="#"><i class="bi bi-power"></i> Cerrar Sesión</a></li>
            </ul>
        </div>

    </div>


    <!-- END BLOQUE PROFILE -->
    <header class="marca">
        <img src="img/ventanilla-logo.png" alt="Logo Ventanilla">
    </header>


    <section id="contPage">


        <div class="container">

            <div class="card-ventanilla">
                <h1 class="title-table">Modificar Trámite</h1>
                <div class="row">
                    <form>
                        <div class="col-lg-12 filtros">
                            <div class="row">
                                <div class="form-group col-lg-4 col-md-6">
                                    <label class="form-label" for="codigo">Código de Trámite:</label>
                                    <input class="campo" type="text" id="codigo" placeholder="Escriba...">
                                </div>

                                <div class="form-group col-lg-4 col-md-6">
                                    <label class="form-label" for="tipoTram">Tipo de Trámite:</label>
                                    <select class="campo" class="campo" id="tipoTram">
                                        <option value="#">Seleccione</option>
                                        <option value="Tramite 1">Tramite 1</option>
                                        <option value="Tramite 2">Tramite 2</option>
                                        <option value="Tramite 3">Tramite 3</option>
                                        <option value="Tramite 4">Tramite 4</option>
                                    </select>
                                </div>

                                <div class="form-group col-lg-4 col-md-6">
                                    <label class="form-label" for="documento">Número de Documento:</label>
                                    <input class="campo" type="number" id="documento" placeholder="Escriba...">
                                </div>
                                <div class="form-group col-lg-4 col-md-6">
                                    <label class="form-label" for="apellidos">Apellidos:</label>
                                    <input class="campo" type="text" id="apellidos" placeholder="Escriba...">
                                </div>
                                <div class="form-group col-lg-4 col-md-6">
                                    <label class="form-label" for="nombres">Nombres:</label>
                                    <input class="campo" type="text" id="nombres" placeholder="Escriba...">
                                </div>
                                <div class="form-group col-lg-4 col-md-6">
                                    <label class="form-label" for="correo">Correo:</label>
                                    <input class="campo" type="email" id="correo" placeholder="Escriba...">
                                </div>
                                <div class="form-group col-lg-4 col-md-6">
                                    <label class="form-label" for="telefono">Teléfono:</label>
                                    <input class="campo" type="number" id="telefono" placeholder="Escriba...">
                                </div>
                                <div class="form-group col-lg-4 col-md-6">
                                    <label class="form-label" for="eps">EPS:</label>
                                    <select class="campo" class="campo" id="eps">
                                        <option value="#">Seleccione</option>
                                        <option value="EPS 1">EPS 1</option>
                                        <option value="EPS 2">EPS 2</option>
                                        <option value="EPS 3">EPS 3</option>
                                        <option value="EPS 4">EPS 4</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-4 col-md-6">
                                    <label class="form-label" for="direccion">Dirección:</label>
                                    <input class="campo" type="text" id="direccion" placeholder="Escriba...">
                                </div>
                                <div class="form-group col-lg-12 col-md-12">
                                    <div class="cont-botones-admin">
                                        <button type="reset" class="btn-primary" onclick="activarStepB()"
                                            id="button-section-a">MODIFICAR TRÁMITE</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>

        </div>





    </section>
    <footer>
        <div class="marcas">
            <img src="img/escudo.png" alt="Escudo Chía">
            <img src="img/Firma Alcalde-35.png" alt="Firma Alcalde">
            <img src="img/eslogan.png" alt="Eslogan Alcaldía Chía">
        </div>
    </footer>
    <!-- Modal Participación-->
    <div class="modal fade" id="participacionModal" tabindex="-1" aria-labelledby="participacionModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="participacionModalLabel">Seleccionar Operación</h5>

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="desc-modal">Secretaria de Participación Ciudadana</p>
                    <div class="cont-btn-modal">
                        <a class="btn-modal-tramite" href="#">CONSULTAR TRÁMITES</a>
                        <a class="btn-modal-tramite" href="#">GENERAR TRÁMITES</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Salud-->
    <div class="modal fade" id="saludModal" tabindex="-1" aria-labelledby="saludModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="saludModalLabel">Seleccionar Operación</h5>

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="desc-modal">Secretaria de Salud</p>
                    <div class="cont-btn-modal">
                        <a class="btn-modal-tramite" href="#">CONSULTAR TRÁMITES</a>
                        <a class="btn-modal-tramite" href="#">GENERAR TRÁMITES</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Salud-->
    <div class="modal fade" id="medioAmbienteModal" tabindex="-1" aria-labelledby="medioAmbienteModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="medioAmbienteModalLabel">Seleccionar Operación</h5>

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="desc-modal">Secretaria de Medio Ambiente</p>
                    <div class="cont-btn-modal">
                        <a class="btn-modal-tramite" href="#">CONSULTAR TRÁMITES</a>
                        <a class="btn-modal-tramite" href="#">GENERAR TRÁMITES</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <script src="js/functions.js"></script>
</body>

</html>