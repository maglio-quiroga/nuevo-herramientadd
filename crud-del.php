<?php
$server = "localhost";
$user = "root";
$pass = "maglio100";
$db ="tarea1";

$conexion = new mysqli($server,$user,$pass,$db);

$email_a_borrar=$_GET['id'];
$sql="DELETE FROM clientes WHERE email='$email_a_borrar'";
$query=mysqli_query($conexion,$sql);
if($query){
    header("Location:api-crud.php");
}else{
    
}
?>