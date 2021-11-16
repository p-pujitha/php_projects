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
$name = $_SESSION['name'];
$_SESSION['name']=$name;
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

$sql="select * from fquestions order by id DESC";
$result=mysqli_query($con, $sql);


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
                                <!--<li class=" dropdown">
                                    <a href="csestudent.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">CSE</a>
                                </li>-->
                                <li><a href="csestudent.php">CSE</a></li>
                                <li><a href="ecestudent.php">ECE</a></li>
                                <li><a href="itstudent.php">IT</a></li>
                                <li><a href="eeestudent.php">EEE </a> </li>
                            </ul>
                        </li>
                        
                       
                        <li class=" dropdown"><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Staff <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="csestudent_faculty.php">CSE</a></li>
                                <li><a href="ecestudent_faculty.php">ECE</a></li>
                                <li><a href="itstudent_faculty.php">IT</a></li>
                                <li><a href="eeestudent_faculty.php">EEE</a></li>
                            </ul>
                        </li>

                        <li><a href="#">Individual Discussion</a></li>
                        <li class=" dropdown"><a href="forum.php" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Forum Discussion<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="forum.php">Forum</a></li>
                                <li><a href="new_topic.php">New Topic</a></li></ul>
                        
                    </ul>
                    <ul class="nav navbar-nav pull-right">
                        <li class=" dropdown"><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Signed in as  <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="changepassword.php">Change Password</a></li>
                                <li><a href="myprofile.php">My Profile</a></li>
                            </ul>
                        </li>
                        <li class=""><a href="login.html">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>
<h1 style="color:green;"> <center> <br>Let's Discuss & Clarify your doubts </center> </h1>
<table class="table table-hover" >
<thead>
    <tr>
        <th width="10%">Name</th>
        <th width=50%>Topic</th>
        <th>Views </th>
        <th>Replies</th>
        <th>Date</th>
    </tr>
</thead>
<tbody>
<?php
 
// Start looping table row
if($result){
while($rows=mysqli_fetch_array($result,MYSQLI_NUM)){
?>
<tr>
<td bgcolor="#FFFFFF"><?php echo $rows[1]; ?></td>
<td bgcolor="#FFFFFF"><a href="view_topic.php?id=<?php echo $rows[0]; ?>"><?php echo $rows[4]; ?></a><BR></td>
<td align="center" bgcolor="#FFFFFF"><?php echo $rows[7]; ?></td>
<td align="center" bgcolor="#FFFFFF"><?php echo $rows[8]; ?></td>
<td align="center" bgcolor="#FFFFFF"><?php echo $rows[6]; ?></td>
</tr>
<?php
}
}
mysqli_close($con);
?>

</tbody>



</body>
</html>