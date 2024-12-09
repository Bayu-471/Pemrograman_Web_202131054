<?php
$servername = "localhost"; // atau alamat server Anda
$username = "202131054";        // username database
$password = "";            // password database
$dbname = "krs"; // nama database Anda

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
