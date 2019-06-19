<?php
$host="localhost";
$dbuser="root";
$pass="";
$dbname="student";
$conn=mysqli_connect($host,$dbuser,$pass,$dbname);
if(mysqli_connect_errno())
{
	die("connection failed!");
}
?>
<html>
<head>
<title>sign up page </title>
</head>
<body>
<?php 
function newuser()
{
	$host="localhost";
$dbuser="root";
$pass="";
$dbname="student";
$conn=mysqli_connect($host,$dbuser,$pass,$dbname);
if(mysqli_connect_errno())
{
	die("connection failed!");
}
if(isset($_POST['submit']))
{
	move_uploaded_file($_FILES['file']['tmp_name'],"pictures/".$_FILES['file']['name']);
	$conn=mysqli_connect($host,$dbuser,$pass,$dbname);
	$first=$_POST['first'];
	$last=$_POST['last'];
	$email=$_POST['email'];
	$gname=$_POST['gname'];
	$year=$_POST['year'];
	$praddress=$_POST['PrAddress'];
	$dob=$_POST['dob'];
	$gender=$_POST['gender'];
	$password=$_POST['password'];
	$cellnum=$_POST['phone'];
	$department=$_POST['dept'];
	$category=$_POST['cat'];
	$regnum=$_POST['regnum'];
	$username=$_POST['username'];
	$image=$_FILES['file']['name'];
	if(!empty($first)&&!empty($last)&&!empty($email)&&!empty($praddress)&&!empty($gender)&&!empty($dob)&&!empty($password))
	{
		$sql="INSERT INTO students(username,email,password,department,firstname,lastname,regnum,gname,praddress,cellnum,gender,category,year,dob,image) VALUES('$username','$email','$password','$department','$first','$last','$regnum','$gname','$praddress','$cellnum','$gender','$category','$year','$dob','$image')";
		$res=mysqli_query($conn,$sql);
		if(!$res)
		{
			die("query failed".mysqli_error($conn));
		}
		else
		{
			echo "<h3>Data inserted successfully!</h3>
			      <br/> click here to <a href='loginStudent.php'>login</a>";
		}
	}
	else
	{
		echo "<div class='form'>
<h3>Fill up all mandatory fields </h3>
<br/>Click here to <a href='StudentRegistration - Copy.php'>Register Here</a></div>";
	}
}
}
function sign_up()
{
	$conn=mysqli_connect("localhost","root","","student");
	if(!empty($_POST['username']))
	{
		$query="select * from activeusers where username='$_POST[username]' and password='$_POST[password]'";
		$p=mysqli_query($conn,$query);
		if(! $p)
		{
			die('Error'.mysql_error());
		}
		if(!$row=mysqli_fetch_assoc($p))
		{
			newuser();
		}
		else
		{
			echo "SORRY...YOU ARE ALREADY REGISTERED USER...";
		}
	}
}
if(isset($_POST['submit']))
{
	sign_up();
}
?>