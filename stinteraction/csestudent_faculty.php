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

function go_there(button)
{
  var name= button.getAttribute("data-name");
  var where_to= confirm("Do you want to chat ?");
  if (where_to== true)
  {
    window.location="letschat.php?receivername=" + name;
  }
}
  
  </script>

</head>


<body>

<?php

session_start();
#echo $_SESSION['session_student_name'];

$name = $_SESSION['session_student_name'];
$_SESSION['sendername'] = $name;

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

                        <!--<li><a href="individualdiscussion.php">Individual Discussion</a></li>-->

                        <li class=" dropdown"><a href="forum.php" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Individual Discussion<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="online_stu_users.php">online Users list</a></li>
                                <li><a href="recent_stu_chats.php">Recents chats </a></li></ul>
                        



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
                        <li class=""><a href="logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>


<h1 style="color:green;"> <center> <br><br>CSE STAFF DETAILS </center> </h1>
<?php

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

$result =mysqli_query($con,"select * from register_table where deptname='CSE' and regmember='faculty'");

if(!$result)
{
   die('ERROR:='.mysqli_error($result));
}

if($result )
{
  
}


?>


<table class="table table-hover">
<thead>
    <tr>
        <th> Faculty Name </th>
        <th> Faculty ID </th>
        <th> Gender </th>
        <th> Interact </th>
    </tr>
</thead>
<tbody>
  <!--<?php #while ($row = mysqli_fetch_array($result,MYSQLI_NUM)) { 
    #echo "<tr>
     ##  <td>".$row[1]."</td>
       # <td>".$row[4]."</td>
      #</tr>"; 
    #}
  ?>-->

  <?php
 
// Start looping table row
while($rows = mysqli_fetch_array($result,MYSQLI_NUM)){
?>
<tr>
<td><?php echo $rows[0]; ?></td>
<td><?php echo $rows[1]; ?></td>
<td><?php echo $rows[4]; ?></td>
<!--<td><a href="#"><span class="glyphicon glyphicon-envelope">Let's Chat!!!</span></a></td>-->
<td><!--<a href="letschat.php"><span class="glyphicon glyphicon-envelope">Let's Chat!!!</span></a> -->
<INPUT TYPE="button" value="Lets Chat!!!" onClick="go_there(this)" data-name="<?php echo $rows[0] ?>"> </INPUT></td>
</tr>

<?php
// Exit looping and close connection 
}
mysqli_close($con);
?>

</tbody>
</table>
</body>
</html>