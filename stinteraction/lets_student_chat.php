
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
  
</head>
<body>
<?php

session_start();
$sender_name = $_SESSION['sendername'];
$receiver_name=$_GET['receivername'];
$_SESSION['sender_name'] = $sender_name;
$_SESSION['receiver_name']=$receiver_name;

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

$result =mysqli_query($con,"select * from register_table where name='$sender_name'");
$row=mysqli_fetch_array($result,MYSQLI_NUM); 
$id= $row[1];
$member=$row[5];

if($member == "faculty")
{
    $result2 =mysqli_query($con,"select * from register_table where name='$sender_name'");
    $row2=mysqli_fetch_array($result2,MYSQLI_NUM); 
    $fac_id= $row2[1];
    $_SESSION['fac_id']=$fac_id;
    $fac_name=$sender_name;
    $_SESSION['fac_name']=$fac_name;

    $result3 =mysqli_query($con,"select * from register_table where name='$receiver_name'");
    $row3=mysqli_fetch_array($result3,MYSQLI_NUM); 
    $stu_id= $row3[1];
    $_SESSION['stu_id']=$stu_id;
    $stu_name=$receiver_name;
    $_SESSION['stu_name']=$stu_name;

}
else
{

    $result2 =mysqli_query($con,"select * from register_table where name='$sender_name'");
    $row2=mysqli_fetch_array($result2,MYSQLI_NUM); 
    $stu_id= $row2[1];
    $_SESSION['stu_id']=$stu_id;
    $stu_name=$sender_name;
    $_SESSION['stu_name']=$stu_name;

    $result3=mysqli_query($con,"select * from register_table where name='$receiver_name'");
    $row3=mysqli_fetch_array($result3,MYSQLI_NUM); 
    $fac_id= $row3[1];
    $_SESSION['fac_id']=$fac_id;
    $fac_name=$receiver_name;
    $_SESSION['fac_name']=$fac_name;


}



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
                    <a class="navbar-brand" href="#">Welcome to <?php echo $sender_name ?> </a>
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


<div class="jumbotron text-center">
  <h1>Welcome to Chatting Page!!</h1>
  <h2> Let's chat each other and enjoy !!!</h2> 
  <p> Faculty Name : <?php echo $fac_name ?></p>
  <p> Student Name : <?php echo $stu_name ?> </p>
  <p> Faculty ID: <?php echo $fac_id ?></p>
  <p> Student ID : <?php echo $stu_id ?> </p>
  
 <a href="chat/chatting.php" class="btn btn-info" role="button">Let's chat!</a>

</div>



</body>
</html>