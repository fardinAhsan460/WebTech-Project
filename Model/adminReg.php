<?php
include ("../control/admin/adminRegValidation.php");
?>
<!DOCTYPE html>
<html>
    <title>Registration</title>
    <body background="../images/vendor.jpg">
    
    
    <h1 align="center" style="background-color:orange;"> Short-time Bike Rental System</h1>
    <p align="left"><button style="background-color:white;"><a href="homepage.php">Home Page</a></button></p>
    <p align="left"><button style="background-color:white;"><a href="adminlogin.php">Log In Page</a></button></p>
    
    <fieldset>
    <center>
            <form method="POST" action="">
                
                    <legend align="center"><h2 align="center" style="color:Red";> Registration Form</h2></legend>
                    <center>
                    <table align="center">
                     <form text-align="center";>
                     
                            <table align="cenetr">
                                <tr align="center">
                                    <td align="left"> First Name:</td>
                                    <td align="left"><input type="text" name="fname"></td>
                                    <td style="color:Yellow;"><?php echo $fnameErr;?></td>
                                </tr>
                                <tr>
                                    <td align="left"> Last Name:</td>
                                    <td><input type="text" name="lname"></td>
                                    <td style="color:Yellow;"><?php echo $lnameErr;?></td>
                                </tr>
                                <tr>
                                    <td align="left"> Date of Birth:</td>
                                    <td><input type="date" name="dob"></td>
                                    <td style="color:Yellow;"><?php echo $dobErr;?></td>
                                </tr>
                                <tr>
                                    <td align="left"> Email:</td>
                                    <td><input type="text" name="email"></td>
                                    <td style="color:Yellow;"><?php echo $emailErr;?></td>
                                </tr>
                                <tr>
                                    <td align="left">Phone:</td>
                                    <td><input type="text" name="phone"></td>
                                    <td style="color:Yellow;"><?php echo $mb_numErr;?></td>
                                </tr>
                                <tr>
                                    <td align="left">NID Number:</td>
                                    <td><input type="text" name="nid"></td>
                                    <td style="color:Yellow;"><?php echo $nidErr;?></td>
                                </tr>
                                <tr>
                                    <td align="left"> Gender:</td>
                                    <td align="left"><input type="radio" id="male" name="gender" value="Male">Male</td><br>
                                    <tr>
                                        <td>&nbsp</td>
                                    <td align="left"><input type="radio" id="female" name="gender" value="Female">Female</td>
                                    </tr>
                                    <tr>
                                    <td>&nbsp</td>
                                    <td align="left"><input type="radio" id="other" name="gender" value="Other">Other</td>
                                    <td style="color:Yellow;"><?php echo $genderErr;?></td><br>
                                    </tr>
                                    
                                <tr>
    <td>Upload Image</td>
<td><input type="file" name="myfile"></td>
</tr>

                                    
                                    

                                </tr>
                                <tr>
                                    <td align="left"> Create UserName:</td>
                                    <td><input type="text" name="uname"></td>
                                    <td style="color:Yellow;"><?php echo $unameErr;?></td><br>
                                </tr>
                                <tr>
                                    <td align="left">Create Password:</td>
                                    <td><input type="password" name="pass"></td>
                                    <td style="color:Yellow;"><?php echo $passErr;?></td>
                                    
                                </tr>
                                <tr>
                                    <td align="left">Retype Password:</td>
                                    <td><input type="password" name="rpass"></td>
                                    <td style="color:Yellow;"><?php echo $rpass_Err;?></td>
                                </tr>
                                
                            </table><br>
                            <br>
                            <br>
                            <h4 align="center"><input type="submit" name="register"></h3>
                        </form>
                    </table>
                    </center>
                    </form>

                </fieldset>
            

          


    </body>
    <?php include 'footer.php';?>
</html>