<html>
<body>
<?php
	$boname=$_POST['bookname'];
	$bcode=$_POST['bookcode'];
	$aoname=$_POST['authorname'];
	$doa=$_POST['dateofarrival'];
	$pr=$_POST['price'];
	$rno=$_POST['rackno'];
	$nbooks=$_POST['no_books'];
	$scode=$_POST['subcode'];

	$con=mysql_connect("localhost:3306","root","");
	
	if(!$con)
	{
		die('ERROR:='.msql_error());
	}
	
		mysql_select_db("mydb",$con);
	
	$query1="INSERT INTO mytable2(bookname,bookcode,authorname,dateofarrival,price,rackno,no_books,subcode)values('$boname','$bcode','$aoname','$doa','$pr','$rno','$nbooks','$scode')";
	
	
	if(!mysql_query($query1,$con))
	{
		die('ERROR:='.mysql_error());
	}

	mysql_select_db("mydb",$con);
	
	$query2="SELECT * from mytable2";
	$resultset=mysql_query($query2, $con);
	echo "<br><br>";
	
	echo "<h2 align=center> BOOKS IN LIBRARY </h2>";
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