<?php
// CONEXIÓN BBDD
$host = "localhost";
$username = "root";
$password = "";
$dbname = "code_warriors";
$connection = mysqli_connect ($host, $username, $password, $dbname);
$query = "SELECT * FROM miembros";
$query = "SELECT * from miembros";
$resultado = mysqli_query($connection,$query);
?>