<?php
require_once("AutorController.php");

    $opcion = $_POST['controller'];
    if($opcion == "autor"){
        $objeto = new AutorController($_POST['codigo'], $_POST['nombre'], $_POST['guardar']);
    }

?>