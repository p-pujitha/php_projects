<!DOCTYPE html>
<?php include 'db.php';
				
				session_start();
				$sid=$_SESSION['stu_id'];
				$sname=$_SESSION['stu_name'];
				$fid=$_SESSION['fac_id'];
				$fname=$_SESSION['fac_name'];
				$sender=$_SESSION['sender_name'];
				$receiver=$_SESSION['receiver_name'];

?>
<html>
	<head>
		<title>chatting page....</title>
		<link rel="stylesheet" href="style.css" media="all" />

		<script>

			function ajax(){

				var req = new XMLHttpRequest();

				req.onreadystatechange = function(){

					if(this.readyState == 4 && this.status == 200)
					{
						document.getElementById("chat").innerHTML = this.responseText;
					}

				};

				req.open("GET","chat.php", true);
				req.send();

			}

			setInterval(function(){ajax()}, 1000);
		</script>
		
	</head>

	<body onload = "ajax();" >

		<p> <center> <b> <ul>  STUDENT - TEACHER CHATTING CONVERSATION <br> <br><?php echo  " Faculty : "; echo $fname; ?> <br> <?php echo " Student :"; echo $sname; ?></ul> </b></center></p>
		<div id="container">
			<div id="chat_box">
			<div id="chat">
			</div>


			<form method="post" action="chatting.php"  onsubmit="ajax();">
			<textarea name="msg" placeholder="Enter Message"></textarea>
			<input type="submit" name="submit" value="send it" />
			</form>
			<?php
			if(isset($_POST['submit']))
			{
				$msg=$_POST['msg'];
				$insert = "insert into chat(stu_id, fac_id, stu_name, fac_name, msg, sender)values('$sid', '$fid', '$sname', '$fname', '$msg', '$sender')";
				$run = $con->query($insert);

				if($run){

					echo "<embed loop='false' hidden='true' src='chatsound.mp3' autoplay='true'";
					
				}

			}

			?>

			</div>
			</div>



		
	</body>


</html>