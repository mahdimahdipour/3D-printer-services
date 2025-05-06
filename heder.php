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
        /* تنظیمات دسته‌بندی و پنل */
        .dropdown-menu {
            display: none;
            position: absolute;
            left: 0;
            top: 100%;
            min-width: 250px;
            background-color: #fff;
            border: 2px solid #ddd;
            padding: 10px;
            border-radius: 8px;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.2);
        }

        .dropdown-menu a {
            color: black;
            padding: 8px 15px;
            display: block;
            text-decoration: none;
            font-weight: bold;
        }

        .dropdown-menu a:hover {
            background-color: #ddd;
        }

        .logo-container {
            position: absolute;
            top: 5px;
            right: 15px;
        }

        .logo-container img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            border: 2px solid #fff;
            transition: transform 0.3s ease-in-out;
        }

        .logo-container img:hover {
            transform: scale(2);
        }
    </style>

    <script>
        function toggleDropdown() {
            var dropdownMenu = document.getElementById("categoryDropdownMenu");
            dropdownMenu.style.display = (dropdownMenu.style.display === "none" || dropdownMenu.style.display === "") ? "block" : "none";
        }
    </script>
</head> 
<body> 
    <header class="container position-relative">
        <p class="text-center font-weight-bold" style="font-size: 25px; color: white; font-family: BBadr;">گروه صنعتی سپاهان ترانس قائم</p>

        <!-- لوگوی سایت در سمت راست -->
        <div class="logo-container">
            <a href="logo.php">
            <img src="photo/1000.png" alt="لوگوی سایت"href="logo.php">
            </a>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-menu"><a class="nav-style font-size-16" href="index.php">صفحه‌ی اصلی</a></li>
                    <li class="nav-menu"><a class="nav-style font-size-16" href="#about">درباره‌ی ما</a></li>
                    <li class="nav-menu"><a class="nav-style font-size-16" href="ghadamat.php">خدمات</a></li>
                    <li class="nav-menu"><a class="nav-style font-size-16" href="tamas.php">تماس با ما</a></li>

                    <li class="nav-menu dropdown">
                        <button class="nav-style font-size-16 dropdown-toggle" onclick="toggleDropdown()">دسته‌بندی محصولات</button>
                        <div class="dropdown-menu" id="categoryDropdownMenu">
                            <?php
                            $servername = "localhost";
                            $username = "root";
                            $password = "";
                            $dbname = "myadmin";

                            $conn = new mysqli($servername, $username, $password, $dbname);
                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            $sql = "SELECT id, text FROM items";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    $categoryLink = $row["id"] . ".php"; 
                                    echo '<a href="' . htmlspecialchars($categoryLink, ENT_QUOTES, 'UTF-8') . '">' . htmlspecialchars($row["text"], ENT_QUOTES, 'UTF-8') . '</a>';
                                }
                            }

                            $conn->close();
                            ?>
                        </div>
                    </li>
                </ul>

                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-menu"><a class="nav-style font-size-16" href="register.php">ثبت نام</a></li>
                    <?php if(isset($_SESSION["login"])) { ?>
                        <li class="nav-menu"><a class="nav-style font-size-16" href="logout.php">خروج</a></li>
                    <?php } else { ?>
                        <li class="nav-menu"><a class="nav-style font-size-16" href="login.php">ورود</a></li>
                    <?php } ?>
                </ul>
            </div>
        </nav>
    </header>
</body> 
</html>
