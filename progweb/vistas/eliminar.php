<?php

// recibimos el dato 
$idUser = $_POST['username'];

// ejecutamos la eliminacion
$link = mysqli_connect("localhost", "root", "", "seminarios");
$resultados = mysqli_query($link, 'DELETE FROM usuarios WHERE username = username');

// redirigimos a la tabla
header( 'home.php' );

