<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="boostrapcss/bootstrap.min.css">
  <script src="boostrapcss/jquery.min.js"></script>
  <script src="boostrapcss/bootstrap.min.js"></script>
  <link rel="stylesheet" href="boostrapcss/main.css" >

  <script src="boostrapcss/main.js"></script>  
  <script>
	  
		window.history.forward();
	
	</script>



		<style>
		table, td, th {    
		    border: 1px solid #ddd;
		    text-align: center;
		}

		table {
		    border-collapse: collapse;
		    width: 50%;
		}

		th, td {
		    padding: 15px;
		}
		</style>

</head>


<body>

<?php

session_start();
#echo $_SESSION['session_student_name'];

$name = $_SESSION['session_faculty_name'];
#echo "<center> <br> <br> <br>Welcome to student page....!!!";
#echo "welcome to ";
#echo $name;
#echo "</center>";

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

$result =mysqli_query($con,"select * from register_table where name='$name'");
$student_row=mysqli_fetch_array($result,MYSQLI_NUM); 
$name = $student_row[0];
$nameid=$student_row[1];
$password = $student_row[2];
$deptname=$student_row[3];
$gender=$student_row[4];
#echo $name;
#echo $nameid;
#echo $password;
#echo $deptname;
#echo $gender;

?>


<div class="navbar-wrapper">
    <div class="container-fluid">
        <nav class="navbar navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Welcome to <?php echo $name ?> </a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <!--<li class="active"><a href="#" class="">Home</a></li>-->
                        <li class=" dropdown">
                            <a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Departments <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="csefaculty_student.php">CSE</a></li>
                                <li><a href="ecefaculty_student.php">ECE</a></li>
                                <li><a href="itsfaculty_student.php">IT</a></li>
                                <li><a href="eeefacutly_student.php">EEE </a> </li>
                            </ul>
                        </li>
                        
                       
                        <li class=" dropdown"><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Staff <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="csefaculty.php">CSE</a></li>
                                <li><a href="ecefaculty.php">ECE</a></li>
                                <li><a href="itfaculty.php">IT</a></li>
                                <li><a href="eeefaculty.php">EEE</a></li>
                            </ul>
                        </li>

                        <li class=" dropdown"><a href="forum.php" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Individual Discussion<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="onlineusers.php">online Users list</a></li>
                                <li><a href="recentchats.php">Recents chats </a></li></ul>


                        <li class=" dropdown"><a href="forum.php" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Forum Discussion<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="forum.php">Forum</a></li>
                                <li><a href="new_topic.php">New Topic</a></li></ul>

                        
                    </ul>
                    <ul class="nav navbar-nav pull-right">
                        <li class=" dropdown"><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Signed in as  <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="changepassword.php">Change Password</a></li>
                                <li><a href="facultyprofile.php">My Profile</a></li>
                            </ul>
                        </li>
                        <li class=""><a href="logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>



<!--<div class="table-title">
<h3>Data Table</h3>
</div>
<table class="table table-hover">
  <thead>
    <tr>
      <th>Student Details</th>
      <th>Username</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Name</th>
      <td>Mark</td>
      
    </tr>
    <tr>
      <th scope="row">College ID</th>
      <td>Jacob</td>
      
    </tr>
    <tr>
      <th scope="row">Department Name</th>
      <td>@twitter</td>
    </tr>

    <tr>
      <th scope="row">Gender</th>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
-->

<h1 style="color:green;"> <center> <br><br>Welcome to <?php echo $name ?> </center> </h1>

<table align="center">
 
  <center><h3><ul> Your Details </ul></h3> </center>
  <tr>
    <td>Name</td>
    <td><?php echo $name ?></td>
    
  </tr>
  <tr>
    <td>College ID</td>
    <td><?php echo $nameid ?></td>
    
  </tr>
  <tr>
    <td>Department Name</td>
    <td><?php echo $deptname ?></td>
    
  </tr>
  <tr>
    <td>Gender</td>
    <td><?php echo $gender ?></td>
    
  </tr>
</table>

<table align="center">
 
  <center><h3><ul> Login Details </ul></h3> </center>
  <tr>
    <td>Login ID</td>
    <td><?php echo $nameid ?></td>
    
  </tr>
  
  <tr>
    <td>Password</td>
    <td><?php echo $password ?></td>
    
  </tr>
</table>



</body>
</html>