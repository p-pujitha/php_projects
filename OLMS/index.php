<html>
<head>
	<script>
		window.history.forward(1);
	</script>
	<title>OLMS</title>
	<style>
	body{
		background-image: url(images/library.jpg);
		background-size:cover;
		}
	</style>
</head>
<BODY background="images/libray.jpg">
	
<?php
	include("image1.html");
	
?>
	
	<FORM name=form1 method="POST" action="Login_authenticate.php" onSubmit="return loginValidate();">
	<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>


	<TABLE align=right border="0" cellpadding="0" cellspacing="0" width="375" height="148" bgcolor="#A8CAF0">
	<caption> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	</caption>
	<TR>
		<TD width="18" height="1"> </TD>
 		<TD width="17" height="1"> </TD>
		<TD width="0" height="5" > </TD>
		<TD width="0" height="1" colspan="2">
		
	</TR>

	<TR background="#C0DFFD">
	<TD width="25" height="50"></td>	
	<TD width="25" height="154" rowspan="4">&nbsp;&nbsp;&nbsp;</td>
	<TD width="192" height="50">&nbsp;<b>UserID</b>
		
	<input type="text" class="fc" name="uname" id="uname" size="22" placeholder="User-Id">
	</TD>
	<TD width="6" height="154"  rowspan="4">&nbsp;&nbsp;&nbsp;&nbsp;</td>
	<TD width="300" height="154" rowspan="4"> <img border="0"
		 </TD>
	</TR>

	<TR>
	<td width="18" height="36"></td>
	<TD width="192" height="36">&nbsp;<b>Password</b>&nbsp;&nbsp;&nbsp;
	<input type="password" class="fc" name="pwd" id="pwd" size="22" placeholder="password">
	</TD>
	</TR>
	<TR>
	<TD width="18" height="28"></td>
		<TD width="217" height="28" bgcolor="#A8CAF0">&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="submit" value="LOGIN"  class="fc" name="B1"style="background-color:#000080; color: #FFFFFF; font-weight:bold">
	</TD>
	</TR>
	<TR>
	<td width="20" height="40"></td>
	<TD width="267" height="40" bgcolor="#A8CAF0"> &nbsp;&nbsp;&nbsp;

	<br>
	<a href="registration.html" style='text-decoration:none;font-size:1.5em;'><h3> &nbsp;NewUser SignUp </h3> </a>
	</TD>
	</TR>
	</TABLE>

</FORM>
</BODY>
</html> 