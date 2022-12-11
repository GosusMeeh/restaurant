<?php

$page = $_GET['page'] ?? null;

switch ($page) {

    case 'inicio':

        require("sites/usuario.php");

    break;

    case 'carta':

        require("sites/carta.php");

    break;

    //TODO: Eliminar esta entrada

    case 'registro':
    case 'entrada':

        require("sites/sign.php");

    break;

    case 'hamburgesa':

        require("sites/burger.php");

    break;

    default:

        header("Location: /inicio");

}

?>