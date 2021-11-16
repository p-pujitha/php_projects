<html>
<head>
<style>
	table{
		width:100%;
		border-collapse:collapse;
		}
	table, td, th{
		border:1px solid black;
		padding:5px;
		}
	th{ text-align:left;}
</style>
</head>
</body>

<?php
	$q=($_GET['q']);
	//echo $q;
	$con = mysql_connect("localhost:3306","root", "");
	if(!$con){
		
		}

	mysql_select_db("mydb",$con);
	$sql = "select * from mytable2 where subcode = '".$q."' ";
	$resultset = mysql_query($sql, $con);
	
	echo "<h2 align=center> BOOKS  </h2>";
	echo "<center><table border=2 width=900>";
	echo '<tr><td><center> BOOKNAME </center></td>
		  <td><center> BOOKCODE </center></td>
		  <td><center> AUTHORNAME </center> </td>
	          <td><center> DATE OF ARRIVAL </center> </td>
                  <td><center> PRICE</center></td>
                  <td><center> RACKNO </center> </td>
		  <td><center> NO.OF BOOKS </center> </td>
		  <td><center> SUBJECT CODE </center> </td>
		</tr>';

	while($row=mysql_fetch_array($resultset))
	{
		echo '<tr><td>';
		echo "$row[0]";
		echo '</td><td>';
		echo "$row[1]";
		echo '</td><td>';
		echo "$row[2]";
		echo '</td><td>';
		echo "$row[3]";
		echo '</td><td>';
		echo "$row[4]";
		echo '</td><td>';
		echo "$row[5]";
		echo '</td><td>';
		echo "$row[6]";
		echo '</td><td>';
		echo "$row[7]";
		echo '</td></tr>';
	}
	
	echo '</table></center>';
	?>
</body>
</html>