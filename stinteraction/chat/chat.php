
<html>
<head>
</head>
<body>
<?php 
				
				include 'db.php';
				session_start();
				$sid=$_SESSION['stu_id'];
				$sname=$_SESSION['stu_name'];
				$fid=$_SESSION['fac_id'];
				$fname=$_SESSION['fac_name'];
				$sender=$_SESSION['sender_name'];
				$receiver=$_SESSION['receiver_name'];
				

				$query ="select * from chat where stu_id='$sid' and fac_id='$fid'";
				#$query ="select * from chat";
			
				$run = $con->query($query);

				while($row = $run->fetch_array()) :
			?>
				<div id="chat_data">
					<span style="color:green;"><?php echo $row['sender'];?></span> :
					<span style="color:brown;"><?php echo $row['msg'];?></span>
					<!--<span style="float:right;"><?php echo formatDate($row['date']);?></span>-->
					<span style="float:right;"><?php echo $row['date'];?></span>
				</div>
				<?php endwhile; ?>

</body>
</html>