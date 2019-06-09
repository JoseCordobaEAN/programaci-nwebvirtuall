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
            <th scope="col">Editar</th>
            <th scope="col">Eliminar</th>
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
                        <td><button type="button" class="btn btn-success">&#9998;</button></td>
                        <td>
                        <a href="delete.php?id='.$row['id'].'" class="btn btn-danger" >   &#9003;   </a>
                        <!--
                            <form action="delete.php?id='.$row['id'].'" method="get">
                                <button type="submit" class="btn btn-danger">&#9003;</button>
                            </form>
                        </td> >

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
