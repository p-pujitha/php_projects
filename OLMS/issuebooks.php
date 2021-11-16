<html>
<body>
<?php
	$con=mysql_connect("localhost:3306","root","");
	
	mysql_select_db("mydb",$con);
	
	$query2="SELECT * from mytable3";
	$resultset=mysql_query($query2,$con);
	echo "<br><br>";
	
	echo "<h2 align=center > ISSUE OF BOOKS </h2>";
	echo "<center> <table border=2 width=900 >";
	echo '<tr><td><center> ID_NO </center> </td>
		   <td><center> BOOKNAME</center> </td>
		   <td><center> BOODCODE </center></td>
		   <td><center> DATE OF ISSUE </center> </td>
		   <td><center> DATE OF EXPIRY </center> </td>
		   </tr>';
	
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