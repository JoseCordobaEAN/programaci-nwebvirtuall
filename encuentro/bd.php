<?php

$hostBD = 'localhost';
$userBD = 'server';
$passBD = 'server';
$BD = 'usuario';

$conexion = mysqli_connect($hostBD, $userBD, $passBD, $BD) or die('no hay conexion');
