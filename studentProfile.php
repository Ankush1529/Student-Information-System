 <!doctype html>
<html>
<head>
<title>sign up page for students </title>
<style type="text/css">
h1 
{
    font-style: oblique;
}
table, th, td 
{
    border: 1px solid black;
}
body{
background-image: url("imagess.jpg");
background-color:#ccccff;
}
.formfield 
{
  overflow: hidden;
  background-color: #ddd;
}
.topnav 
{
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
    background-color: #003399;
    color: white;
}
.sub{
    background-color: #003399;
    border: none;
    color:white;
    padding: 16px 32px;
    text-decoration: none;
    text-decoration-color: black;
    margin: 4px 2px;
    cursor: pointer;
}

.sub:hover {
    background-color:blueviolet;
    color: black;
}

.info label
{
    float: left;
    width: 150px;
}
.first label
{
    float: left;
    width: 150px;
}
.pic
{
    float:right;
}
</style>

</head>
<body>
<div id="logo">
 <h1><center>Welcome to your profile!</center> </h1>
 </div>
 <hr />
 <div class="topnav" id="myTopnav">
  <a href="department.html" class="active">Departments</a>
  <a href="classroutine.html">Class Routine</a>
</div>
<br />
<div class="abc">
<form name="myForm" action="" onsubmit="return validateForm()" method="post">
<div class="formfield" id="myform">
<table class="table3" id="wait" style="display: block;">
			
					
<?php
//include auth.php file on all secure pages
require("authstudent.php");
require('dbstudent.php');
$sql = "SELECT * FROM activeusers where username='".($_SESSION["username"])."'";
$result = $con->query($sql);

if ($result->num_rows==1) {
    // output data of each row
    while($row = $result->fetch_assoc()) { 
	                              if($row['image'] == ""){
                                        echo "<img style='padding-left:40px;'width='200' height='200' src='pictures/default.jpg' alt='Default Profile Pic'>";
                                } else {
                                        echo "<img style='padding-left:40px;'width='200' height='200' src='pictures/".$row['image']."' alt='Profile Pic'>";
                                }
	                             $email = $row['email'];
								 $birth = $row['dob'];
								 //$rollNum = $row['rollno'];
								 $regisnum=$row['regnum'];
								 $dept = $row['department'];
								 $year = $row['year'];
								 $phone = $row['cellnum'];
								 $paddress = $row['praddress'];
		                         $firstname = $row['firstname'];
								 $lastname = $row['lastname'];
								
								  echo "<h3 style='padding-left:40px;text-align: left;'><strong style='color:#black;font-size:20px;'>Name: $firstname\t$lastname</strong><h3>
								  		<h3 style='padding-left:40px;text-align: left;'><strong style='color:#black;font-size:20px;'>Email Id: $email</strong><h3>
								  		<h3 style='padding-left:40px;text-align: left;'><strong style='color:#black;font-size:20px;'>Roll No: $regisnum</strong><h3>
								  		<h3 style='padding-left:40px;text-align: left;'><strong style='color:#black;font-size:20px;'>Date Of Birth :$birth</strong><h3>
										<h3 style='padding-left:40px;text-align: left;'><strong style='color:#black;font-size:20px;'>Year: $year</strong><h3>
										<h3 style='padding-left:40px;text-align: left;'><strong style='color:#black;font-size:20px;'>Phone number  :$phone</strong><h3>
								  		<h3 style='padding-left:40px;text-align: left;'><strong style='color:#black;font-size:20px;'>Address       :$paddress</strong><h3>
								  		<h3 style='padding-left:40px;text-align: left;'><strong style='color:#black;font-size:20px;'>Department    : $dept</strong><h3>";
    }                 
	                                    
	
} 
 else {
    echo "Wait till your request is accepted";
}
?>
</table>
</div>
</div>
<br />
<a href="logoutStudent.php"><button type="button">Logout</button></a>&nbsp <a href="editprofile.php"><button type="button">Edit Profile</button></a>
</body>
</html>
