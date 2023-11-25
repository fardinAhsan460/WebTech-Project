<?php
include("../control/admin/LoginControl.php");
?>
<!DOCTYPE html>
<html>
    <body background="../images/r15.jpg">
        
    <?php include 'header.php';?>
    <p align="left"><button><a href="homepage.php">Home Page</a></button></p>
    <center>
    <form method="POST" action="">
        <fieldset>
            <legend align="center"><h2 align="center" style="color:Red";> Login</h2></legend>
            <table align="center">
             <form text-align="center";>
             
                    <table align="cenetr">
                        <tr align="center">
                            <td align="left"> User Name:</td>
                            <td><input type="text" name="uname"></td>
                        </tr>
                        <tr>
                            <td align="left"> Password</td>
                            <td><input type="password" name="pass"></td>
                        </tr>
                        <tr><td>&nbsp;&nbsp;</td><td> <a href="adminReg.php">Not yet Registered?</a></td></tr>
                        <tr><td><input type="submit" name="submit"></td></tr>
                        </table>
                       
                        </fieldset>
</center>
                       
                       
                         
    </body>
    <?php include 'footer.php';?>
</html>