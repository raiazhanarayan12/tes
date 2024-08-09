<!DOCTYPE html>
<html>

<head>
    <title>Menampilkan Data dari Database</title>
    <!-- Css Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- Css Bootstrap -->

    <!-- My Css -->
    <link rel="stylesheet" href="css/anggota.css">
    <!-- My Css -->

    <!-- Font Css -->
    <link rel="stylesheet" href="css/font.css">
    <!-- Font Css -->
</head>

<body><!-- Navbar -->
    <nav class="mynav fixed-top">
        <div class="d-flex justify-content-between align-items-center">
            <!-- TEXT BRAND -->
            <div class="d-flex align-items-center ms-4 mt-3">
                <a class="brand-link" href="index.html">
                    <span class="brand-1 font1">CASH</span>
                    <img class="nav-icon" src="assets/icon/BasketBall.png" alt="">
                    <span class="brand-1 font1">BASKET</span>
                </a>
            </div>
            <!-- LINK NAVBAR -->
            <div class="d-flex align-items-center me-5 mt-2 lmn-link">
                <a class="link-nav" href="admin.php">
                    <span>Home</span>
                </a>
                <a class="link-nav-active mx-5" href="admin-anggota.php">
                    <span>Data Member</span>
                </a>
                <a class="link-nav" href="admin-pembayaran.php">
                    <span>Data payment</span>
                </a>
                <a class="link-nav mx-5 me-0" href="index.php">
                    <span>Logout</span>
                </a>
            </div>
        </div>
    </nav>
    <!-- Navbar -->
    <h2>Data Anggota</h2>

    <form style="padding-top: 50px" class="form text-center" action="insert.php" method="post">
        <h2 class="text">Basketball Extracurricular Member Data</h2>

        <p class="label-m mt-5" for="nama">Name:</p>
        <input class="my-tab" type="text" id="nama" name="nama" required><br><br>

        <p class="label-m" for="kelas">class:</p>
        <div style="padding: 0px 525px;">
                    <?php
                    include 'database.php';
                    $query = "SELECT kelas FROM kelas";
                    $result = $connection->query($query);
                    ?>
                    <select class="form-select" name="kelas">
                        <?php
                        while ($row = mysqli_fetch_assoc($result)) { ?>
                            <option value="<?php echo $row["kelas"]; ?>">
                                <?php echo $row['kelas'] ?>
                            </option>
                        <?php } ?>
                    </select>
            </div><br><br>

        <p class="label-m" for="jabatan">position:</p>
        <div style="padding: 0px 525px;">
                    <?php
                    include 'database.php';
                    $query = "SELECT jabatan FROM jabatan";
                    $result = $connection->query($query);
                    ?>
                    <select class="form-select" name="jabatan">
                        <?php
                        while ($row = mysqli_fetch_assoc($result)) { ?>
                            <option value="<?php echo $row["jabatan"]; ?>">
                                <?php echo $row['jabatan'] ?>
                            </option>
                        <?php } ?>
                    </select>
            </div><br><br>


        <input class="mb-5 btn-sum" type="submit" value="Submit" onclick="return confirm('DATA SAVED SUCCESSFULLY')">


    </form>

    <?php
    include 'database.php';
    $sql = "SELECT * FROM data_anggota";
    $result = $connection->query($sql);
    ?>
    <table class="tabel">
        <tr>
            <th>NO</th>
            <th>NAME</th>
            <th>CLASS</th>
            <th>position</th>
            <th>Operations</th>



        </tr>

        <?php
        $NO = 0;
        while ($row = mysqli_fetch_assoc($result)) {
            $NO++;
            ?>

            <tr>
                <td>
                    <?php echo $NO; ?>
                </td>
                <td>
                    <?php echo $row["nama"]; ?>
                </td>
                <td>
                    <?php echo $row["kelas"]; ?>
                </td>
                <td>
                    <?php echo $row["jabatan"]; ?>
                </td>
                <td>
                    <a href="hapus-anggota.php?id=<?= $row["id"]; ?>"
                        onclick="return confirm('are you sure it will be deleted? ')">Delete</a>
                    |
                    <a href="edit-anggota.php?id=<?= $row["id"]; ?>">edit</a>
                </td>

            </tr>
        <?php } ?>

    </table>


    <!-- Java Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
    <!-- Java Bootstrap -->
</body>

</html>