<?php
include("heder.php");
?>
<style>
    p{
    font-family: b Badr;
    font-size: larger;
    text-align: center;
    font-weight: bold; 
    }
    .image-container {
    width: 300px;
    height: auto;
    overflow: hidden;
    margin: 0 0px; 
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

<p>گروه صنعتی سپاهان ترانس قائم با بیش از 20 سال سابقه ی کار در خدمت مشتریان گرامی هست. سابقه ی همکاری با شرکت های:<p>
<div class="image-gallery">
    <?php

    $items = [
      
        ["image" => "zobahan-esfahan-main.webp", "price" => "", "description" => ""],
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

<?php
include("footer.php");
?>
