<?php

$name = $_POST['name'];
$id = $_POST['nameid'];
$password = $_POST['password'];
$dept = $_POST['deptname'];
$gen = $_POST['gender'];
$rm = $_POST['regmember'];

$con = mysqli_connect("localhost:3306", "root", "");

if(!$con)
{
	die('ERROR :=' .mysqli_error($con));
}
$seldb=mysqli_select_db($con, "stdatabase");
if(!$seldb)
{
	die('ERROR :=' .mysqli_error($seldb));
}
$query = "insert into register_table (name, nameid, password, deptname,gender,regmember)values('$name','$id','$password','$dept','$gen','$rm')";
if(!mysqli_query( $con, $query))
{
	die('ERROR := .mysqli_error()');
}
if(mysqli_affected_rows($con) == 1)
{
	#echo "you are successfully registered";
	#echo " click here to login <a href="login.html"> continuee.. </a> for login";
	header('Location:login.html');
}
?>

