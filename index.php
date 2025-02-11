<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>صفحه</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .nav-link {
            display: inline-block;
            margin: 5px; /* Space between images */
            overflow: hidden; /* Prevent image overflow */
        }
        #tr {
            width: 100%;
            height: 300px; 
            object-fit: cover; 
            transition: transform 0.3s ease-in-out; 
        }
        #tr:hover {
            transform: scale(1.05); 
        }
        .nav-item {
            flex: 0 0 100%;  
            max-width: 100%;
        }
        /* Responsive adjustments */
        @media (min-width: 576px) { 
            .nav-item {
                flex: 0 0 50%;
                max-width: 50%;
            }
        }
        @media (min-width: 992px) { /* For laptops and larger */
            .nav-item {
                flex: 0 0 33.33%;
                max-width: 33.33%;
            }
        }
    </style>
</head>
<body>

<?php include("heder.php"); ?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item">
        <a class="nav-link" href="#"><img src="photo/9.jpg" id="tr"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><img src="photo/15.png" id="tr"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><img src="photo/10.jpg" id="tr"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><img src="photo/31.jpg" id="tr"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><img src="photo/21.jpg" id="tr"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><img src="photo/11.jpg" id="tr"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><img src="photo/23.jpg" id="tr"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><img src="photo/30.jpg" id="tr"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><img src="photo/28.jpg" id="tr"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><img src="photo/34.png" id="tr"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><img src="photo/32.jpg" id="tr"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><img src="photo/35.jpg" id="tr"></a>
      </li>
    </ul>
  </div>
</nav>

<?php include("footer.php"); ?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
