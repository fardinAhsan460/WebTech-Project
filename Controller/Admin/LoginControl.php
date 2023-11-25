<?php
session_start();
if(isset($_REQUEST["submit"]))
{

    $myjsondata=file_get_contents("Data.json");
    $myphpdata=json_decode($myjsondata);

    foreach($myphpdata as $myobj)
    {
        if($_REQUEST["uname"]==$myobj->User_name && $_REQUEST["pass"]==$myobj->Password)
        {
            $_SESSION["User_name"]=$_REQUEST["uname"];
            header("Location:../control/admin/Profile.php");
        }

        else
        {
            echo "User not exixts";
        }

    }
}
?>
