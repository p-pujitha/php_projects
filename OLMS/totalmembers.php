<html>
<body>
<?php
	
	$con=mysql_connect("localhost:3306","root","");
	mysql_select_db("mydb",$con);
	
	$query2="SELECT * from mytable1";
	$resultset=mysql_query($query2,$con);
	echo "<br><br>";
	
	echo "<h2 align=center > REGISTRED MEMBERS  </h2>";
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