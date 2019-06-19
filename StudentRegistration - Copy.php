<!doctype html>
<html> 
<head>
<title>sign up page for students </title>
<script>
 x=document.getElementById("first");
    function fnnumbervalidate(id, lbl)
	{
        no=document.getElementById(id).value;
        x=document.getElementById(lbl);
        if(document.getElementById(id).value!="")
		{
            if(isNaN(no)==false)
			{
                x.innerHTML="<span class='Er'>This field should not have <b>numbers</b></span>";
            }
			else
			{
                x.innerHTML="";
            }
        }
		else
		{
            x.innerHTML="<span class='Er'>This field cannot be blank</span>";
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
            x.innerHTML="<span class='Er'>This field cannot be blank</span>";
        }
    }
    function fnclear(id, lbl)
	{
        document.getElementById(id).value="";
    }
	 function fnallvalid()
	 {
        n=document.myForm.elements.length;
        for(i=1; i<n-1;i++)
		{
           if(document.myForm.elements[i].value=="" && i!=2 && i!=16)
		   {
               x=document.getElementById(i);
               x.innerHTML="<span class='Er'>This field cannot be blank</span>";
            }
        }
    }
	function dynInput(cbox)
	{
		if (cbox.checked)
		{
			var input = document.createElement("input");
			input.type = "text";
			var div = document.createElement("div");
			div.id = cbox.name;
			div.innerHTML = "Enter " + cbox.name;
			div.appendChild(input);
			document.getElementById("insertinputs").appendChild(div);
		}
		else 
		{
			document.getElementById(cbox.name).remove();
		}
	}	
	function rollnumfill() 
	{
		yoj = document.getElementById('regnum').value;
		dept= document.getElementById('dept').value;
		rollnum = document.getElementById('rollnum');
		year = yoj.slice(2,4);
		rollnum.value = year + '/' + dept + '/';
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
	function ValidateDropdown()
	{
		var result = document.getElementById('dept').value;
		if (result == "0") 
		{
			document.getElementById('12').innerHTML ="Select a branch";
			document.getElementById('12').style.color = 'red';
			return false;
		}
		else
		{
			document.getElementById('12').innerHTML ="";
			return true;
		}
	}
	function ValidateDropdown1() 	
	{
		var result = document.getElementById('year').value;
		if (result == "0") 
		{
			document.getElementById('13').innerHTML ="Select a year";
			document.getElementById('13').style.color = 'red';
			return false;
		}
		else
		{
			document.getElementById('13').innerHTML ="";
			return true;
		}
	}
	function ValidateDropdown2() 
	{
		var result = document.getElementById('cat').value;	
		if (result == "0") 
		{
			document.getElementById('11').innerHTML ="Select a Category";
			document.getElementById('11').style.color = 'red';
			return false;
		}
		else
		{
			document.getElementById('11').innerHTML ="";
			return true;
		}
	}
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
		var result = document.getElementById('midname');	
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
	function inputAlphabet3()
	{
		var result = document.getElementById('last');	
		var alphaExp = /^[a-zA-Z]+$/;
		if(result.value!="")
		{
			if (!result.value.match(alphaExp)) 
			{
				document.getElementById('3').innerHTML ="invalid name, only alphabets allowed"; 
				document.getElementById('3').style.color = 'red';
				return false;
			}
			else
			{
				document.getElementById('3').innerHTML ="";  
				return true;
			}
		}
		else
		{
			document.getElementById('3').innerHTML ="This field can't be blank"; 
			document.getElementById('3').style.color = 'red';
		}
	}
	function inputAlphabet4() 
	{
		var result = document.getElementById('gname');	
		var alphaExp = /^[a-zA-Z]+$+" "/;
		if(result.value!="")
		{
			if (!result.value.match(alphaExp)) 
			{
				document.getElementById('4').innerHTML ="invalid name, only alphabets allowed"; 
				document.getElementById('4').style.color = 'red';
				return false;
			}
			else
			{
				document.getElementById('4').innerHTML ="";  
				return true;
			}
		}
		else
		{
			document.getElementById('4').innerHTML ="This field can't be blank"; 
			document.getElementById('4').style.color = 'red';
		}
	}

</script>

<link rel="stylesheet" type="text/css" href="newstyle.css">
</head>
<body b>
<div id="logo">
<h1><center>STUDENT REGISTRATION </center></h1>
</div>
<hr />
<div class="topnav" id="myTopnav">
<a href="home.html" class="active">Home</a>
<a href="loginStudent.php">Login</a>
<a href="classroutine.html">Class Routine</a>
<a href="faq.html">About</a>
</div>
<br />
<div class="abc">
<form action="validation.php" method="POST" name="myForm" id="myForm" enctype="multipart/form-data">
<div class="formfield" id="myform">
<fieldset>
<legend><b>FILL IN YOUR DETAILS<b></legend>
<ul>
<div class="first">
<div id="username_div">
<p>
<label for="name">First Name:<sup>*</sup></label>
<input type="text" placeholder="Enter your First Name" name="first" id="first" onblur="inputAlphabet1(value)" onfocus="fnclear('first','1')" size="25" maxlength="25" />
	<div id="1" value=""></div>
</p>
</div>
<p>
<label for="mid">Middle Name:</label>
<input type="text" placeholder="Enter your Middle Name" name="midname" id="midname" onblur="inputAlphabet2(value)" onfocus="fnclear('midname','2')" maxlength="25" size="25"/>
	<div id="2" value=""></div>
</p>
<p>
<label for="last">Last Name:<sup>*</sup></label>
	<input type="text" id="last" placeholder="Enter your Last Name" name="last" onblur="inputAlphabet3(value)" onfocus="fnclear('last','3')" size="25" maxlength="25" />
	<div id="3" value=""></div>
</p>
<p>
<label for="last">Guardian's Name:<sup>*</sup></label>
	<input type="text" id="gname" placeholder="Enter your Guardian's Name" name="gname" size="25" onblur="inputAlphabet4(value)" onfocus="fnclear('gname','4')" maxlength="25" />
	<div id="4"></div>
</p>
<p>
<label for="address">Present Address:<sup>*</sup></label>
<input type="text" placeholder="Enter your present address" name="PrAddress" id="PrAddress" onblur="fnnumbervalidate('PrAddress','5')" maxlength="25" size="25"/>
	<div id="5"></div>
</p>
<p>
<label for="address">Permanent Address:<sup>*</sup></label>
<input type="text" placeholder="Enter your permanent address" name="PaAddress" id="PaAddress" onblur="fnnumbervalidate('PaAddress','6')"  maxlength="25" size="25"/>
	<div id="6"></div>
</p>
<p>
<label for="address">Cellular No.: <sup>*</sup></label>
<input type="text" placeholder="**********" name="phone" id="cell" onblur="phonev('cell','7')" maxlength="10" size="25"/>
	<div id="7"></div>
</p>
<p>
<label for="mail">E-mail:<sup>*</sup></label>
<input type="text" name="email" id="email" onfocus="fnclear('username','8')" onblur="validateEmail(value)" maxlength="25" size="25"/>
	<div id="8"></div>
</p>
<p>
<label for="mid">Date Of Birth:<sup>*</sup></label>
<input type="date" name="dob" maxlength="25" size="25"/>
	<div id="9"></div>
</p>
</div>
<p><span class="title">Gender:<sup>*</sup></span>
	<input type="radio" name="gender" value="male" checked="checked" /> Male
	<input type="radio" name="gender" value="female" />Female
	<div id="10"></div>
</p>
<p>Category:<sup>*</sup>
<select name="cat" id="cat" onblur="ValidateDropdown2()">
<option value="0">--SELECT A CATEGORY--</option>
<option value="GEN">General</option>
<option value="SC">Scheduled Caste</option>
<option value="ST">Scheduled Tribe</option>
<option value="OBC">Other Backward Class</option>
<option value="PWD">Person with Disability</option>
</select>
<div id="11"></div>
</p>
<p>Department:<sup>*</sup>
<select name="dept" id="dept" onblur="ValidateDropdown()">
<option value="0">--SELECT A BRANCH--</option>
<option value="CSE">COMPUTER SCIENCE AND ENGINEERING</option>
<option value="IT">INFORMATION TECHNOLOGY</option>
<option value="EE">ELECTRICAL ENGINEERING</option>
<option value="BT">BIOTECHNOLOGY ENGINEERING</option>
<option value="CE">CIVIL ENGINEERING</option>
<option value="CH">CHEMICAL ENGINEERING</option>
<option value="MME">METALLURGY AND MATERIALS ENGINEERING</option>
<option value="ECE">ELECTRONICS AND COMMUNICATION ENGINEERING</option>
<option value="ME">MECHANICAL ENGINEERING</option>
</select>
<div id="12"></div>
</p>
<p>Year:<sup>*</sup>
<select name="year" id="year" onblur="ValidateDropdown1()">
<option value="0">--SELECT A YEAR--</option>
<option value="first year">First Year</option>
<option value="second year">Second Year</option>
<option value="third year">Third Year</option>
<option value="final year">Final Year</option>
</select>
<div id="13"></div>
</p>
<tr>
	<td>Registration No:<sup>*</sup></td>
		<input class="form-inp2" type="number" id="regnum" name="regnum" placeholder="20******" onfocus="regnumfill();">
		<div id="14"></div>
</tr>
<tr>
<br />
<br />
<td>Roll No.<sup>*</sup></td>
	<input class="form-inp2" type="text" id="rollnum" placeholder="15/IT/**" onfocus="rollnumfill();">
	<div id="15"></div>
</tr>
<p>Upload your profile photo:
	<input type="file" name="file" /><br />
	<div id="16"></div>
</p>
<hr/>
<h2>EDUCATIONAL QUALIFICATIONS:</h2>
<table style="width:100%">
<tr>
<th rowspan="2">Examination</th>
<th rowspan="2">Board/Institution</th>
<th colspan="3">Marks</th>
</tr>
<tr>
<td>Obtained</td>
	<td>Out of</td>
	<td>Percentage % OR CG</td>
</tr>	
<tr>
<td>10th Standard</td>
<td><input type="text" placeholder="Enter the name of school or board" name="10th" id="10th" maxlength="50" size="50"/></td>
<td><input type="number" name="10th" id="10th" maxlength="25" size="25" /></td>
	<td><input type="number" name="10th" id="10th" maxlength="25" size="25"/></td>
	<td><input type="number" name="10th" id="10th" maxlength="25" size="25" /></td>
</tr>
<tr>
<td>12th Standard</td>
<td><input type="text" placeholder="Enter the name of school or board" name="10th" id="10th" maxlength="50" size="50"/></td>
<td><input type="number" name="10th" id="10th" maxlength="25" size="25"/></td>
	<td><input type="number" name="10th" id="10th" maxlength="25" size="25"/></td>
	<td><input type="number" name="10th" id="10th" maxlength="25" size="25"/></td>
</tr>
</table>
<hr/>
<table style="width:30%">

<tr>
<th>Semester</th>
<th>SG</th>
	<th>CG</th>
</tr>

<tr>	
<td>1st Semester</td>
	<td><input type="text" name="10th" id="10th" maxlength="25" size="10"/></td>
	<td><input type="text" name="10th" id="10th" maxlength="25" size="10"/></td>
</tr>

<tr>	
<td>2nd Semester</td>
	<td><input type="text" name="10th" id="10th" maxlength="25" size="10"/></td>
	<td><input type="text" name="10th" id="10th" maxlength="25" size="10"/></td>
</tr>

<tr>	
<td>3rd Semester</td>
	<td><input type="text" name="10th" id="10th" maxlength="25" size="10"/></td>
	<td><input type="text" name="10th" id="10th" maxlength="25" size="10"/></td>
</tr>

<tr>	
<td>4th Semester</td>
	<td><input type="text" name="10th" id="10th" maxlength="25" size="10"/></td>
	<td><input type="text" name="10th" id="10th" maxlength="25" size="10"/></td>
</tr>

<tr>	
<td>5th Semester</td>
	<td><input type="text" name="10th" id="10th" maxlength="25" size="10"/></td>
	<td><input type="text" name="10th" id="10th" maxlength="25" size="10"/></td>
</tr>

<tr>	
<td>6th Semester</td>
	<td><input type="text" name="10th" id="10th" maxlength="25" size="10"/></td>
	<td><input type="text" name="10th" id="10th" maxlength="25" size="10"/></td>
</tr>

<tr>	
<td>7th Semester</td>
	<td><input type="text" name="10th" id="10th" maxlength="25" size="10"/></td>
	<td><input type="text" name="10th" id="10th" maxlength="25" size="10"/></td>
</tr>

<tr>	
<td>8th Semester</td>
	<td><input type="text" name="10th" id="10th" maxlength="25" size="10"/></td>
	<td><input type="text" name="10th" id="10th" maxlength="25" size="10"/></td>	
</tr>

</table>
<hr/>
<p><h3>HOBBIES AND EXTRACURRICULAR ACTIVITIES:</h3>
	<input type="checkbox" name="hobby" value="sports">Sports<br>
	<input type="checkbox" name="hobby" value="music">Music<br>
	<input type="checkbox" name="hobby" value="dance">Dance<br>
	<input type="checkbox" name="hobby" value="read">Reading<br>
	<input type="checkbox" name="hobby" value="debate">Quiz & Debate<br>
	<input type="checkbox" name="hobby" value="otherhobby" onclick= "dynInput(this);">Other<br>
<p id="insertinputs"></p>
<hr/>
</p>
<div class="info">
<p>
<label for="pass">Username:<sup>*</sup></label>
<input type="text" name="username" id="username" onblur="fnnumbervalidate('username','17')" maxlength="25" size="25"/>
	<div id="17"></div>
</p>
<p>
<label for="pass">Password:<sup>*</sup></label>
<input type="password" name="password" id="password" onkeyup='check();' maxlength="25" size="25"/>
	<div id="18"></div>
</p>
<p>
<label for="repass">Confirm Password: <sup>*</sup></label>
	<input type="password" name="cpassword" id="cpassword" onkeyup='check();' maxlength="25" size="25" />
	<div id='message'></div>
	<div id="19"></div>
</p>

</p>
</div>
</fieldset>
</div>
<br />
<center>
<center><input type="submit" name="submit" id="submit" value="REGISTER"  onclick="fnallvalid()" class="sub"></center>
</center>
</div>
</p>
</form>
</body>
</html>
