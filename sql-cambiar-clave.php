<?php


$server = "localhost";
$user = "root";
$pass = "maglio100";
$db ="tarea1";

$conexion = new mysqli($server,$user,$pass,$db);

#validar si existe el email

$sql="SELECT email FROM clientes";
$query=mysqli_query($conexion,$sql);
$datos=mysqli_fetch_array($query);

$email=$_GET['email'];
$nueva_clave=$_GET['pass'];

foreach($datos as $valor){
    if($email==$datos['email']){
        $sql2="UPDATE clientes SET pass='$nueva_clave' WHERE email='$email'";
        $query2=mysqli_query($conexion,$sql2);
        if($query2){
            header("Location:index.php");
        }
    }else{

    }
}



?>