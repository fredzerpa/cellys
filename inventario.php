<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inventario</title>
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
                <li><a href="recibo.html"><i class="material-icons">add</i>Recibo</a></li>
            </ul>
            <li><a href="#" onclick="M.toast({html: 'Ya estas aquí!'})"><i class="material-icons left">filter_none</i>Inventario</a></li>
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
        <div class="section"></div>
        <div class="row container section">
            <div class="col l12 s12 m12">
                <nav class="white">
                    <div class="nav-wrapper">
                        <form>
                            <div class="input-field">
                                <input id="search" type="search" required placeholder="Buscar">
                                <label class="label-icon" for="search"><i class="material-icons black-text">search</i></label>
                                <i class="material-icons">close</i>
                            </div>
                        </form>
                    </div>
                </nav>
            </div>
        </div>

        <div class="row container section">
            <div class="col s12">
                <ul class="collection">
                    <li class="collection-item avatar">
                        <img src="img/imagen1.jpg" alt="" class="circle">
                        <span class="title">Producto</span>
                        <p>Cantidad <br> Precio
                        </p>
                        <a href="#modal1" class="secondary-content modal-trigger"><i class="material-icons black-text">visibility</i></a>
                    </li>
                    <li class="collection-item avatar">
                        <img src="img/imagen1.jpg" alt="" class="circle">
                        <span class="title">Producto</span>
                        <p>Cantidad <br> Precio
                        </p>
                        <a href="#modal2" class="secondary-content modal-trigger"><i class="material-icons black-text">visibility</i></a>
                    </li>
                    <li class="collection-item avatar">
                        <img src="img/imagen1.jpg" alt="" class="circle">
                        <span class="title">Producto</span>
                        <p>Cantidad <br> Precio
                        </p>
                        <a href="#modal3" class="secondary-content modal-trigger"><i class="material-icons black-text">visibility</i></a>
                    </li>
                </ul>
            </div>
        </div>
        <!--End Contenido-->

        <!--Begin Modals-->
        <div id="modal1" class="modal">
            <div class="modal-content">
                <h4>Modal1</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero quisquam dignissimos repellendus quam repellat, atque iusto tenetur veniam minus quaerat! Similique, natus. Placeat dolore blanditiis at voluptatum possimus sit nihil.</p>
            </div>
            <div class="modal-footer">
                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Si</a>
                <a href="#!" class="modal-close waves-effect waves-green btn-flat">No</a>
            </div>
        </div>

        <div id="modal2" class="modal">
            <div class="modal-content">
                <h4>Modal2</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero quisquam dignissimos repellendus quam repellat, atque iusto tenetur veniam minus quaerat! Similique, natus. Placeat dolore blanditiis at voluptatum possimus sit nihil.</p>
            </div>
            <div class="modal-footer">
                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Si</a>
                <a href="#!" class="modal-close waves-effect waves-green btn-flat">No</a>
            </div>
        </div>

        <div id="modal3" class="modal">
            <div class="modal-content">
                <h4>Modal3</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero quisquam dignissimos repellendus quam repellat, atque iusto tenetur veniam minus quaerat! Similique, natus. Placeat dolore blanditiis at voluptatum possimus sit nihil.</p>
            </div>
            <div class="modal-footer">
                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Si</a>
                <a href="#!" class="modal-close waves-effect waves-green btn-flat">No</a>
            </div>
        </div>
        <!--End Modals-->

        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js "></script>
        <!--Js-->
        <script src="js/main.js"></script>
        <script>
        </script>
        <!--Jquery-->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js " integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin=" anonymous "></script>
    </main>
</body>

</html>