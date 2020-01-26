<?php
    $page = explode("/", $_SERVER['PHP_SELF']);
    $pagesArray = ["home" => "", "empleados" => "", "nosotros" => "", "productos" => ""];
    switch (end($page)) {
        case "index.php" :
            $pagesArray["home"] = "active";
        break;
        case "empleados.php" :
            $pagesArray["empleados"] = "active";
        break;
        case "nosotros.php" :
            $pagesArray["nosotros"] = "active";
        break;
        case "productos.php" :
            $pagesArray["productos"] = "active";
        break;
    }
?>
<nav class="navbar">
    <div class="nav-wrapper container">
        <img src="./img/logo.png" alt="" class="brand-logo logo">
        <!--Para que aparezca el icono de desplegar-->
        <a href="# " data-target="menu-responsive " class="sidenav-trigger ">
            <i class="material-icons ">menu</i>
        </a>
        <!--Menú de la pagina en escritorio-->
        <ul id="nav-mobile" class="right hide-on-med-and-down menu-escritorio">
            <li class="<?php print($pagesArray["home"]); ?>"><a href="#"><i class="material-icons left">home</i> Inicio</a></li>
            <li class="<?php print($pagesArray["empleados"]); ?>"><a href="#"><i class="material-icons left">account_circle</i>Empleados</a></li>
            <li class="<?php print($pagesArray["nosotros"]); ?>"><a href="#"><i class="material-icons left">account_box</i>Nosotros</a></li>
            <li class="<?php print($pagesArray["productos"]); ?>"><a href="#"><i class="material-icons left">storage</i>Productos</a></li>
            <li><a class="waves-effect waves-light btn white-text Iniciar">Iniciar Sesión</a></li>
        </ul>
    </div>
</nav>