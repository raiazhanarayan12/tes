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
        $sql = "SELECT id, nama FROM data_pembayaran WHERE id = $id";
        $result = $connection->query($sql);

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            $nama = $row['nama'];

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

        $new1 = "Done";


        $sql_update = "UPDATE data_pembayaran SET week_1 = '$new1' WHERE id = $id";
        if ($connection->query($sql_update) === TRUE) {
            header("Location: admin-pembayaran.php");
        } else {
            echo "Error: Data tidak berhasil diperbarui";
        }
    }
    ?>

    <form class="form text-center" method="post">
        <h2 class="text">Basketball Extracurricular Payment Data</h2>

        <p class="mt-5 fs-3 fw-bold">Name : <?php echo $nama; ?> ( Week-1 )</p>

        <input class="mb-0 btn-sum mt-3" type="submit" value="Already paid" onclick="return confirm('DATA SUCCESSFULLY SAVED')">

    </form>

    <!-- Java Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
    <!-- Java Bootstrap -->
</body>

</html>