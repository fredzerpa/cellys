<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cellys Home</title>
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