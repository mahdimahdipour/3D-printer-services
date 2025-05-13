<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include("heder.php");
?>

<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>اسلایدشو</title>
</head>

<section class="container my-4 daily-report">
    <div class="row justify-content-center">
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "myadmin";

        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM `items`";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $imageId = intval($row["id"]); 
                $imageLink = ($imageId >= 1 && $imageId <= 12) ? $imageId . ".php" : "default.php";

                echo '<div class="col-12 col-sm-6 col-md-4 d-flex justify-content-center align-items-center mb-3">';
                echo '<div class="image-container text-center">';
                echo '<a href="' . htmlspecialchars($imageLink, ENT_QUOTES, 'UTF-8') . '">';
                echo '<img src="photo/' . htmlspecialchars($row["image"], ENT_QUOTES, 'UTF-8') . '" alt="تصویر">';
                echo '</a>';
                echo '<p>' . htmlspecialchars($row["text"], ENT_QUOTES, 'UTF-8') . '</p>';
                
                if (isset($_SESSION["role"]) && $_SESSION["role"] == 'admin') {
                    echo '<button class="edit-button" onclick="toggleActionButtons(this)"><i class="fas fa-edit"></i></button>';
                    echo '<div class="action-buttons">';
                    echo '<form action="edit.php" method="post" enctype="multipart/form-data" class="mb-2">';
                    echo '<input type="hidden" name="id" value="' . $row["id"] . '">';
                    echo '<input type="text" name="description" placeholder="توضیح جدید" class="form-control mb-2" required>';
                    echo '<input type="file" name="image" class="form-control mb-2" required>';
                    echo '<button type="submit" class="btn btn-primary w-100 mb-2">ویرایش</button>';
                    echo '</form>';
                    echo '<form action="delete.php" method="post">';
                    echo '<input type="hidden" name="id" value="' . $row["id"] . '">';
                    echo '<button type="submit" class="btn btn-danger w-100 mb-2">حذف</button>';
                    echo '</form>';
                    echo '</div>';
                }
                echo '</div>';
                echo '</div>';
            }
        } else {
            echo "هیچ تصویری پیدا نشد.";
        }
        $conn->close();
        ?>
    </div>
    <?php if (isset($_SESSION["role"]) && $_SESSION["role"] == 'admin') { ?>
        <div class="text-center">
            <form action="add.php" method="post" enctype="multipart/form-data" class="row justify-content-center">
                <input type="hidden" name="page" value="page2"> <!-- افزودن فیلد صفحه -->
                <div class="col-md-4 col-12">
                    <input type="text" name="description" placeholder="توضیح" class="form-control mb-2" required>
                </div>
                <div class="col-md-4 col-12">
                    <input type="file" name="image" class="form-control mb-2" required>
                </div>
                <div class="col-md-4 col-12">
                    <button type="submit" class="btn btn-success w-100 mb-2">افزودن</button>
                </div>
            </form>
        </div>
        <?php } ?>
</section>

<style>
.image-container {
    width: 300px; /* حفظ عرض مستطیلی */
    height: auto;
    overflow: hidden;
    margin: 0 0px; /* فاصله‌ی افقی بسیار کم برای نزدیک‌تر شدن تصاویر */
    position: relative;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    background: #f9f9f9;
    border-radius: 12px;
    padding: 8px;
    border: 4px solid #ddd;
    box-shadow: 0 3px 6px rgba(0, 0, 0, 0.2);
}

.image-container img {
    width: 100%;
    height: 160px;
    object-fit: contain;
    border-radius: 8px;
}

.image-container p {
    margin: 4px 0;
    font-weight: bold;
    color: #333;
    font-size: 0.9rem;
    text-align: center;
}
</style>

<!-- لینک جاوااسکریپت بوت استرپ -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- لینک جاوااسکریپت آیکون‌های بوت استرپ -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>

<?php include("footer.php"); ?>

<!-- لینک جاوااسکریپت برای عملکرد دکمه مداد -->
<script>
    function toggleActionButtons(button) {
        var actionButtons = button.nextElementSibling;
        if (actionButtons.style.display === "none" || actionButtons.style.display === "") {
            actionButtons.style.display = "block";
        } else {
            actionButtons.style.display = "none";
        }
    }
</script>

</body>
</html>
