<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "staj";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Bağlantı başarısız: " . $conn->connect_error);
}
?>
