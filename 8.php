

<?php
include("heder.php");
?>

<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>جزئیات جوش</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        body {
            background-color: #f4f4f4;
            text-align: center;
        }

        .image-gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            padding: 20px;
        }

        .gallery-item {
            position: relative;
            width: 250px;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease-in-out;
            background: #fff;
            padding: 10px;
        }

        .gallery-item img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.3s ease-in-out;
        }

        .gallery-item:hover img {
            transform: scale(1.1);
        }

        .info {
            margin-top: 10px;
            font-size: 16px;
            color: #333;
        }

        .price {
            font-weight: bold;
            color: #ff6600;
        }
    </style>
</head>
<body>

<h2>تصاویر مرتبط باسنگ و فرز </h2>

<div class="image-gallery">
    <?php
    
    $items = [
        ["image" => "ngfgvv.jpg", "price" => "1,200,000 تومان", "description" => "دستگاه جوشکاری با قابلیت تنظیم شدت جریان"],
        ["image" => "E43B8A00-0CFB-4180-88FA-E9897E407CCB.jpeg", "price" => "950,000 تومان", "description" => "الکترود مخصوص جوشکاری فولاد"],
        ["image" => "s.jpeg","price" => "2,500,000 تومان", "description" => "دستگاه جوش اتوماتیک با نمایشگر دیجیتال"],
        ["image" => "50.jpg","price" => "1,600,000 تومان", "description" => "تورچ جوشکاری با قدرت بالا"]
    ];

    foreach ($items as $item) {
        echo '<div class="gallery-item">';
        echo '<img src="photo/' . htmlspecialchars($item["image"]) . '" alt="تصویر جوشکاری">';
        echo '<div class="info">';
        echo '<p>' . htmlspecialchars($item["description"]) . '</p>';
        echo '<p class="price">' . htmlspecialchars($item["price"]) . '</p>';
        echo '</div>';
        echo '</div>';
        
    }
    ?>
</div>

<?php
include("footer.php");
?>
</body>
</html>


