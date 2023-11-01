<?php

$server = "localhost";
$user = "root";
$pass = "maglio100";
$db ="tarea1";

$conexion = new mysqli($server,$user,$pass,$db);

$email=$_GET['correo'];
$pass=$_GET['pass'];

$sql="SELECT email,pass FROM clientes WHERE email='$email' AND pass='$pass'";
$consulta=mysqli_query($conexion,$sql);

if($usuario = mysqli_fetch_assoc($consulta)){
    echo "el usuario existe";
    if($usuario['email']="maglio@gmail.com" && $usuario['pass']="maglio"){
        header("Location:api-crud.php");
    }
}else{
    echo "el usuario no existe";
}

?>