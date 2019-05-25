<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hola php</title>
</head>
<body>
    
    <?php
        require('bd.php');
    ?>

    <h2>Hola desde html</h2>
    <h2><?php 
        
        $entero = 10;
        $flotantes = 12.3;
        $cadena = 'Hola mundo';
        $booleano = true;
        
        echo 'la suma entre '.$entero.' y '. $flotantes. ' es '. ($entero + $flotantes);
        
        echo $booleano;
        
        
        ?></h2>

        <a href="ver_tareas.php"> Ver tareas</a>
    
</body>
</html>
