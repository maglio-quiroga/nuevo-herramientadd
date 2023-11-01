<?php
$server = "localhost";
$user = "root";
$pass = "maglio100";
$db ="tarea1";

$conexion = new mysqli($server,$user,$pass,$db);

$email=$_GET['email'];
$pass=$_GET['pass'];
$nombre=$_GET['nombre'];
$fnac=$_GET['fnac'];

$genero=$_GET['genero'];
$ropa=$_GET['ropa'];

#validaciones-----------------
if(!empty($email) || !empty($pass) || !empty($nombre) || !empty($fnac) || !empty($genero) || !empty($ropa)){
    mysqli_query($conexion,"INSERT INTO clientes (email,pass,nombre,fnac,genero,productos) VALUES ('$email','$pass','$nombre','$fnac','$genero','$ropa')");
    header("Location:index.php");
    
}else{
    
}
?>