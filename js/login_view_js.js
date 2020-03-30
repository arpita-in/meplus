
function form_vali()
{
	var username= document.getElementById('username').value;
	var password= document.getElementById('password').value;
	var c_password= document.getElementById('c_password').value;
	var email= document.getElementById('email').value;
	var mobile= document.getElementById('mobile').value;
	
	var pattern1= /^[A-Z a-z_]{3,20}$/;
	var pattern2= /^[A-Za-z._0-9#@$%^&*)(!]{3,}$/;
	var pattern3= /^[A-Za-z._0-9]{3,40}@[A-Za-z_]{3,40}[.]{1}[A-Za-z_.]{2,6}$/;
	var pattern4= /^[0-9]{10}$/;

	if(pattern1.test(username)==false)
	{
		document.getElementById('showerror').innerHTML="only character is allowed!";
		document.getElementById('showerror').style.color = "red";
		return false;
	}// End of the Username
	if(pattern2.test(password)==false)
	{
		document.getElementById('showerror').innerHTML="Please enter valid password!";
		document.getElementById('showerror').style.color = "red";
		return false;
	}
	else
	{
		if (password.length<6)
		{
			document.getElementById('showerror').innerHTML="Enter atleast 6 character!";
			document.getElementById('showerror').style.color = "orange";
			return false;
		}
	}// End of the Password
	if(pattern2.test(password)==false)
	{
		document.getElementById('showerror').innerHTML="Please enter valid password";
		document.getElementById('showerror').style.color = "red";
		return false;
	}
	else
	{
		if (password!=c_password)
		{
			document.getElementById('showerror').innerHTML="Password is not matched";
			document.getElementById('showerror').style.color = "red";
			return false;
		}
	}// End of the C_Password
	
	if(pattern3.test(email)==false)
	{
		document.getElementById('showerror').innerHTML="Please enter valid email";
		document.getElementById('showerror').style.color = "red";
		return false;
	}// End of Email

	if(pattern4.test(mobile)==false)
	{
		document.getElementById('showerror').innerHTML="Enter valid Mobile number";
		document.getElementById('showerror').style.color = "red";
		return false;
	}// End of Phone

}
