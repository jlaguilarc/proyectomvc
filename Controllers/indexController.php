<?php
require_once($_SERVER['DOCUMENT_ROOT']."/Controllers/AutorController.php");
require_once($_SERVER['DOCUMENT_ROOT']."/Controllers/EditorialController.php");

    $opcion = $_POST['controller'];
    if($opcion == "autor"){
        $objeto = new AutorController($_POST['codigo'], $_POST['nombre'], $_POST['guardar']);
    }else if($opcion == "editorial"){
        $objeto = new EditorialController($_POST['codigo'], $_POST['nombre'], $_POST['guardar']);
    }else if($opcion == "updateeditorial"){
        $objeto = new EditorialController($_POST['codigo'], $_POST['nombre'], "Actualizar");
    }

?>