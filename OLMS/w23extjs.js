		window.history.forward();
	                var RE3=/^.+@.+\..{3}$/;       
                                   var RE1=/^[a-zA-Z]+$/;
		var RE2=/^[0-9]+$/;
		   //var  EMRE=/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
	        function validateForm()
     	        {
		if(document.getElementById("uname").value=="")
		{
			window.alert("First name Field should not BE Empty");
			document.form1.uname.focus();
			return false;
		}
		
	                  else
		if(RE1.test(document.getElementById("uname").value)==false)
		{
			window.alert("Invalid Format");
			return false;
		}
	                  else
		if(document.getElementById("uname").value.length<6)
		{
			window.alert("First name Field must be atleast 6 characters");
			document.form1.uname.focus();
			return false;
		}
		else
		if(document.getElementById("pwd").value==""||document.getElementById("pwd").value==null)
		{
			window.alert("Password Field should not be Empty");
			document.form1.pwd.focus();
			return false;
		}	
	                  else
		if(document.getElementById("pwd").value.length<6)
		{
			window.alert("Password Field must have 6 characters");
			document.form1.pwd.focus();
			return false;
		}
	                  else
		if(document.form1.cpwd.value!=document.form1.pwd.value)
		{
			window.alert("Password and confirm password must be same");
			document.form1.cpwd.focus();
			return false;
		}
	                  else
		if(document.form1.eid.value==""||document.form1.eid.value==null)
		{
			window.alert("Email Id Field should not be empty");
			document.form1.eid.focus();
			return false;
		}
	                  else
		if(RE3.test(document.form1.eid.value)==false)
		{
			window.alert("Invalid EmailId");
			document.form1.eid.focus();
			return false;
		}
 		else
		if(document.form1.phno.value==""||document.form1.phno.value==null)
		{
			window.alert("Phone number Field should not be empty");
			document.form1.phno.focus();
			return false;
		}
	                 
	                  else
		if( RE2.test(document.form1.phno.value)==false)
		{
			window.alert("Enter phone number in digits only");
			document.form1.phno.focus();
			return false;
		}
	                  else
		if(document.form1.phno.value.length<10 || document.form1.phno.value.length>10)
		{
			window.alert("Phone number must be 10 digits only");
			document.form1.phno.focus();
			return false;
		}
	                  else
		if( RE2.test(document.form1.phno.value)==false)
		{
			window.alert("Invalid phone number");
			return false;
		}
	                  else
		if( document.form1.gender[0].checked==false && document.form1.gender[1].checked==false)
		{
			window.alert("Please choose gender");
			document.form1.gender[0].focus();
			
			return false;
		}
		else
		if(document.form1.date1.value==""||document.form1.date1.value==null)
		{
			window.alert("Date field should not be empty");
			document.form1.date1.focus();
			return false;
		}
	             
	                  else
		if((document.form1.Langs[0].checked==false) && (document.form1.Langs[1].checked==false) && (document.form1.Langs[2].checked==false) && (document.form1.Langs[3].checked==false))
		{
			window.alert("Please enter languages known");
			document.form1.Langs[0].focus();
			document.form1.Langs[1].focus();
			document.form1.Langs[2].focus();
			document.form1.Langs[3].focus();
			return false;
		}
	                  else
		if(document.form1.addr.value=="")
		{
			window.alert("Please enter your address");
			document.form1.addr.focus();
			return false;
		}
                                 else
		if(document.form1.file1.value==""||document.form1.file1.value==null)
		{
			window.alert("uploading file should not be empty");
			document.form1.file1.focus();
			return false;
		}
	                  else
		{
			window.alert("Ur entire Given inputs are VALID....!");
			return true;
		}
	        }