<!DOCTYPE html>
<html lang="en">
<head>
     <title> Login  Form </title>
</head>
<body background="../images/vendor.jpg">
<?php include 'header.php';?>
<p align="left"><button><a href="homepage.php">Home Page</a></button></p>
    <center> 
        <h3> Login  Here </h3>
        <form action ="login.php" method="post">
            <table>
                <tr>
                    <td> Username:</td>
                <td> 
                    <input type="text" name="user">
                </td>
                </tr>
                <tr>
                    <td> Password:</td>
                <td> 
                    <input type="password" name="user_pass">
                </td>
                </tr>
                <tr> 
                    <td> 
                        <input type="submit" name="submit"
                        value="Login">
                    </td>
                    <td>
                    Not yet a Member?<a href="vendorReg.php">Register</a>
                    </td>

                </tr>
            </table>

        </form>
    </center>
    <?php include 'footer.php';?>
    
</body>
</html>