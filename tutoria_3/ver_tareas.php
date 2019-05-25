<?php

require('bd.php');

$consulta = "SELECT * FROM tareas";



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tareas disponibles</title>
</head>

<body>

   <div class="tareas-actuales">
    <?php

    $result = $conexion -> query($consulta);

    if ($result->num_rows > 0) {

        while($row = $result->fetch_assoc()) {
            echo "id: " . $row["id_tarea"]. " - Tarea: " . $row["texto"]. " hecha? " . $row["hecha"]. "<br>";
        }
    } else {
        echo "0 results";
    }
    ?>
    </div>

    <div class="crear-tarea">

        <form action="crear_tarea.php" method="get">
            <input type="text" name="text" id="text" placeholder="tarea">
            <label for="hecha">Completada? </label><input type="checkbox" name="hecha" id="hecha">
            <input type="submit" value="Crear tarea">
        </form>

    </div>


</body>

</html>
