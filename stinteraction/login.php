<?php

session_start();
$id=$_REQUEST['nameid'];
$pd=$_REQUEST['password'];
$lm=$_POST['loginmember'];

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

if($lm=="admin")
{
	echo "You are in admin function";
	header('Location:admin.html ');
}
else if($lm == "student")
{
		echo "You are in student if ";
		$result =mysqli_query($con,"select * from register_table where nameid='$id'");
		$student_row=mysqli_fetch_array($result,MYSQLI_NUM); 
		$stuname = $student_row[0];
		$stdid= $student_row[1];
		$stdpassword = $student_row[2];
		echo $stuname;
		echo $stdid;


		if($stdid == $id && $stdpassword == $pd)
		{
			$_SESSION['session_student_name'] =$stuname;
			echo "Condition is true";
			header('Location:student.php');
			exit();
		}
}

else if( $lm == "faculty")
{

		echo "You are in faculty function";
		$result = mysqli_query( $con, "select * from register_table where nameid='$id'");
		$faculty_row = mysqli_fetch_array($result, MYSQLI_NUM);
		$facultyname = $faculty_row[0];
		$factid = $faculty_row[1];
		$factpassword = $faculty_row[2];
		echo $facultyname;
		echo $factid;


		if($factid == $id && $factpassword == $pd)
		{
				$_SESSION['session_faculty_name'] = $facultyname;
				header('Location:faculty.php');
		}
}

?>