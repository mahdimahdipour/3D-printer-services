<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myadmin";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$description = $_POST['description'];
$image = $_FILES['image']['name'];
$target_dir = "photo/";
$target_file = $target_dir . basename($image);

if (empty($description) || empty($image)) {
    die("همه مقادیر باید وارد شوند");
}

echo "Description: $description<br>";
echo "Image: $image<br>";

if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
    $sql = "INSERT INTO items (image, text) VALUES ('$image', '$description')";

    if ($conn->query($sql) === TRUE) {
        echo "افزودن با موفقیت انجام شد";
    } else {
        echo "خطا: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "خطا در آپلود فایل";
}

$conn->close();
?>
