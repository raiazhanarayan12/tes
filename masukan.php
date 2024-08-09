<?php
require 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $kelas = $_POST["kelas"];
    $mingguke = $_POST["mingguke"];
    $bulan = $_POST["bulan"];
    $tahun = $_POST["tahun"];
    
    $sql = "INSERT INTO data_pembayaran (nama, kelas, mingguke, bulan, tahun) VALUES ('$nama', '$kelas', '$mingguke', '$bulan', '$tahun')";
}

if ($connection->query($sql) === TRUE) {
    echo "Data berhasil disimpan.";
    header('location:datainput.php');
} else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}

?>