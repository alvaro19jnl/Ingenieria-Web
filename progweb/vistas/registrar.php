<?php
include 'cn.php';

$username =$_POST["username"];
$password =$_POST["password"];
$twitter =$_POST["twitter"];
$facebook =$_POST["facebook"];
$google =$_POST["google"];
$nombre =$_POST["nombre"];
$apellido =$_POST["apellido"];
$telefono =$_POST["telefono"];
$direccion =$_POST["direccion"];

$insertar ="INSERT INTO usuarios(username, password, twitter, facebook, google, nombre, apellido, telefono, direccion)
 VALUES ('$username','$password','$twitter', '$facebook', '$google', '$nombre', '$apellido', '$telefono', '$direccion')";





$resultado = mysqli_query($conexion, $insertar);

 if (!$resultado){
     echo 'error al registarse';

 }else{
    header("location: ./index.html");
     
 }

?>
