<!DOCTYPE html>
<html lang="en">

<head>
    <title>Entrega</title>
    
    <!-- Metas && Imports -->
    <?php require_once('./components/head.html'); ?>

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
            <li><a href="responsables.html" ><i class="material-icons left">build</i>Panel de Control</a></li>
            <li class="dropdown-trigger" data-target="dropdown-despachos"><a href="#"><i class="material-icons left">local_shipping</i>Despachos<i class="material-icons right">arrow_drop_down</i></a></li>
            <ul id="dropdown-despachos" class="dropdown-content desplegableNavbar">
                <li class="divider"></li>
                <li><a href="#" onclick="M.toast({html: 'Ya estas aquí!'})"><i class="material-icons">add</i>Entrega</a></li>
                <li class="divider"></li>
                <li><a href="recibo.html"><i class="material-icons">add</i>Recibo</a></li>
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
        <div class="container">
            <div class="row ">
                <div class="col s12 m6 l4 offset-l1">
                    <div class="card contenedor z-depth-5 hoverable ">
                        <a href="#ModalAgregar " class="modal-trigger ">
                            <div class="card-image waves-effect waves-block waves-light ">
                                <img class="activator " src="img/segundaIlustracion.svg ">
                            </div>
                            <div class="card-content ">
                                <span class="card-title activator grey-text text-darken-4 ">Agregar</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col s12 m6 l4 offset-l1">
                    <div class="card contenedor z-depth-5 hoverable ">
                        <a href="#ModalGestionar " class="modal-trigger ">
                            <div class="card-image waves-effect waves-block waves-light ">
                                <img class="activator " src="img/terceraIlustracion.svg ">
                            </div>
                            <div class="card-content ">
                                <span class="card-title activator grey-text text-darken-4 ">Gestionar</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!--End Contenido-->

    <!--Begin Modals-->
    <!--Modal Agregar-->
    <div id="ModalAgregar " class="modal ">
        <div class="modal-content ">
            <h4>Modal Agregar</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero quisquam dignissimos repellendus quam repellat, atque iusto tenetur veniam minus quaerat! Similique, natus. Placeat dolore blanditiis at voluptatum possimus sit nihil.</p>
        </div>
        <div class="modal-footer ">
            <a href="#! " class="modal-close waves-effect waves-green btn-flat ">Agregar Entrega</a>
            <a href="#! " class="modal-close waves-effect waves-green btn-flat ">Cancelar</a>
        </div>
    </div>

    <!--Modal Gestionar-->
    <div id="ModalGestionar " class="modal ">
        <div class="modal-content ">
            <h4>Modal Gestionar</h4>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus aut blanditiis molestiae tempore suscipit dicta nihil sed quaerat qui voluptatibus recusandae facilis veritatis sequi ullam perferendis, quod est quam iste?</p>
        </div>
        <div class="modal-footer ">
            <a href="#! " class="modal-close waves-effect waves-green btn-flat ">Aplicar cambios</a>
            <a href="#! " class="modal-close waves-effect waves-green btn-flat ">Cancelar</a>
        </div>
    </div>
    <!--End Modals-->

    <!-- Footer Scripts -->
    <?php require_once('./components/footer-scripts.html'); ?>
    
</body>

</html>