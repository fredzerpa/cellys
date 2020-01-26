<?php
    $modal_popup = "M.toast({html: 'Ya estas aquí!'})";
    $page = explode("/", $_SERVER['PHP_SELF']);
    $pagesArray = ["p-control" => ["class" => "", "href" => "responsables.php", "modal-popup" => ""],
                    "entrega" => ["class" => "", "href" => "entrega.php", "modal-popup" => ""],
                    "recibo" => ["class" => "", "href" => "recibo.php", "modal-popup" => ""],
                    "inventario" => ["class" => "", "href" => "inventario.php", "modal-popup" => ""],
                    "manufactura" => ["class" => "", "href" => "manufactura.php", "modal-popup" => ""],
                    "show-dropdown" => ["li" => "", "div" => ""]
                ];
    switch (end($page)) {
        case "responsables.php" :
            $pagesArray["p-control"]["class"] = "active";
            $pagesArray["p-control"]["href"] = "#";
            $pagesArray["p-control"]["modal-popup"] = "$modal_popup";
        break;
        case "entrega.php" :
            $pagesArray["entrega"]["class"] = "active";
            $pagesArray["entrega"]["href"] = "#";
            $pagesArray["entrega"]["modal-popup"] = "$modal_popup";
            $pagesArray["show-dropdown"]["li"] = "active";
            $pagesArray["show-dropdown"]["div"] = "display: block;";

        break;
        case "recibo.php" :
            $pagesArray["recibo"]["class"] = "active";
            $pagesArray["recibo"]["href"] = "#";
            $pagesArray["recibo"]["modal-popup"] = "$modal_popup";
            $pagesArray["show-dropdown"]["li"] = "active";
            $pagesArray["show-dropdown"]["div"] = "display: block;";
        break;
        case "inventario.php" :
            $pagesArray["inventario"]["class"] = "active";
            $pagesArray["inventario"]["href"] = "#";
            $pagesArray["inventario"]["modal-popup"] = "$modal_popup";
        break;
        case "manufactura.php" :
            $pagesArray["manufactura"]["class"] = "active";
            $pagesArray["manufactura"]["href"] = "#";
            $pagesArray["manufactura"]["modal-popup"] = "$modal_popup";
        break;
    }
?>

<ul id="slide-out" class="sidenav sidenav-fixed barra-izquierda">
    <!--Donde va el logo-->
    <li>
        <div class="user-view" style="padding: 0; margin: 0px;">
            <div class="background fondo">
            </div>
            <img class="LogoEmpleados responsive-img" src="img/logo.png">
        </div>
    </li>
    <!--Para el menú tipo acordion-->
    <ul class="collapsible collapsible-accordion Menu-sidenav">
        <!--Cada li es una opcion del Sidenav-->
        <li class="divider"></li>
        <li>
            <!--Una linea larga ya que incluye los iconos-->
            <a class="collapsible-header HoverEmpleados <?php print($pagesArray["p-control"]["class"]); ?>" href="<?php print($pagesArray["p-control"]["href"]); ?>" onclick="<?php print($pagesArray["p-control"]["modal-popup"]); ?>"><i class="material-icons left white-text">build</i>Panel De control</a>
        </li>
        <li class="<?php print($pagesArray["show-dropdown"]["li"]); ?>">
            <a class="collapsible-header HoverEmpleados"><i class="material-icons left white-text">local_shipping</i>Despachos<i class="material-icons right white-text">arrow_drop_down</i></a>
            <!--Es lo que desplega el botón-->
            <div class="collapsible-body" style="<?php print($pagesArray["show-dropdown"]["div"]); ?>">
                <ul>
                    <li><a class="gestionar <?php print($pagesArray["entrega"]["class"]); ?>" href="<?php print($pagesArray["entrega"]["href"]); ?>" onclick="<?php print($pagesArray["entrega"]["modal-popup"]); ?>"><i class="material-icons">add</i>Entrega</a></li>
                    <li><a class="gestionar <?php print($pagesArray["recibo"]["class"]); ?>" href="<?php print($pagesArray["recibo"]["href"]); ?>" onclick="<?php print($pagesArray["recibo"]["modal-popup"]); ?>"><i class="material-icons">add</i>Recibo</a></li>
                </ul>
            </div>
        </li>
        <li>
            <a class="collapsible-header HoverEmpleados <?php print($pagesArray["inventario"]["class"]); ?>" href="<?php print($pagesArray["inventario"]["href"]); ?>" onclick="<?php print($pagesArray["inventario"]["modal-popup"]); ?>"><i class="material-icons left white-text">filter_none</i>Inventario</a>
        </li>
        <li>
            <a class="collapsible-header HoverEmpleados <?php print($pagesArray["manufactura"]["class"]); ?>" href="<?php print($pagesArray["manufactura"]["href"]); ?>" onclick="<?php print($pagesArray["manufactura"]["modal-popup"]); ?>"><i class="material-icons left white-text">settings</i>Manufactura</a>
        </li>
    </ul>
</ul>