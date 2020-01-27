<!DOCTYPE html>
<html lang="en">

<head>
    <title>Cellys Home</title>

    <!-- Metas && Imports -->
    <?php require_once('./components/head.html'); ?>
    
    <!--Styles-->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <!--Begin NavBar-->
        <?php include_once('./components/client-side/navbar.php'); ?>

        <!--Menu para telefonos -->
        <ul class="sidenav menu-responsive" id="menu-responsive ">
            <li><a href="#" onclick="alerta() "><i class="material-icons left">home</i> Inicio</a></li>
            <li><a href="#"><i class="material-icons left">account_circle</i>Empleados</a></li>
            <li><a href="#"><i class="material-icons left">account_box</i>Nosotros</a></li>
            <li><a href="#"><i class="material-icons left">storage</i>Productos</a></li>
            <li><a class="waves-effect waves-light btn Iniciar">Iniciar Sesión</a></li>
        </ul>
        <!--End NavBar-->

        <!--Begin Slider-->
        <div class="slider">
            <!--Para poner oscuro el slider y resate las letras-->
            <div class="filtro"></div>
            <div class="content-welcome section container">
                <div class="row">
                    <div class="col l5 offset-l7 m12 center">
                        <h1 class="white-text">La Mejor Calidad En Telas</h1>
                        <p class="white-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab rem quod at corrupti, pariatur nam?</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col l5 offset-l7 m12 s12 right-align botonsitoMadre">
                        <a class="botonsito waves-effect waves-light btn-large">Read More</a>
                    </div>
                </div>

            </div>
            <ul>
                <li><img src="img/imagen1.jpg" alt=""></li>
                <li><img src="img/imagen2.jpg" alt=""></li>
                <li><img src="img/imagen3.jpg" alt=""></li>
            </ul>
        </div>
        <!-- End Slider-->
    </header>


    <!--Begin Footer-->
    <footer class="footer">
        <div class="container center lfooter">
            <p>Copyright © <a href="">Cellys</a> J-983746539. Todos los derechos reservados.</p>
        </div>
    </footer>
    <!-- End Footer-->

    <!-- Footer Scripts -->
    <?php require_once('./components/footer-scripts.html'); ?>

</body>

</html>