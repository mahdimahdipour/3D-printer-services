<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myadmin";

// ایجاد اتصال
$conn = new mysqli($servername, $username, $password, $dbname);

// بررسی اتصال
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_POST['id'];

// بررسی مقدار دریافت شده
if (!isset($id)) {
    die("ID برای حذف ارسال نشده است");
}

$sql = "SELECT image FROM items WHERE id=$id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $image = $row['image'];

    echo "Filename: $image<br>";

    // بررسی وجود فایل قبل از حذف
    if (is_file("photo/$image") && file_exists("photo/$image")) {
        if (unlink("photo/$image")) {
            $sql = "DELETE FROM items WHERE id=$id";

            if ($conn->query($sql) === TRUE) {
                echo "حذف با موفقیت انجام شد";
            } else {
                echo "خطا: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "خطا در حذف فایل";
        }
    } else {
        echo "فایل مورد نظر وجود ندارد";
    }
} else {
    echo "هیچ رکوردی با این ID یافت نشد";
}

$conn->close();
?>
