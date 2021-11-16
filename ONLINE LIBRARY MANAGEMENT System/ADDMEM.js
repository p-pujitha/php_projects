function validateForm()
{
	var x = document.forms["form1"]["id_name"].value;
	if(x == null || x == "")
	{
		alert("Id name should not be empty");
		return false;
	}
	else if( document.forms["form1"]["name"].value == "")
		{
			alert("Name field should not be empty");
			return false;
		}
		else if(document.forms["form1"]["addr"].value == "")
			{
				alert("please Enter your address");
				return false;
			}
			else (document.form1.gender[0].checked == false && document.form1.gender[1].checked ==  false)
				{
					alert("please choose gender");
					document.form1.gender[0].focus();
					document.form1.gender[1].focus();
					return false;
				}

}