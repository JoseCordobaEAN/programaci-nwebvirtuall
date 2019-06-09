<?php

$host = 'localhost';
$user = 'jose';
$password = 'server';
$base = 'tareas';

$conexion = mysqli_connect($host, $user, $password, $base);

if ($conexion){
    echo 'estamos conectados a la base de datos';
}else{
    echo 'Hay un error de conexion';
}
