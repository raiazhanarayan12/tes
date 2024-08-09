<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CashBasket - Home</title>

    <!-- Css Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- Css Bootstrap -->

    <!-- My Css -->
    <link rel="stylesheet" href="css/pembayaran.css">
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
                <a class="link-nav" href="admin.php">
                    <span>Home</span>
                </a>
                <a class="link-nav mx-5" href="admin-anggota.php">
                    <span>Data Member</span>
                </a>
                <a class="link-nav-active" href="admin-pembayaran.php">
                    <span>Data payment</span>
                </a>
                <a class="link-nav mx-5 me-0" href="index.php">
                    <span>Logout</span>
                </a>
            </div>
        </div>
    </nav>
    <!-- Navbar -->

    <div class="control">
        <form class="form text-center" action="insert-2.php" method="post">
            <h2 class="text">Basketball Extracurricular Payment Data</h2>

            <p class="label-m mt-5" for="nama">Nama:</p>
            <div style="padding: 0px 525px;">
                    <?php
                    include 'database.php';
                    $query = "SELECT nama FROM data_anggota";
                    $result = $connection->query($query);
                    ?>
                    <select class="form-select" name="nama">
                        <?php
                        while ($row = mysqli_fetch_assoc($result)) { ?>
                            <option value="<?php echo $row["nama"]; ?>">
                                <?php echo $row['nama'] ?>
                            </option>
                        <?php } ?>
                    </select>
            </div>
            <p class="label-m mt-5" for="month">Month:</p>
            <div style="padding: 0px 525px;">
                    <?php
                    include 'database.php';
                    $query = "SELECT * FROM month";
                    $result = $connection->query($query);
                    ?>
                    <select class="form-select" name="month">
                        <?php
                        while ($row = mysqli_fetch_assoc($result)) { ?>
                            <option value="<?php echo $row["month"]; ?>">
                                <?php echo $row['month'] ?>
                            </option>
                        <?php } ?>
                    </select><br><br>
            </div>

            <input class="mb-5 btn-sum" type="submit" value="Submit" onclick="return confirm('DATA SAVED SUCCESSFULLY')">


        </form>
        <?php
        include 'database.php';
        $sql = "SELECT * FROM data_pembayaran";
        $result = $connection->query($sql);
        ?>
        <table class="tabel">
            <tr>
                <th>NO</th>
                <th>NAME</th>
                <th>WEEK-1</th>
                <th>WEEK-2</th>
                <th>WEEK-3</th>
                <th>WEEK-4</th>
                <th>MONTH</th>
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
                    <td>
                        <a style="text-decoration: none; color: #f58426 ;" href="hapus-pembayaran.php?id=<?= $row["id"]; ?>"
                            onclick="return confirm('Im sure it will be deleted? ')">Delete</a>
                        |
                        <a style="text-decoration: none; color: #f58426 ;"
                            href="edit-pembayaran.php?id=<?= $row["id"]; ?>">edit</a>
                        |
                        <a style="text-decoration: none; color: #f58426 ;"
                            href="week-1.php?id=<?= $row["id"]; ?>">Week-1</a>
                        |
                        <a style="text-decoration: none; color: #f58426 ;"
                            href="week-2.php?id=<?= $row["id"]; ?>">Week-2</a>
                        |
                        <a style="text-decoration: none; color: #f58426 ;"
                            href="week-3.php?id=<?= $row["id"]; ?>">Week-3</a>
                        |
                        <a style="text-decoration: none; color: #f58426 ;"
                            href="week-4.php?id=<?= $row["id"]; ?>">Week-4</a>
                    </td>

                </tr>
            <?php } ?>

        </table>
    </div>

    <!-- Footer -->
    <footer class="my-foot">
        <div class="d-flex justify-content-between">
            <!-- Section 1 -->
           
            <!-- Section 2 -->
            <div class="list-foot text-center">
                <p class="font3">Contact</p>
                <div class="lmn-foot">
                    <p>We will listen to your complaints more seriously by email:</p>
                    <a class="link-email-foot" href="https://mail.google.com/">cashbasket@gmail.com</a></p>
                </div>
            </div>
            <!-- Section 3 -->
            <div class="list-foot text-center">
                <p class="font3">Sosial media</p>
                <div class="d-flex space-foot">
                    <p><a href="https://www.facebook.com/"><img class="icon-foot" src="assets/icon/facebook.jpeg"
                                alt=""></a></p>
                    <p><a href="https://www.instagram.com/fourrivalbasketball/"><img class="icon-foot mx-4"
                                src="assets/icon/instagram.jpeg" alt=""></a></p>
                    <p><a href="https://mail.google.com/"><img class="icon-foot" src="assets/icon/gmail.jpeg"
                                alt=""></a></p>
                </div>
            </div>
        </div>

        <!-- End -->
        <hr class="mt-5">
        <p class="fw-light text-center">Coppyright © 2023 by CashBasket</p>
    </footer>
    <!-- Footer -->

    <!-- Java Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
    <!-- Java Bootstrap -->
</body>

</html>