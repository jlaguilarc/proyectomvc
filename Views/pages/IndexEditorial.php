<?php
    require_once($_SERVER['DOCUMENT_ROOT']."/Views/layout/header.php");
    require_once($_SERVER['DOCUMENT_ROOT']."/Controllers/EditorialController.php");
?>
<h2>Página de Editoriales</h2>

<a href="AgregarEditorial.php" class="btn btn-primary">Agregar Editorial</a>

<br>
<br>
<div class="table-responsive">
    <table border="1" width="80%" class="table">
        <thead>
            <tr class="table-primary">
                <th>Código Editorial</th>
                <th>Nombre Editorial</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $info = new EditorialController("","","");
            $data = $info->index();
            foreach($data["editoriales"] as $dato){
                echo "<tr>";
                    echo "<th>".$dato["codigoEditorial"]."</th>";
                    echo "<th>".$dato["nombreEditorial"]."</th>";?>
                    <th><a href="<?php $_SERVER['DOCUMENT_ROOT']?>/Views/pages/EditarEditorial.php?id='<?php echo $dato["codigoEditorial"]?>'">Editar</a></th>
                    <th><a href="<?php $_SERVER['DOCUMENT_ROOT']?>/Views/pages/EliminarEditorial.php?id='<?php echo $dato["codigoEditorial"]?>'">Borrar</a></th>
                    <?php
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>
<?php
    require_once($_SERVER['DOCUMENT_ROOT']."/Views/layout/footer.php");
?>