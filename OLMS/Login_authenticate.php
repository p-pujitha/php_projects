<?php
	session_start();
	$un=$_REQUEST["uname"];
	$pd=$_REQUEST["pwd"];
	echo $un." ".$pd;
	$con=mysql_connect("localhost:3306","root","");
	echo "connctd";
	mysql_select_db("mydb",$con);
	if($un=='admin')
	{
		$admin_reslt=mysql_query("select * from admin_table",$con);
	      	$admin_row=mysql_fetch_row($admin_reslt);
	echo " db retrieved_pwd is=".$admin_row[1];
	if($admin_row[1]==$pd)
	{
		$_SESSION['sess_admin_id']=$un;
		//header("Refresh:0; url=Location:homepage.html");
		header('Location:homepage.html');
		
		exit;
	}
	}
	else
	if($un!="")
	{
		$result=mysql_query("select * from user_table where uname='$un' ",$con);
		$staf_row=mysql_fetch_array($result);
		$du=$staf_row[0];
		$dp=$staf_row[1];
		if($du==$un&&$dp==$pd)
		{ $_SESSION['sess_user_id']=$un;
		 
	
			#header("Refresh:0, url=Location:userpage.php");
			header('Location:userpage.php');		
		}
		else
		{
			header('Location:index.php');	
		}
	
	}
	else
	{
		#header('Location:index.html');
		header("Refresh:0; url=index.php");
	}
?>