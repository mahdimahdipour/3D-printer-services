<?php
session_start();
$username = $_POST["username"];
$password = $_POST["password"];

$link = new mysqli("localhost", "root", "", "myadmin");
$result = mysqli_query($link, "SELECT * FROM `user` WHERE `username` = '$username' AND `password` = '$password'");
mysqli_close($link);
$row = mysqli_fetch_assoc($result);
if ($row) {
    $_SESSION["login"] = true;
    $_SESSION["role"] = $row["role"];
    ?>
    <script>
        location.replace("index.php");
    </script>
    <?php
} else {
    echo "<p>نام کاربری یا رمز عبور صحیح نیست</p>";
}
?>
