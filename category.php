<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myadmin";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$category_id = isset($_GET['category_id']) ? intval($_GET['category_id']) : 0;
$sql = "SELECT * FROM products WHERE category_id = $category_id";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <title>محصولات دسته‌بندی</title>
</head>
<body>
    <h1>محصولات دسته‌بندی</h1>
    <div class="product-container">
        <?php
        while ($row = $result->fetch_assoc()) {
            echo '<div class="product-item">';
            echo '<img src="photo/' . $row["image"] . '" alt="' . $row["name"] . '">';
            echo '<h2>' . $row["name"] . '</h2>';
            echo '<p>' . $row["description"] . '</p>';
            echo '<p>قیمت: ' . $row["price"] . ' تومان</p>';
            echo '</div>';
        }
        ?>
    </div>
</body>
</html>

<?php $conn->close(); ?>
