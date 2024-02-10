<?php
$servername = "mysql";
$username = "user"; 
$password = "password";
$dbname = "db";
$port = 3306;

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connessione al database fallita: " . $conn->connect_error);
}
?>
