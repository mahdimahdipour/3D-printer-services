<?php
$name = $_POST["name"];
$username = $_POST["username"];
$password = $_POST["password"];


$link = new mysqli("localhost", "root", "", "myadmin");


if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}


$sql_check = "SELECT * FROM `user` WHERE `username` = '$username'";
$result_check = mysqli_query($link, $sql_check);

if (mysqli_num_rows($result_check) > 0) {
    echo "<p>ثبت نام قبلا انجام شده است</p>";
} else {

    $result_count = mysqli_query($link, "SELECT COUNT(*) as count FROM `user`");
    $row_count = mysqli_fetch_assoc($result_count);
    $is_admin = ($row_count['count'] == 0) ? 'admin' : 'user';

    $sql_insert = "INSERT INTO `user` (`username`, `password`, `name`, `role`) VALUES ('$username', '$password', '$name', '$is_admin')";
    
    if (mysqli_query($link, $sql_insert)) {
        echo "<p>ثبت نام انجام شد</p>";
    } else {
        echo "<p>ثبت نام انجام نشد: " . mysqli_error($link) . "</p>";
    }
}

mysqli_close($link);
?>
