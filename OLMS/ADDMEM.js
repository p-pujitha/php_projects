<script type="text/javascript"> 
	function validate()
	{
		if(document.form1.id_name.value == "")
		{
			alert(" Please provide id name");
			document.form1.id_name.focus();
			return false;
		}
		if(document.form1.name.value== "")
		{
			alert("please provide Your name");
			document.form1.name.focus();
			return false;
		}
		if(document.form1.mailid.value=="")
		{
			alert("Please provide your mailid");
			document.form1.mailid.focus();
			return false;
		}
		if(document.form1.addr.value==" ")
		{
			alert("Please provide your address");
			document.form1.addr.focus();
			return false;
		}
		if (( form1.gender[0].checked == false ) && ( form1.gender[1].checked == false ) )
		{
			alert("Please choose gender");
			return false;
		}
}
</script>