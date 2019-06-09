<?php
require('header.php');
require('bd.php');


?>
    <p>
       <?php
        if (isset($_POST['usuario']) && isset($_POST['pass'])){
            $query = "INSERT INTO 'usuario' ( 'nombre', 'contrasena') VALUES ('".$_POST['usuario']."', '".$_POST['pass']."')";
            echo $query;

            if ($conexion -> query($query)){
                echo 'Se Insertó el usuario';
            }else{
                echo 'paila';
            }


        }else{
            echo 'Nada';
        }
        ?>
    </p>
<?php
require('footer.php');
?>
