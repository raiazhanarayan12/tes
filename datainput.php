<!DOCTYPE html>
<html>

<head>
    <title>Menampilkan Data dari Database</title>
    <!-- Css Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- Css Bootstrap -->

    <!-- My Css -->
    <link rel="stylesheet" href="css/index.css">
    <!-- My Css -->

    <!-- My Css -->
    <link rel="stylesheet" href="css/inputdata.css">
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
                <a class="link-nav-active mx-5" href="input.php">
                    <span>Data input</span>
                </a>
                <a class="nav-item dropdown link-nav">
                    <a class="link-nav dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        View Data
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="admin-anggota.php">Data Anggota</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Data Pembayaran</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Data Keuangan</a></li>
                    </ul>
                </a>
                <a class="link-nav mx-5 me-0" href="contact.php">
                    <span>Contact</span>
                </a>
            </div>
        </div>
    </nav>

    <!-- Table -->
    <div class="tabelku">
        <p class="text-center font2 mb-5">NANTI DIATUR LAGI SAYANG</p>
    </div>

    <!-- Footer -->
    <footer class="my-foot">
        <div class="d-flex justify-content-between">
            <!-- Section 1 -->
            <div class="list-foot">
                <p class="font3">Navigate</p>
                <div class="lmn-foot">
                    <p><a class="link-foot" href="index.html">Home</a></p>
                    <p><a class="link-foot-dis" href="input.html">Data input</a></p>
                    <p><a class="link-foot" href="view.html">View data</a></p>
                    <p><a class="link-foot" href="contact.php">Contact</a></p>
                </div>
            </div>
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