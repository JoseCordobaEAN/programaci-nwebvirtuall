<?php

include('header.php');

if (isset($_GET['id'])){
    $query = 'DELETE FROM usuario WHERE id = '.$_GET['id']);

    require('bd.php');

    if($conexion -> query($query)){
        echo 'Usuario eliminado';
    }else{
        echo 'No se pudo eliminar el usuario';
    }

}
?>

<br>
<a href="index.php">Regresar</a>

<?php
include('footer.php');
?>
