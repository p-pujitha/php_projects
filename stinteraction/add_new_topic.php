<?php
session_start();
$name=$_SESSION['name'];
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="stdatabase"; // Database name 
$tbl_name="fquestions"; // Table name 

// Connect to server and select database.
//mysql_connect($host, $username, $password)or die("cannot connect"); 
//mysql_select_db("$db_name")or die("cannot select DB");

$con=new mysqli($host,$username,$password,$db_name);
// get data that sent from form 
$topic=$_POST['topic'];
$detail=$_POST['detail'];
$datetime=date("d/m/y"); //create date time

$result =mysqli_query($con,"select * from register_table where name='$name'");
$student_row=mysqli_fetch_array($result,MYSQLI_NUM); 
$nameid=$student_row[1];
$deptname=$student_row[3];
echo $name;
echo $nameid;
echo $deptname;
echo $topic;
echo $detail;
echo $datetime;


#$sql="INSERT INTO $tbl_name(name, nameid, deptname, topic, detail, date)VALUES('$name', '$nameid', '$deptname', $topic', '$detail', '$datetime')";

#$result = $con->query($sql);
$query = "insert into fquestions(name, nameid, deptname, topic, detail, date) values ('$name', '$nameid', '$deptname', '$topic', '$detail', '$datetime' )";
if(!mysqli_query($con,$query))
{
	die('ERROR :=' .mysqli_error($con));
}
if($query){
echo "Successful<BR>";
header('Location:forum.php');
#echo "<a href=forum.php>View your topic</a>";
}
else {
echo "ERROR";
}
mysqli_close($con);
?>