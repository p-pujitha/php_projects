<html>
<body>
<?php
	#Recieving hmtl-Form submitted data values
	$iname3=$_POST['id_name3'];
	$bname3=$_POST['bookname3'];
	
	$doi3=$_POST['dateofissue3'];
	$doex3=$_POST['dateofexpiry3'];

	$con= mysql_connect("localhost:3306","root","");


	if(!$con)
	{
		die('ERROR:='.mysql_error());
	}
	
	mysql_select_db("mydb",$con);
	
	
	$query3="delete from mytable3 where bookname2='$bname3' ";
	if(!mysql_query($query3,$con))
	{
		die('ERROR:='.mysql_error());
		
	}
	
	
	

		mysql_select_db("mydb",$con);
	
	$query1="INSERT INTO mytable4(id_name3,bookname3,dateofissue3,dateofexpiry3)VALUES('$iname3','$bname3','$doi3','$doex3')";
	
	#Now passing query to db connection

	if(!mysql_query($query1,$con))
	{
		die('ERROR:='.mysql_error());
	}
	
	
	#NOW SECOND TIME CONNECTION TO DATABASE
	
	mysql_select_db("mydb",$con);
	
	$query2="SELECT * from mytable4";
	$resultset=mysql_query($query2,$con);
	echo "<br><br>";
	
	echo "<h2 align=center > RETURNED BOOKS </h2>";
	echo "<center> <table border=2 width=900 >";
	echo '<tr><td><center> ID_NO </center> </td>
		   <td><center> BOOKNAME</center> </td>
		   
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
		echo '</td>';
		
		echo '</tr>';
	}
	echo '</table></center>';

	mysql_select_db("mydb",$con);
	$query4="select no_books from mytable2 where bookname='$bname3' ";
	
	$ans=mysql_query($query4,$con);
	echo "ans = '$ans' ";
	$intans=intval($ans);
	echo $intans;
	if($intans > 1)
	{	
		$query3 ="update mytable2 set no_books=no_books+1 where bookname='$bname3' ";
		if(!mysql_query($query3,$con))
		{
			die('ERROR:='.mysql_error());
		}
		
	}
	else
	{

		echo "<center><b>ADD THIS BOOK TO YOUR LIBRARY </b></a></center>";
	}

	
	?>
	
	</body>
</html>