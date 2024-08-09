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

<body>
    <!-- Navbar -->
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
                <a class="link-nav" href="index.php">
                    <span>Home</span>
                </a>
                
                <a class="link-nav mx-5" href="anggota.php">
                    <span>Data Member</span>
                </a>
                <a class="link-nav-active" href="pembayaran.php">
                    <span>Data Payment</span>
                </a>
                <a class="link-nav mx-5 me-0" href="contact.php">
                    <span>Contact</span>
                </a>
            </div>
        </div>
    </nav>
    <!-- Navbar -->
    <h2 style="margin-top: 100px;">Data Payment</h2>

    <?php
    include 'database.php';
    $sql = "SELECT * FROM data_pembayaran";
    $result = $connection->query($sql);
    ?>
    
    

    <table class="tabel">
        <tr>
            <th>NAME</th>
            <th>WEEK-1</th>
            <th>WEEK-2</th>
            <th>WEEK-3</th>
            <th>WEEK-4</th>
            <th>MONTH</th>
        </tr>

        <?php
        $NO=0;
        while ($row = mysqli_fetch_assoc($result)) {
            $NO++;
            ?>
        
            <tr>
                <td>
                    <?php echo $row["nama"]; ?>
                </td>
                <td>
                    <?php echo $row["week_1"]; ?>
                </td>
                <td>
                    <?php echo $row["week_2"]; ?>
                </td>
                <td>
                    <?php echo $row["week_3"]; ?>
                </td>
                <td>
                    <?php echo $row["week_4"]; ?>
                </td>
                <td>
                    <?php echo $row["month"]; ?>
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