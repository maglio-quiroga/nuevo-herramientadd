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
$usuarios=mysqli_fetch_array($consulta);
if($email=="maglio@gmail.com" && $pass=="maglio"){
    header("Location:api-crud.php");
}
else{
    foreach ($usuarios as $valor) {
        if($email==$usuarios['email'] && $pass==$usuarios['pass']){
            header("Location:index-iniciado.php?user='$email'");
        }else{
            header("Location:index.php");
        }
      }
}

?>