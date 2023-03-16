<?php
    require_once(dirname(__DIR__)."./layout/header.php");
?>
<h1>Agregar Autor</h1>
<form name="AgregarAutor" method="POST" action="../../Controllers/indexController.php">
            <div class="form-floating mb-3">
                <input type="text" name="codigo" class="form-control" id="codigo" placeholder="name@example.com">
                <label for="codigo">Código Autor</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Password">
                <label for="nombre">Nombre</label>
                <input type="hidden" name="controller" value="autor">
            </div>
            <button type="submit" name="guardar" class="btn btn-outline-primary">Guardar</button>
            <button type="reset" class="btn btn-outline-secondary">Limpiar</button>
        </form>

<?php
    include(dirname(__DIR__)."./layout/footer.php");
?>