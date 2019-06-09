<?php
require('header.php');
require('bd.php');


?>
<p>
    <?php
        if (isset($_POST['usuario']) && isset($_POST['pass'])){

            $query = "INSERT INTO usuario ( nombre, contrasena) VALUES ('".$_POST['usuario']."', '".$_POST['pass']."')";

            echo $query;

            if ($conexion -> query($query)){
                echo '<br>Se Insertó el usuario';
            }else{
                echo '<br>paila ese man no se deja';
            }


        }else{
            echo 'Nada';
        }
        ?>
</p>


<div class="container">
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">ID</th>
            <th scope="col">NOMBRE</th>
            <th scope="col">CONTRASEÑA</th>
        </tr>
    </thead>
    <tbody>
        <?php

        $query = 'SELECT * FROM usuario';

        $resultado = $conexion -> query($query);

         if ($resultado->num_rows > 0) {
            while($row = $resultado->fetch_assoc()) {
                echo '<tr>
                        <th scope="row">'.$row['id'].'</th>
                        <td>'.$row['id'].'</td>
                        <td>'.$row['nombre'].'</td>
                        <td>'.$row['contrasena'].'</td>
                    </tr>';
            }
        } else {
            echo "0 results";
        }

        ?>

    </tbody>
</table>
</div>


<?php
require('footer.php');
?>
