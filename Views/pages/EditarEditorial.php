<?php
    require_once($_SERVER['DOCUMENT_ROOT']."/Views/layout/header.php");
    require_once($_SERVER['DOCUMENT_ROOT']."/Controllers/EditorialController.php");
?>
<h1>Editar Editorial</h1>
<?php
    $info = new EditorialController("","","");
    $data = $info->editar($_GET['id']);
?>
<form name="AgregarEditorial" method="POST" action="<?php echo $_SERVER['DOCUMENT_ROOT']?>/Controllers/indexController.php">
            <div class="form-floating mb-3">
                <input type="text" name="codigo" class="form-control" id="codigo" value="<?php echo $_GET['id'] ?>" readonly>
                <label for="codigo">Código Editorial</label>
            </div>
            
            <div class="form-floating mb-3">
                <?php
                foreach($data["editorial"] as $dato){
                    echo '<input type="text" name="nombre" class="form-control" id="nombre" value="'.$dato["nombreEditorial"].'" placeholder="Password">';
                    echo '<label for="nombre">Nombre Editorial</label>';
                }
                ?>
                <input type="hidden" name="controller" value="updateeditorial">
            </div>
            <button type="submit" name="guardar" class="btn btn-outline-primary">Actualizar</button>
            <button type="reset" class="btn btn-outline-secondary">Limpiar</button>
        </form>

<?php
    include($_SERVER['DOCUMENT_ROOT']."/Views/layout/footer.php");
?>