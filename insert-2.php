<?php
require 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $month = $_POST["month"];
    
    $sql = "INSERT INTO data_pembayaran (nama, month ) VALUES ('$nama' , '$month')";
}

if ($connection->query($sql) === TRUE) {
    echo "Data berhasil disimpan.";
    header('location:admin-pembayaran.php');
} else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}

?>

