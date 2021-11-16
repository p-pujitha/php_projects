<html>
<head>
	<script>
		window.history.forward(1);
	</script>

</head>
<body>
<p align=center><a href="index.php" target ='_blank'><b>LOGOUT</b></a></p>
<?php
	include("image.html");
	session_start();
	$un=$_SESSION['sess_user_id'];
	if(isset($_SESSION['sess_user_id']))
	{
		echo '<center> <b>';
		echo "Welcome to " .$_SESSION['sess_user_id'];
		echo '</b> </center>';
	}
	
	#echo '<center><b>';
	#echo "DETAILS OF THE USER WHILE REGISTRATION" ;
	#echo '</b></center>';
	$con=mysql_connect("localhost:3306","root","");
	if(!$con)
	{
		die('ERROR:=' . mysql_error());
	}
	

	
	mysql_select_db("mydb",$con);
	$query2="select * from user_table where uname='$un'";
	$resltset=mysql_query($query2,$con);
	echo "<br><br>";

	echo "<h2 align=center style='color:red'>DETAILS OF THE USER IN REGISTRATION </h2>";
	echo "<center><table border=2 width=900 bgcolor=skyblue style='color:red;border-color:darkblue;border-collapse:collapse'>";	
	echo '<tr><td><center>USER NAME</center></td>
		<td><center>PASSWORD</center></td>
		<td><center>EMAIL ID</center></td>
		<td><center>PHONENUM</center></td></tr>';
	
	while($row=mysql_fetch_array($resltset))
	{
		echo '<tr><td>';
		echo "$row[0]";
		echo '</td>';
		echo '<td>';
		echo "$row[1]";
		echo '</td> <td>';
		echo "$row[2]";
		echo '</td> <td>';
		echo "$row[3]";
		echo '</td>';
		echo '</tr>';
	}
	echo'</table></center>';
	#echo '<center><b>';
	#echo "DETAILS OF THE USER IN MEMBERSHIP" ;
	#echo '</b></center>';
	$con=mysql_connect("localhost:3306","root","");
	if(!$con)
	{
		die('ERROR:=' . mysql_error());
	}
	

	
	mysql_select_db("mydb",$con);


	
	$query2="SELECT * from mytable1 where name='$un' ";
	$resultset=mysql_query($query2,$con);
	echo "<br><br>";
	
	echo "<h2 align=center >DETAILS OF THE USER IN MEMBERSHIP </h2>";
	echo "<center> <table border=2 width=900 >";
	echo '<tr><td><center> ID_NO </center> </td>
		   <td><center> USERNAME</center> </td>
		   <td><center> MAILID </center> </td>
		   <td><center> ADDRESS </center> </td>
		   <td><center> GENDER </center> </td> </tr>';
	
	#NOW RETURNING THE RESULT TO BROWSER IN A TABLE FORMAT
	
	while($row=mysql_fetch_array($resultset))
	{
		echo '<tr><td>';
		echo "$row[0]";
		echo '</td>';
		echo '<td>';
		echo "$row[1]";
		echo '</td><td>';
		echo "$row[2]";
		echo '</td><td>';
		echo "$row[3]";
		echo '</td><td>';
		echo "$row[4]";
		echo '</td>';
		echo '</tr>';
	}
	echo '</table></center>';

?>
</body>
</html>
	
