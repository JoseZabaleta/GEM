<?php 
$host ="localhost";
$user="root";
$pass="";
$db="bd_sistema_ventas";
$conexion = new mysqli($host,$user,$pass,$db);

if (!$conexion) {
    echo "conexion fallida" ;
}