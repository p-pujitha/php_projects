<?php

session_start();
$id=$_REQUEST['newpassword'];
$name = $_SESSION['session_faculty_name'];

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

    $query = mysqli_query($con,"update register_table set password='$id' where name='$name'");
    if($query)
    {
      echo "Password has been changed successfully";
      header('Location:facultyprofile.php');
    }
    
?>