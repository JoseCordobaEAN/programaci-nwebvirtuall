<?php

$hostBD = 'localhost';
$userBD = 'server';
$passBD = 'server';
$BD = 'usuario';

try{
    $conexion = mysqli_connect($hostBD, $userBD, $passBD, $BD) or die('no hay conexion');
}catch (Exception $e) {
    echo 'paila no hay conexion';
}
