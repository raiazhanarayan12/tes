<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <!-- Css Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- Css Bootstrap -->
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <?php
    include 'database.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];

        // Periksa apakah data login valid
        $sql = "SELECT * FROM data_akun WHERE username = '$username' AND password = '$password'";
        $result = $connection->query($sql);

        if ($result->num_rows == 1) {
            header("Location: admin.php");
        } else {
            echo "<p class='text-center mt-5 fw-bold'>Password anda salah!</p>";
        }
        $connection->close();
    }
    ?>
    <h2 class="text-center mt-5">Login</h2>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>


        <input type="submit" value="Login">
    </form>

    <!-- Java Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
    <!-- Java Bootstrap -->
</body>

</html>