<html>
<head>
<script>
function showUser(str){
	if (str == "")
	{
		document.geElementById("txtcategory").innerHTML ="";
		return;
	}
	else
	{
		if(window.XMLHttpRequest)
		{
			//code for IE7+, Firefox, Chrome,Opera
			xmlhttp = new XMLHttpRequest();
		}
		else
		{
			//code for IE6, IE5
			xmlhttp = new ActiveObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange = function()
		{
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
			{
				document.getElementById("txtcategory").innerHTML= xmlhttp.responseText;
			}
		};
		xmlhttp.open("GET", "getuser.php?q="+str , true);
		xmlhttp.send();
	}
}
</script>


</head>
<body>
<form>
<select name="category" onchange="showUser(this.value)">
	<option value="">View List of books based on category:</option>
	<option value="CSE">CSE</option>
	<option value="ECE">ECE</option>
	<option value="EEE">EEE</option>
	<option value="IT">IT</option>
	<option value="CIVIL">CIVIL</option>
</select>
</form>
<br>
<div id="txtcategory"><div>

<?php
	
	$con=mysql_connect("localhost:3306","root","");
	
	mysql_select_db("mydb",$con);
	$query2="SELECT * from mytable2 ";
	$resultset=mysql_query($query2, $con);
	
	echo "<br><br>";
	
	echo "<h2 align=center> TOTAL BOOKS IN LIBRARY </h2>";
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