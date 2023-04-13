<?php
    require_once($_SERVER['DOCUMENT_ROOT']."/Controllers/EditorialController.php");

    $id = $_GET["id"];
    $delete = new EditorialController("","","");
    $delete->eliminar($id);

?>