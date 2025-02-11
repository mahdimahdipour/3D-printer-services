<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body dir="">
    <nav>
        <ul>
            
            <li><a href="login.php">ورود</a></li>
            <li><a href="registeryer.php">ثبت نام </a></li>
            <?php if(isset($_SESSION["login"]))?>
            
            <?php}else{?>
                <li><a href="login.php">وارد شدن</a></li>
                <?php}?>


        </ul>
    </nav>
    
</body>
</html>