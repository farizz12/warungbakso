<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = mysqli_query($koneksi, "SELECT * FROM menu  WHERE id='$id'");
    $data = mysqli_fetch_array($query);
} else {
    header("Location: index.php"); // Redirect ke halaman utama jika id tidak ada
}

// Validasi bahwa id adalah angka
if (is_numeric($id)) {
    // Siapkan statement untuk mencegah SQL Injection
    $stmt = $koneksi->prepare("DELETE FROM menu WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();

    // Redirect setelah berhasil menghapus
    header("Location:page.php?page=daftar-menu");
    exit();
} else {
    header("Location:page.php?page=daftar-menu");
    exit();
}
