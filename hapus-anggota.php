<?php
include 'database.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Hapus data berdasarkan ID
    $sql_delete = "DELETE FROM data_anggota WHERE id = $id";
    if ($connection->query($sql_delete) === TRUE) {
        header("Location: admin-anggota.php");
    } else {
        echo "Error: Data gagal dihapus";
    }
} else {
    echo "ID tidak diberikan.";
}
?>