<html>
<body>
<?php
	#Recieving hmtl-Form submitted data values
	$iname=$_POST['id_name'];
	$username=$_POST['name'];
	$mail=$_POST['mailid'];
	$address=$_POST['addr'];
	$sex=$_POST['gender'];
	#echo $gen;
	$con=mysql_connect("localhost:3306","root","");

	if(!$con)
	{
		die('ERROR:='.mysql_error());
	}
	
	

		mysql_select_db("mydb",$con);
	
	$query1="INSERT INTO mytable1(id_name,name,mailid,addr,gender)VALUES('$iname','$username','$mail','$address','$sex')";
	
	#Now passing query to db connection

	if(!mysql_query($query1,$con))
	{
		die('ERROR:='.mysql_error());
	}
	
	
	#NOW SECOND TIME CONNECTION TO DATABASE
	
	mysql_select_db("mydb",$con);
	
	$query2="SELECT * from mytable1";
	$resultset=mysql_query($query2,$con);
	echo "<br><br>";
	
	echo "<h2 align=center > REGISTRED MEMBERS </h2>";
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