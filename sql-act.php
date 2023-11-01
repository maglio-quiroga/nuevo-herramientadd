<?php
$server = "localhost";
$user = "root";
$pass = "maglio100";
$db ="tarea1";

$conexion = new mysqli($server,$user,$pass,$db);

$id=$_GET['id'];
#datos para actualizar
$email=$_GET['email'];
$pass=$_GET['pass'];
$nombre=$_GET['nombre'];
$fnac=$_GET['fnac'];
$genero=$_GET['genero'];
$productos=$_GET['ropa'];


if(!empty($email) || !empty($pass) || !empty($nombre) || !empty($fnac) || !empty($genero) || !empty($productos)){
    mysqli_query($conexion,"UPDATE clientes SET email='$email',pass='$pass',nombre='$nombre',
    fnac='$fnac',genero='$genero',productos='$productos' WHERE email='$id'");
    header("Location:api-crud.php");
}else{
    
}

?>