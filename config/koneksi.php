<?php
$host = "db";
$user = "warungbakso";
$password = "warungbakso";
$dbname = "WarungBakso";

$koneksi = new mysqli($servername, $username, $password, $dbname);

if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}
?>
