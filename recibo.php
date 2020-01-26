<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Recibo</title>
    <!--Icon-->
    <link rel="icon" href="img/Favicon.ico">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!--Import google Font-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700&display=swap" rel="stylesheet">
    <!--Styles-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style-Usuarios.css">
</head>

<body>

    <!--Begin NavBar-->
    <header>
        <nav class="white navbar nav-extended">
            <div class="nav-wrapper container centrador">
                <img src="img/logo.png" alt="" class="brand-logo logo ocultar">
                <!--Para que aparezca el icono de desplegar-->
                <a href="#!" data-target="menu-responsive " class="sidenav-trigger ">
                    <i class="material-icons left">contact_mail</i>
                </a>
                <!--Menú de la pagina en escritorio-->
                <ul id="nav-mobile" class="right hide-on-med-and-down menu-escritorio">
                    <li><a href="#"><i class="material-icons left">home</i> Inicio</a></li>
                    <li><a href="#"><i class="material-icons left">style</i>Prendas</a></li>
                    <li><a href="#"><i class="material-icons left">store</i>Tiendas</a></li>
                    <li><a href="#"><i class="material-icons left">face</i>Nosotros</a></li>
                    <li class="dropdown-trigger" data-target="dropdown1"><a href="#"><i class="material-icons left">account_box</i>Usuario<i class="material-icons right">arrow_drop_down</i></a></li>
                    <!--Para desplegar las opciones de perfil y salir-->
                    <ul id="dropdown1" class="dropdown-content desplegableNavbar">
                        <li class="divider"></li>
                        <li><a href="#!"><i class="material-icons left">account_circle</i> Perfil</a></li>
                        <li class="divider"></li>
                        <li><a href="#!"><i class="material-icons left" style="margin-right: 5px">exit_to_app</i>Cerrar Sesion</a></li>
                    </ul>
                </ul>
            </div>
        </nav>

        <!--Menu para telefonos -->
        <ul class="sidenav menu-responsive sidenav1" id="menu-responsive ">
            <li><a href="#!"><i class="material-icons left">account_circle</i> Perfil</a></li>
            <!--Para desplegar los despachos-->
            <li><a href="responsables.html"><i class="material-icons left">build</i>Panel de Control</a></li>
            <li class="dropdown-trigger" data-target="dropdown-despachos"><a href="#"><i class="material-icons left">local_shipping</i>Despachos<i class="material-icons right">arrow_drop_down</i></a></li>
            <ul id="dropdown-despachos" class="dropdown-content desplegableNavbar">
                <li class="divider"></li>
                <li><a href="entrega.html"><i class="material-icons">add</i>Entrega</a></li>
                <li class="divider"></li>
                <li><a href="#" onclick="M.toast({html: 'Ya estas aquí!'})"><i class="material-icons">add</i>Recibo</a></li>
            </ul>
            <li><a href="inventario.html"><i class="material-icons left">filter_none</i>Inventario</a></li>
            <li><a href="manufactura.html"><i class="material-icons left">settings</i>Manufactura</a></li>
            <li><a href="#!"><i class="material-icons left">exit_to_app</i>Cerrar Sesion</a></li>
        </ul>
    </header>
    <!--End NavBar-->

    <!--Begin SideNav-->
    <?php require_once('./components/admin/sidebar.php'); ?>
    <!--End Sidenav-->

    <!--Begin Contenido-->
    <main>
        <!--Codigo de la tabla requerida-->
        <div class="section"></div>
        <div class="row">
            <div class="col l12" style="width: 100%;">
                <div class="card center">
                    <div class="row">
                        <div class="col m12">
                            <div class="table-responsive">
                                <table id="mytable" class="table table-bordred table-striped" style="width: 100%;">
                                    <thead>
                                        <th><input type="checkbox" id="checkall" /></th>
                                        <th>Contenido</th>
                                        <th>Partida</th>
                                        <th>Estatus</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>123456789</td>
                                            <td>CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan</td>
                                            <td>
                                                <p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit"><span class="glyphicon glyphicon-pencil"></span></button></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>123456789</td>
                                            <td>CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan</td>
                                            <td>
                                                <p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit"><span class="glyphicon glyphicon-pencil"></span></button></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>123456789</td>
                                            <td>CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan</td>
                                            <td>
                                                <p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit"><span class="glyphicon glyphicon-pencil"></span></button></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>123456789</td>
                                            <td>CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan</td>
                                            <td>
                                                <p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit"><span class="glyphicon glyphicon-pencil"></span></button></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>123456789</td>
                                            <td>CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan</td>
                                            <td>
                                                <p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit"><span class="glyphicon glyphicon-pencil"></span></button></p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="clearfix"></div>
                                <ul class="pagination pull-right">
                                    <li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js "></script>
    <!--Js-->
    <script src="js/main.js"></script>
    <script>
    </script>
    <!--Jquery-->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js " integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin=" anonymous "></script>
</body>

</html>