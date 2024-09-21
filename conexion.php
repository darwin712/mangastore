<?php
$servername = "127.0.0.1";
$database = "alexandra_smangastore";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Fallo en la conexion: " . mysqli_connect_error());
}

?>