<?php


$server = "localhost";
$user = "root";
$pass = "maglio100";
$db ="tarea1";

$conexion = new mysqli($server,$user,$pass,$db);

$email=$_GET['email'];
$nueva_clave=$_GET['pass'];

$sql="SELECT email FROM clientes WHERE email='$email'";
$query=mysqli_query($conexion,$sql);
$datos=mysqli_fetch_array($query);

if($datos && !empty($nueva_clave)){
    $sql2="UPDATE clientes SET pass='$nueva_clave' WHERE email='$email'";
    $query2=mysqli_query($conexion,$sql2);
    if($query2){
        header("Location:index.php");
    }
}else{
    header("Location:index.php");
}


?>