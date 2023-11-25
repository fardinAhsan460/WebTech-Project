<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
</head>
<body background="../images/vendor2.jpg">
<?php include 'header.php';?>
<p align="left"><button><a href="homepage.php">Home Page</a></button></p>
<p align="left"><button><a href="vendorLogin.php">back</a></button></p>
  <center>
  <h3>Register Here</h3>
  <form  method="post" action="../Control/Validation.php" >
      <table>
        <tr>
          <td>First name: </td>
          <td><input type="text" name="fname"  placeholder="Enter First name"></td>
        
        </tr>
        <tr>
          <td>Last name: </td>
          <td> <input type="text" name="lname"  placeholder="Enter Last name"> </td>
          </tr>
        <tr>
          <td> <label for="dob"> Date of Birth :</label> </td>
          <td><input type="date" name="dob"></td>
        </tr>
        <tr> 
          <td> Address:</td>
          <td> 
            <textarea row="4" col="15" name="adress" placeholder="Address"></textarea>
        </tr>
        <tr>
          
                    <td>Nid:</td>
          
                   <td> <input type="value" name="nid" placeholder="Enter your Nid"></td>
         
        </tr>
        <tr>
          <td>Email:</td>
          <td><input type="text" name="email" placeholder="Enter Email Here"></td>
        </tr>
        
        <tr>
          <td>Phone:</td>
          <td>
            <select name="country_code">
              <option value="+88">+88 </option>
              <option value="+86">+86</option>
              <option value="+33">+33</option>
              <option value="+91">+91</option>
              <option value="+81">+81</option>
            </select>
            <input type="text" name="phone" placeholder="01******">
          </td>
        </tr>
        <tr>
          <td>Username: </td>
          <td><input type="text" name="username"  placeholder="Enter Username"></td>
          
        </tr>
        <tr>
            <td>Password:</td>
            <td><input type="password" name="password" placeholder="Enter Password Here"></td>
        </tr>
        <tr>
            
            <td><input type="checkbox" name="checkbox"></td>
            <td> <label for="checkbox">I agree to these <a href="#">Terms and conditions</a>.</label></td>
        </tr>

        <tr>
           <td><input type="submit" name="submit" value="submit"></td>
           <td><p>Already a user? <a href="vendorLogin.php">Login Here</a></p></td>
        </tr>
      </table>
  </form>
  
  </center>
  <?php include 'footer.php';?>
</body>
</html>