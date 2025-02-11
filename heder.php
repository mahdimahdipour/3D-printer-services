<?php session_start(); ?> 
<!DOCTYPE html> 
<html lang="fa"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>قالب ساده وبسایت</title> 
    <link rel="stylesheet" href="index.css"> 
    <link rel="stylesheet" href="reast.css"> 
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('your-image-path.jpg'); /* Path to your background image */
            background-size: cover; /* Ensure the background covers the entire page */
            background-position: center; /* Center the background image */
            background-repeat: no-repeat; /* Prevent background image repetition */
        }
        .navbar-nav .nav-item .nav-link {
            color: black; /* Adjust the text color */
            font-size: 16px; /* Adjust the font size */
        }
        .navbar-nav .nav-item .nav-link:hover {
            color: #0056b3; /* Add hover effect */
        }
        .font-size-16 {
            font-size: 16px; /* Ensure consistent font size */
        }
    </style>
</head> 
<body> 
    <header class="container">
        <p class="text-center font-weight-bold" style="font-size: 24px; color: white;">گروه صنعتی سپاهان ترانس قائم</p>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link font-size-16" href="registeryer.php" id="pp">ثبت نام</a>
                    </li>
                    <?php if(isset($_SESSION["login"])) { ?>
                        <li class="nav-item">
                            <a class="nav-link font-size-16" href="logout.php">خروج</a>
                        </li>
                    <?php } else { ?>
                        <li class="nav-item">
                        <a class="nav-link font-size-16" href="login.php" id="ppp">ورود</a>
                        </li>
                    <?php } ?>
                </ul>
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link font-size-16" href="index.php">صفحه ی اصلی</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-size-16" href="darbaray.php">درباره ی ما</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-size-16" href="ghadamat.php">خدمات</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-size-16" href="tamas.php">تماس با ما</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.amazonaws.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body> 
</html>
