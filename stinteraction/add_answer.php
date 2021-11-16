<?php
session_start();

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="stdatabase"; // Database name 
$tbl_name="fanswers"; // Table name 

// Connect to server and select databse.
$con=mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 
mysqli_select_db($con,"$db_name")or die("cannot select DB");

// Get value of id that sent from hidden field 
$id=$_POST['id'];

// Find highest answer number. 
$sql="SELECT MAX(a_id) AS Maxa_id FROM $tbl_name WHERE question_id='$id'";
$result=mysqli_query($con,$sql);
$rows=mysqli_fetch_array($result);

// add + 1 to highest answer number and keep it in variable name "$Max_id". if there no answer yet set it = 1 
if ($rows) {
$Max_id = $rows['Maxa_id']+1;
}
else {
$Max_id = 1;
}

// get values that sent from form 
$a_name=$_SESSION['name'];
$a_answer=$_POST['a_answer']; 
	
$datetime=date("d/m/y"); // create date and time

// Insert answer 
$sql2="INSERT INTO $tbl_name(question_id, a_id, a_name, a_answer, a_date)VALUES('$id', '$Max_id', '$a_name', '$a_answer', '$datetime')";
$result2=mysqli_query($con,$sql2);

if($result2){
echo "Successful<BR>";
header('Location:view_topic.php?id='.$id);
#echo "<a href='view_topic.php?id=".$id."'>View your answer</a>";

// If added new answer, add value +1 in reply column 
$tbl_name2="fquestions";
$sql3="UPDATE $tbl_name2 SET reply='$Max_id' WHERE id='$id'";
$result3=mysqli_query($con,$sql3);
}
else {
echo "ERROR";
}

// Close connection
mysqli_close($con);
?>