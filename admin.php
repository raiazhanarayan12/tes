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
    <link rel="stylesheet" href="css/index.css">
    <!-- My Css -->

    <!-- Css -->
    <link rel="stylesheet" href="css/admin.css">
    <!-- Css -->

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
                <a class="link-nav-active" href="admin.php">
                    <span>Home</span>
                </a>
                <a class="link-nav mx-5" href="admin-anggota.php">
                    <span>Data Member</span>
                </a>
                <a class="link-nav" href="admin-pembayaran.php">
                    <span>Data Payment</span>
                </a>
                <a class="link-nav mx-5 me-0" href="index.php">
                    <span>Logout</span>
                </a>
            </div>
        </div>
    </nav>
    <!-- Navbar -->

    <!-- Opening -->
    <div class="opening">
        <div class="d-flex justify-content-between align-items-center">
            <div class="opn-area-1">
                <img class="img-opn" src="assets/icon/actor.png" alt="">
            </div>
            <div class="opn-area-2">
                <p class="text-start font2">Hello
                    <?php echo "Admin" ?>
                </p>
                <p class="text-start fs-5">This website contains cash data from basketball extracurriculars, don't
                    forget to
                    deposit cash!</p>
                <a class="btn-opn font3" href="admin-anggota.php">Set Data MEMBER</a>
                <a class="btn-opn font3" href="admin-pembayaran.php">Set Data Payment</a>
            </div>
        </div>
    </div>
    <!-- Opening -->

    <!-- Info -->
    <div class="info">
        <div class="text-center">
            <p class="font2">INFORMATION</p>
            <p class="fs-5">The admin is responsible for everything done within the account, please use it wisely!</p>
        </div>
    </div>
    <!-- Info -->

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