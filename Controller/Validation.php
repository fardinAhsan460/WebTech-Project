<!DOCTYPE html >
<html>
    <head>
    <style>
        .error { color: #FF0000;}
        </style>
    </head>
    <body> 

    <?php
     $fnameErr= $lnameErr= $dobErr=  $adressErr= $nidErr =  $emailErr = $phoneErr = $usernameErr  = $passwordErr=   "";
     $fname= $lname= $dob= $adress= $nid= $email = $phone = $username=  $password=  "";
    

     if (empty($_POST["fname"])) {
        $fnameErr = "fname is required";
           } 
           else { 
            $fname = test_input($_POST["fname"]);
      if (!preg_match("/^[a-z ]*$/",$fname)) {
            $fnameErr = "Only  letters and white space are allowed";
        }
        }
        if (empty($_POST["lname"])) {
            $lnameErr = "lname is required";
               } 
               else { 
                $lname = test_input($_POST["lname"]);
          if (!preg_match("/^[a-z ]*$/",$lname)) {
                $lnameErr = "Only  letters and white space are allowed";
            }
            }
            if (empty($_POST["dob"])) {
                $dobErr = "dob is required";
                   } 
                   else { 
                    $dob = test_input($_POST["dob"]);
              if (!preg_match("/^[a-z ]*$/",$dob)) {
                    $dobErr = "";
                }
                }

                if (empty($_POST["adress"])) {
                    $adressErr = "adress is required";
                       } 
                       else { 
                        $adress = test_input($_POST["adress"]);
                  if (!preg_match(" /^[a-zA-Z,0-9 ]*$/",$adress)) {
                        $adressErr = "letter and values are allowed";
                    }
                    }
                    if (empty($_POST["nid"])) {
                        $nidErr = "nid is required";
                           } 
                           else { 
                            $nid = test_input($_POST["nid"]);
                      if (!preg_match("/^[1-91-1 ]*$/",$nid)) {
                            $nidErr = "Only digits are allowed";
                        }
                        }

                    if (empty($_POST["email"])) {
                        $emailErr = "Email is required";
                       } 
                     else {
                        $email = test_input($_POST["email"]);
    
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                       $emailErr = "Invalid email format";
                       }
                        }

                        if (empty($_POST["phone"])) {
                            $phoneErr = "phone is required";
                               } 
                               else { 
                                $phone= test_input($_POST["phone"]);
                          if (!preg_match("/^[1-91-9]*$/",$phone)) {
                                $phoneErr = "Only digits are allowed";
                            }
                            }

                            if (empty($_POST["username"])) {
                                    $usernameErr = "username is required";
                                       } 
                                       else { 
                                        $username = test_input($_POST["username"]);
                                  if (!preg_match('/^[a-zA-Z0-9]{5,}$/', $username)) {
                                    $usernameErr = "Invalid username. Username must be at least 6 characters";
                                    }
                                    }

                         
                
                            if (empty($_POST["password"])) {
                                  $passwordErr = "password is required";
                                 } 
                                 else { 
                               $password = test_input($_POST["password"]);
                                 if (!preg_match("/^[a-zA-Z,0-9 ]*$/",$password)) {
                                     $passwordErr = "letter and values are allowed";
                                 }
                                 }
                                  

           
         function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         } 
         ?>

         <h2>  SIGN UP </h2>
         <p> <span class = "error"> * required field </span></p>
         <form method="post" action=" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
         First name:<input type="text" name="fname">   
         <span class="error">* <?php echo $fnameErr;?> </span> 
         <br> <br>
         Last name:<input type="text" name="lname">   
         <span class="error">* <?php echo $lnameErr;?> </span> 
         <br> <br>
         Date of Birth: <input type="date" name="dob">  
         <span class="error">* <?php echo $dobErr;?> </span> 
         <br> <br>
         Adress:<input type="text" name="adress">   
         <span class="error">* <?php echo $adressErr;?> </span> 
         <br> <br>
         Nid:  <input type="value" name="nid">
         <span class="error">* <?php echo $nidErr;?> </span>
         <br> <br>
         E-mail: <input type="text" name="email">
         <span class="error">* <?php echo $emailErr;?> </span>
         <br> <br>
          
         Phone: <input type="phone" name="phone">
         <span class="error">* <?php echo $phoneErr;?> </span>
         <br> <br>

         Username: <input type="value" name="username">
         <span class="error">* <?php echo $usernameErr;?> </span>
         <br> <br>

         Password: <input type="password" name="password">
         <span class="error">* <?php echo $passwordErr;?> </span>
         <br> <br>

         <input type="submit" name="submit" value="Submit">
        </form>


        <?php
        echo "<h2>Your Input :</h2>";
        echo  $fname;
        echo "<br>";
        echo  $lname;
        echo "<br>";
        echo  $dob;
        echo "<br>";
        echo  $adress;
        echo "<br>";
        echo  $nid;
        echo "<br>";
        echo  $email;
        echo "<br>";
        echo $phone;
        echo "<br>";
        echo $username;
        echo "<br>";
        echo $password;
    
        ?>
        </body>
        </html>



