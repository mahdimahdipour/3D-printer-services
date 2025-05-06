<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myadmin";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_POST['id'];
$description = $_POST['description'];
$image = $_FILES['image']['name'];
$target_dir = "photo/";
$target_file = $target_dir . basename($image);

if (!isset($id) || empty($description) || empty($image)) {
    die("همه مقادیر باید وارد شوند");
}

echo "ID: $id<br>";
echo "Description: $description<br>";
echo "Image: $image<br>";

if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
    $sql = "UPDATE items SET image='$image', text='$description' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "ویرایش با موفقیت انجام شد";
    } else {
        echo "خطا: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "خطا در آپلود فایل";
}

$conn->close();
?>
