<?php
//include auth.php file on all secure pages
include("authstudent.php");
?>
<!doctype html>

<html>
<head>
<title>sign up page for students </title>
<script>
	function inputAlphabet1()
	{
		var result = document.getElementById('first');	
		var alphaExp = /^[a-zA-Z]+$/;
		if(result.value!="")
		{
			if (!result.value.match(alphaExp)) 
			{
				document.getElementById('1').innerHTML ="invalid name, only alphabets allowed"; 
				document.getElementById('1').style.color = 'red';
				return false;
			}
			else
			{
				document.getElementById('1').innerHTML ="";  
				return true;
			}
		}
		else
		{
			document.getElementById('1').innerHTML ="This field can't be blank"; 
			document.getElementById('1').style.color = 'red';
		}
	}
	function inputAlphabet2()
	{
		var result = document.getElementById('last');	
		var alphaExp = /^[a-zA-Z]+$/;
		if(result.value!="")
		{
			if (!result.value.match(alphaExp)) 
			{
				document.getElementById('2').innerHTML ="invalid name, only alphabets allowed"; 
				document.getElementById('2').style.color = 'red';
				return false;
			}
			else
			{
				document.getElementById('2').innerHTML =""; 
				return true;
			}
		}
		else
		{
			document.getElementById('2').innerHTML =""; 
		}
	}
	function phonev(id, lbl) 
	{
        p = document.getElementById(id).value;
		x=document.getElementById(lbl);
		if(document.getElementById(id).value!="")
		{
		if(isNaN(p)==true)
			{
                x.innerHTML="<span class='Er'>This is not a valid number</span>";
            }
			else
			{
                x.innerHTML="";
            }
		}
		else
		{
            x.innerHTML="";
        }
    }
	function ValidateDropdown1() 	
	{
		var result = document.getElementById('year').value;
		if (result == "0") 
		{
			document.getElementById('5').innerHTML ="Update your year";
			document.getElementById('5').style.color = 'red';
			return false;
		}
		else
		{
			document.getElementById('5').innerHTML ="";
			return true;
		}
	}
		function validateEmail(email)
	{ 
		var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		if(re.test(email))
		{
			document.getElementById('8').innerHTML ="";
			return true;
		}
		else
		{
			document.getElementById('8').innerHTML ="invalid email";
			document.getElementById('8').style.color = 'red';
			return false;
		}
	}
		var check = function() 
	{
		if (document.getElementById('password').value == document.getElementById('cpassword').value) 
		{
			document.getElementById('message').style.color = 'green';
			document.getElementById('message').innerHTML = 'Passwords match';
		}
		else 
		{
			document.getElementById('message').style.color = 'red';
			document.getElementById('message').innerHTML = 'Passwords do not match';
		}
	}
	 window.history.forward();
	function noBack() { window.history.forward(); }	
</script>
<link rel="stylesheet" type="text/css" href="newstyle.css">

</head>
<body onload="noBack();" 
	onpageshow="if (event.persisted) noBack();" onunload="">
<div id="logo">
 <h1><center>Welcome <?php echo $_SESSION['username']; ?>! Edit your profile </center> </h1>
 </div>
 <hr />
 <div class="topnav" id="myTopnav">
  <a href="studentProfile.php" class="active">BACK TO PROFILE PAGE</a>
</div>
<br />
<div class="abc">
<form action="update.php" method="POST" enctype="multipart/form-data">
<div class="formfield" id="myform">
    <fieldset>
<legend><center><b>Fill in your details<b></center></legend>
<ul>
<div class="first">
    <p>
        <label for="name">First Name: </label>
        <input type="text" placeholder="Update your First Name" name="first" id="first" onblur="inputAlphabet1(value)" onfocus="fnclear('first','1')" size="25" maxlength="25" />
	<div id="1" value=""></div>
    </p>
<p>
    <label for="last">Last Name: </label>
<input type="text" id="last" placeholder="Update your Last Name" name="last" onblur="inputAlphabet2(value)" onfocus="fnclear('last','3')" size="25" maxlength="25" />
	<div id="2" value=""></div>
</p>
 <p>
        <label for="name">Address: </label>
        <input type="text" placeholder="Update your present address" name="PrAddress" id="PrAddress" onblur="fnnumbervalidate('PrAddress','5')" maxlength="25" size="25"/>
	<div id="3"></div>
    </p>
<p>
<label for="address">Cellular No.:</label>
<input type="text" placeholder="Update your phone number" name="phone" id="cell" onblur="phonev('cell','4')" maxlength="10" size="25"/>
	<div id="4"></div>
</p>
</div>
<p>Year:
<select name="year" id="year" onblur="ValidateDropdown1()">
<option value="0">--SELECT A YEAR--</option>
<option value="first year">First Year</option>
<option value="second year">Second Year</option>
<option value="third year">Third Year</option>
<option value="final year">Final Year</option>
</select>
<div id="5"></div>
</p>
<p>Change your Profile-image:
<input type="file" name="file" /><br />
<div id="6"></div>
</p>
<p>
<label for="mid">Date Of Birth:</label>
<input type="date" name="dob" maxlength="25" size="25"/>
	<div id="7"></div>
</p>
<div class="info"> 
    <p>
        <label for="mail">E-mail: </label>
        <input type="text" name="email" placeholder="Update your email" id="email" onfocus="fnclear('username','8')" onblur="validateEmail(value)" maxlength="25" size="25"/>
	<div id="8"></div>
    </p>
    <p>
<label for="pass">Password:</label>
<input type="password" name="password" placeholder="Enter new password" id="password" onkeyup='check();' maxlength="25" size="25"/>
	<div id="9"></div>
</p>
<p>
<label for="repass">Confirm Password:</label>
	<input type="password" name="cpassword" id="cpassword" placeholder="Confirm password" onkeyup='check();' maxlength="25" size="25" />
	<div id='message'></div>
	<div id="10"></div>
</p>

    </p>
</div>
</fieldset>
</div>
<br />
<center>
<center><input type="submit" name="submit" value="UPDATE" class="sub" /></center>
</center>
</div>
</p>
</form>
</body>
</html>