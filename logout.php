<?php
session_start();
unset($_SESSION["login"]);
header("Location: index.php"); 
exit();
?>

<script>
    location.replace("index.php");
</script>
<?php
include("pagefooter.html");
?>
