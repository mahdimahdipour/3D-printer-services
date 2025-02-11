<?php
session_start();
include("bala.html");

$username = $_POST["username"] ?? '';
$password = $_POST["password"] ?? '';

$link = mysqli_connect("localhost", "root", "", "myshopdb");

if ($link === false) {
    die("خطا در اتصال به پایگاه داده: " . mysqli_connect_error());
}

$username = mysqli_real_escape_string($link, $username);
$password = mysqli_real_escape_string($link, $password);

$sql = "SELECT * FROM `user` WHERE `username`='$username' AND `password`='$password'";
$result = mysqli_query($link, $sql);

if ($result) {
    $row = mysqli_fetch_array($result);
    if ($row) {
        $_SESSION["login"] = true;
        echo '<script>location.replace("index.php");</script>';
    } else {
        echo '<p>نام کاربری یا رمز عبور صحیح نیست</p>';
    }
    mysqli_free_result($result);
} else {
    echo "خطا در اجرای پرس‌وجو: " . mysqli_error($link);
}

mysqli_close($link);
include("paeen.html");
?>
