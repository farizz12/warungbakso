<?php

$db_name = 'mysql:host=db;dbname=warungbakso'; // Ganti dengan alamat IP container MySQL
$user_name = 'warungbakso';
$user_password = 'warungbakso';

try {
    $conn = new PDO($db_name, $user_name, $user_password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>
