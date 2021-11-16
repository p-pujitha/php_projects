<html>
<body>
<?php
	#Recieving hmtl-Form submitted data values
	$iname2=$_POST['id_name2'];
	$bname2=$_POST['bookname2'];
	$bcode2=$_POST['bookcode2'];
	$doi2=$_POST['dateofissue2'];
	$doex2=$_POST['dateofexpiry2'];

	$con= mysql_connect("localhost:3306","root","");


	if(!$con)
	{
		die('ERROR:='.mysql_error());
	}
	
	
	
	

		mysql_select_db("mydb",$con);
	
	$query1="INSERT INTO mytable3(id_name2,bookname2,bookcode2,dateofissue2,dateofexpiry2)VALUES('$iname2','$bname2','$bcode2','$doi2','$doex2')";
	
	#Now passing query to db connection

	if(!mysql_query($query1,$con))
	{
		die('ERROR:='.mysql_error());
	}
	
	
	#NOW SECOND TIME CONNECTION TO DATABASE
	
	mysql_select_db("mydb",$con);
	
	$query2="SELECT * from mytable3";
	$resultset=mysql_query($query2,$con);
	echo "<br><br>";
	
	echo "<h2 align=center > LENDING BOOKS </h2>";
	echo "<center> <table border=2 width=900 >";
	echo '<tr><td><center> ID_NO </center> </td>
		   <td><center> BOOKNAME</center> </td>
		   <td><center> BOOKCODE </center></td>
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

	#THIRD TIME CONNECTING TO DATABASE
	
		mysql_select_db("mydb",$con);
	$query3="select no_books from mytable2 where bookcode='$bcode2' ";
	
	$ans=mysql_query($query3,$con);
	$intans=intval($ans);
	
	if($intans > 1)
	{	
		$query3 ="update mytable2 set no_books=no_books-1 where bookcode='$bcode2' ";
		if(!mysql_query($query3,$con))
		{
			die('ERROR:='.mysql_error());
		}
		
	}
	else
	{

		$query3="update mytable2 set no_books=0 where bookcode='$bcode2' ";
		if(!mysql_query($query3,$con))
		{
		die('ERROR:='.mysql_error());
		}
	}


	?>

	</body>
</html>