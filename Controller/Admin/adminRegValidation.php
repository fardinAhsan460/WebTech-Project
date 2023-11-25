<?php
$fnameErr=$lnameErr=$emailErr=$dobErr=$mb_numErr=$nidErr=$genderErr=$unameErr=$passErr=$rpass_Err="";
$flag=0;

if (isset($_REQUEST["register"]))
{
  $fname=($_REQUEST["fname"]);
$lname=($_REQUEST["lname"]);
$uname=($_REQUEST["uname"]);
$email=($_REQUEST["email"]);
$password=($_REQUEST["pass"]);
$uppercase = preg_match('@[A-Z]@', $password);
$lowercase = preg_match('@[a-z]@', $password);
$number    = preg_match('@[0-9]@', $password);
$specialChars = preg_match('@[^\w]@', $password);



  if (empty($_REQUEST["fname"]))
  {
    $fnameErr="First Name is required";
    
  }
    else if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {
      $fnameErr = "Only letters and white space allowed";
      
    }
    else{
      $fnameErr="Your first name is ".$_REQUEST["fname"];
    }
  if (empty($_REQUEST["lname"]))
  {
    $lnameErr="Last Name is required";
    
  }
    else if (!preg_match("/^[a-zA-Z ]*$/",$lname)) {
      $fnameErr = "Only letters and white space allowed";
      
    }
    else{
      $lnameErr="Your last name is ".$_REQUEST["lname"];
    }
  if (empty($_REQUEST["dob"]))
  {
    $dobErr="Date of Birth is required";
    
  }
  else{
    $dobErr="Date of Birth is ".$_REQUEST["dob"];
  }
  
  if (empty($_REQUEST["email"])) {
    $emailErr = "Email is required";
    
  } 
   else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
      
    }
    else {
      $emailErr="Your Email is ".$_REQUEST["email"];
    }
  if (empty($_REQUEST["gender"])) 
  {
    $genderErr="Please Select a Gender";
    
  }
  else{
    $genderErr="Your Gender is ".$_REQUEST["gender"];
  }
  if (empty($_REQUEST["phone"]))
  {
    $mb_numErr="Phone Number is required";
    
  }
  else if (strlen($_REQUEST["phone"]<11)) {
      $mb_numErr = "Invalid phone number";
      
    }
    else{
      $mb_numErr="Your Phone number is ".$_REQUEST["phone"];
    }
    if(empty($_REQUEST["nid"]))
    {
      $nidErr="Nid Number is Required";
      
    }
  else if(strlen($_REQUEST["nid"]<13))
  {
    $nidError="NID number should be 13 or more digits";
    
  }
  else
  {
    $nidError="Your mobile number is ".$_REQUEST["nid"];
  }

  if(empty($_REQUEST["uname"]))
  {
    $unameErr="Please Select a UserName";
    
  }
  else if (!preg_match("/^[a-zA-Z ]*$/",$uname))
  {
    $unameErr="Invalid User Name";
   
  }
  else{
    $unameErr="Your User Name is ".$_REQUEST["uname"];
  }

  if(empty($_REQUEST["pass"]))
  {
    $passErr="Please Enter a Password";
    
  }
  else if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8)
  {
    $passErr="Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character";
  }
  else{
    $passErr="Strong password";
  }
  if(($_REQUEST["pass"])==($_REQUEST["rpass"]))
  { 
    
    $rpass_err="";
  }
  else
  {
    $rpass_err="Password and Re-type password should be same";
    
    
  }
  if (isset($_REQUEST["register"]))/*{

$filename="data.json";
if(is_file($filename)){
  $data=file_get_contents($filename);

}
$json_arr=json_decode($data,true);
$json_arr[]=array('fname'=>$_REQUEST['fname'],'lname'=>$_REQUEST['lname'],'email'=>$_REQUEST['email'],'nid'=>$_REQUEST['nid'],'uname'=>$_REQUEST['uname'],'dob'=>$_REQUEST['dob'],'pass'=>$_REQUEST['pass']);
file_put_contents($filename,json_encode($json_arr));
  }*/

 {

    $existingData=file_get_contents("data.json");
    $existingDatainPHP=json_decode($existingData);

    $myarr=array
    ("First_Name"=>$_REQUEST["fname"],
     "Last_Name"=>$_REQUEST["lname"],
     "Date_of_Birth"=>$_REQUEST["dob"],
     "Email_ID"=>$_REQUEST["email"],
     "Mobile_Number"=>$_REQUEST["phone"],
     "NID_Number"=>$_REQUEST["nid"],
     "User_name"=>$_REQUEST["uname"],
     "Password"=>$_REQUEST["pass"],
     "Image"=>"../Upload/".$_REQUEST["fname"].".jpg"
     );

     $existingDatainPHP[]=$myarr;
    $myJsonObj=json_encode($existingDatainPHP,JSON_PRETTY_PRINT);
    file_put_contents("data.json",$myJsonObj);

    $mydata=file_get_contents("data.json");
    $myPHPdata=json_decode($mydata);

  }

}
  
?>