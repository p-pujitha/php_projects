window.history.forward();
var RE1=/^[a-zA-Z]+$1;
var RE2=/^[0-9]+$1;

function validateForm()
{
	if(document.forms["form1"][id_name"].value == "" || document.getElementById("id_name").value == NULL)
	{
		window.alert("Id name field should not be Empty");
		document.form1.id_name.focus();
		return false;
	}
	else if(RE2.test(document.getElementById("id_name").value)==false)
	      {
			window.alert("Invalid Format");
			document.form1.id_name.focus();
			return false;
		}
	else if(document.getElementById("id_name").value.length<6)
		{
			window.alert("Id name must be atleast 6 characters");
			document.form1.id_name.focus();
			return false;
		}
	else if(document.getElementById("name").value=="" || document.geElementById("name").value==NULL)
		{
			window.alert("Name field should not be Empty");
			document.form1.name.focus();
			return false;
		}
	else if(RE1.test(document.getElementById("name").value)==false)
		{
			window.alert("Invalid Format");
			document.form1.name.focus();
			return false;
		}
	else if(document.getElementById("name").value.length<6)
		{
			window.alert("Name must be atleast 10 characters");
			document.form1.name.focus();
			return false;
		}
	else if(document.getElementById("addr").value=="")
		{
			window.alert("Please enter your address");
			document.form1.addr.focus();
			return false;
		}
	else (document.form1.gender[0].checked==false && document.form1.gender[1].checked==false)
		{
			window.alert("please choose gender");
			document.form1.gender[0].focus();
			document.form1.gender[1].focus();
			return false;
		}
}
	