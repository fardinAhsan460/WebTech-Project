<?php
session_start();
?>
<html>
    <?php include"../../model/header.php"?>
    <center><h1>Admin Profile</h1></center>
    <?php
    echo "WELCOME SYSTEM ADMIN   ".$_SESSION["User_name"];
    ?>
    <br>
    <br>
    <center><button><a href="../../model/bikes.php">View Bikes</a></button></center>
    <center><button><a href="Logout.php">Log Out</a></button></center>
    <?php include"../../model/footer.php"?>
</html>