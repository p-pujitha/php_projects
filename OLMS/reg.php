<html>
<body>
<?php
	$un=$_POST['uname'];
	$pw=$_POST['pwd'];
	$ei=$_POST['eid'];
	$phn=$_POST['phno'];
	$con=mysql_connect("localhost:3306","root","");
	if(!$con)
	{
		die('ERROR:=' . mysql_error());
	}
		#echo "YES ...connectd to database<br>";
	mysql_select_db("mydb",$con);
$query1="INSERT INTO user_table(uname,password,emailid,phoneno)VALUES('$un','$pw','$ei','$phn')";

# mysql_query($query1,$con);

	if (!mysql_query($query1,$con))
	{
		die('ERROR:= ' . mysql_error());
	}

	if(mysql_affected_rows() == 1)
	{
		#echo "1-EMPLOYEE RECORD ADDED SUCCESSFULLY...";

echo " <div style='font-size:20pt;text-align:center;color:blue;background-color:lightskyblue;width:60%;border-radius:50px;'>";
	echo " You Have Successfully Registed with the following preview data <br>" ;
	echo " Click Here To <a href='index.php'> CONTINUE </a> for Login";
echo " </div> ";

}

	mysql_select_db("mydb",$con);
	$query2="select * from user_table where uname='$un'";
	$resltset=mysql_query($query2,$con);
	echo "<br><br>";

	echo "<h2 align=center style='color:red'>Registred person is </h2>";
	echo "<center><table border=2 width=900 bgcolor=skyblue 		style='color:red;border-color:darkblue;border-collapse:collapse'>";	
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
	?>
</body>
</html> 