<?php
session_start();
?>
<?php
include("bala.html");
?>
<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>صفحه ثبت نام</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container d-flex flex-column align-items-center justify-content-center vh-100"> <!-- Flexbox container -->
        <form action="registyer_action.php" method="post" class="w-100" style="max-width: 400px;"> <!-- Center the form -->
            <div class="form-group text-right"> <!-- Right-align text -->
                <input type="text" name="name" placeholder="نام" class="form-control text-right">
            </div>
            <div class="form-group text-right"> <!-- Right-align text -->
                <input type="text" name="username" placeholder="نام خانوادگی" class="form-control text-right">
            </div>
            <div class="form-group text-right"> <!-- Right-align text -->
                <input type="password" name="password" placeholder="کلمه عبور" class="form-control text-right">
            </div>
            <div class="form-group">
                <input type="submit" value="ثبت نام" class="btn btn-primary w-100">
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcd.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
<?php
include("paeen.html");
?>
