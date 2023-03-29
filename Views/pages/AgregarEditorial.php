<?php
    include("https://proyectomvc-production-52e8.up.railway.app/layout/header.php");
?>
<h1>Agregar Editorial</h1>
<form name="AgregarEditorial" method="POST" action="https://proyectomvc-production-52e8.up.railway.app/Controllers/indexController.php">
            <div class="form-floating mb-3">
                <input type="text" name="codigo" class="form-control" id="codigo" placeholder="name@example.com">
                <label for="codigo">Código Editorial</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Password">
                <label for="nombre">Nombre Editorial</label>
                <input type="hidden" name="controller" value="editorial">
            </div>
            <button type="submit" name="guardar" class="btn btn-outline-primary">Guardar</button>
            <button type="reset" class="btn btn-outline-secondary">Limpiar</button>
        </form>

<?php
    include("https://proyectomvc-production-52e8.up.railway.app/layout/footer.php");
?>