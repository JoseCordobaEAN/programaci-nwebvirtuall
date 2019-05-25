<?php

require('bd.php');

if (isset($_GET['text'])){


    $hecha = isset($_GET['hecha']) ? 1 : 0;

    $consulta = "INSERT INTO tareas ( texto, hecha) VALUES ( '".$_GET['text']."', ".$hecha.")";

    echo $consulta;

    if($conexion -> query($consulta)){
        echo 'Se agregó una tarea';
    }

}else {
   header('Location: ver_tareas.php');


}
?>
