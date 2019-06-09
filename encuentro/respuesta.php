<?php
require('header.php');
?>
    <p>ME ENVIARON:
       <?php
        if (isset($_POST['usuario']) && isset($_POST['pass'])){
            echo $_POST['usuario'];
            echo $_POST['pass'];
        }else{
            echo 'Nada';
        }
        ?>
    </p>
<?php
require('footer.php');
?>
