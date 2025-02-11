<?php
session_start();
?>
<?php
include("bala.html");
$name=$_POST["name"];
$username=$_POST["username"];
$password=$_POST["password"];
include("bala.html");
$link = mysqli_connect("loacalhost","root","","myshopdb");
$result = mysqli_query($link,"INSERT INTO `user` (`name`, `username`, `password`) VALUES ('masih', 'mahdipour', '1234');");
mysqli_close($link);

if ($result==true){
?>
 <p>ثبت نام انجام شد</p>
<?php
}else{
?>
<p>ثبت نام انجام نشد</p>
<?php

}
?>
<?php
include("paeen.html")
?>