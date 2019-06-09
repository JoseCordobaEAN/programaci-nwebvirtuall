<?php
require('header.php');
?>
<div class="container">
    <form action="respuesta.php" method="post">
        <div class="form-group">
            <label for="usuario">Usuario</label>
            <input type="text" class="form-control" name="usuario" id="usuario">
        </div>
        <div class="form-group">
            <label for="pass">Contraseña</label>
            <input type="password" class="form-control" name="pass" id="pass">
        </div>
        <input type="submit" class="btn btn-primary" value="Crear">
    </form>
</div>

<?php
require('footer.php');
?>
