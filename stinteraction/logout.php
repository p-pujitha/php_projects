<?php

session_start();
$name = $_SESSION['name'];

$con = mysqli_connect("localhost:3306","root","");
if(!$con)
{
    die('ERROR:='.mysqli_error($con));
}

$seldb= mysqli_select_db($con,"stdatabase");
if(!$seldb)
{
  die('ERROR:=' .mysqli_error($seldb));
}

    $query = mysqli_query($con,"delete from login_userslist where name='$name'");
    if($query)
    {
     # echo "Password has been changed successfully";
      header('Location:login.html');
    }
    
?>