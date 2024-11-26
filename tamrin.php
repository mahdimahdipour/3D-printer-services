<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
<form action="tamrin.php" method="get">
        <input type="text" name="n1">
        <input type="text" name="n2">
        <input type="submit"/>
</from>
<?php
if(isset($_GET["n1"])){
        
        $a=$_GET["n1"];
        $b=$_GET["n2"];
        $c=$a;
        $b=$a;
        $b=$c;
        
        echo("<br>".$a.$b);

}
?>
</body>
</html>