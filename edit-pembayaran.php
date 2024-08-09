<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Css Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- Css Bootstrap -->
    <link rel="stylesheet" href="css/anggota.css">

</head>

<body>
    <?php
    include 'database.php';

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        // Ambil data berdasarkan ID
        $sql = "SELECT id, nama, month FROM data_pembayaran WHERE id = $id";
        $result = $connection->query($sql);

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            $nama = $row['nama'];
            $month = $row['month'];
        } else {
            echo "Data tidak ditemukan.";
            exit();
        }
    } else {
        echo "ID tidak diberikan.";
        exit();
    }

    // Jika data diperbarui
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $newnama = $_POST['nama'];
        $newMonth = $_POST['month'];

        $sql_update = "UPDATE data_pembayaran SET
         nama = '$newnama', month = '$newMonth' WHERE id = $id";
        if ($connection->query($sql_update) === TRUE) {
            header("Location: admin-pembayaran.php");
        } else {
            echo "Error: Data tidak berhasil diperbarui";
        }
    }
    ?>

    <form class="form text-center" method="post">
        <h2 class="text">Basketball Extracurricular Member Data</h2>

        <p class="label-m mt-5" for="nama">Name:</p>
        <input class="my-tab" type="text" id="nama" name="nama" value="<?php echo $nama; ?>" required><br><br>

        <p class="label-m mt-5" for="month">Month:</p>
        <input class="my-tab" type="text" id="month" name="month" value="<?php echo $month; ?>" required><br><br>


        <input class="mb-5 btn-sum" type="submit" value="Submit" onclick="return confirm('DATA SUCCESSFULLY SAVED')">


    </form>

    <!-- Java Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
    <!-- Java Bootstrap -->
</body>

</html>