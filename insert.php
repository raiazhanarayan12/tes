<?php
require 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $kelas = $_POST["kelas"];
    $jabatan = $_POST["jabatan"];
    
    $sql = "INSERT INTO data_anggota (nama, kelas, jabatan) VALUES ('$nama', '$kelas', '$jabatan')";
}

if ($connection->query($sql) === TRUE) {
    echo "Data berhasil disimpan.";
    header('location:admin-anggota.php');
} else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}

?>

