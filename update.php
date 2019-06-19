<?php
require("authstudent.php");
require('dbstudent.php');
if(isset($_POST['submit'])){
	$first=$_POST['first'];
	$last=$_POST['last'];
	$email=$_POST['email'];
	$year=$_POST['year'];
	$praddress=$_POST['PrAddress'];
	$dob=$_POST['dob'];
	$password=$_POST['password'];
	$cellnum=$_POST['phone'];
	$image=$_FILES['file']['name'];
	$username=$_SESSION["username"];
	if(!empty($first)||!empty($last)||!empty($email)||!empty($praddress)||!empty($cellnum)||!empty($dob)||!empty($password)||!empty($image))
	{
    if(!empty($first))
	{
        $sql ="UPDATE activeusers SET firstname='$first' WHERE username='$username'";
        $res=mysqli_query($con,$sql);
        if(!$res){
            die("Failed to update database check query string or input values.".mysqli_error($con));
        }
    }
	if(!empty($last))
	{
        $sql ="UPDATE activeusers SET lastname='$last' WHERE username='$username'";
        $res=mysqli_query($con,$sql);
        if(!$res){
            die("Failed to update database check query string or input values.".mysqli_error($con));
        }
    }
	if(!empty($praddress))
	{
        $sql ="UPDATE activeusers SET praddress='$praddress' WHERE username='$username'";
        $res=mysqli_query($con,$sql);
        if(!$res){
            die("Failed to update database check query string or input values.".mysqli_error($con));
        }
    }
	if(!empty($cellnum))
	{
        $sql ="UPDATE activeusers SET cellnum='$cellnum' WHERE username='$username'";
        $res=mysqli_query($con,$sql);
        if(!$res){
            die("Failed to update database check query string or input values.".mysqli_error($con));
        }
    }
	if(!empty($year))
	{
        $sql ="UPDATE activeusers SET year='$year' WHERE username='$username'";
        $res=mysqli_query($con,$sql);
        if(!$res){
            die("Failed to update database check query string or input values.".mysqli_error($con));
        }
    }
	if(!empty($image))
	{
		move_uploaded_file($_FILES['file']['tmp_name'],"C:\wamp64\www\pictures/".$_FILES['file']['name']);
        $sql ="UPDATE activeusers SET image='$image' WHERE username='$username'";
        $res=mysqli_query($con,$sql);
        if(!$res){
            die("Failed to update database check query string or input values.".mysqli_error($con));
        }
    }
	if(!empty($dob))
	{
        $sql ="UPDATE activeusers SET dob='$dob' WHERE username='$username'";
        $res=mysqli_query($con,$sql);
        if(!$res){
            die("Failed to update database check query string or input values.".mysqli_error($con));
        }
    }
	if(!empty($email))
	{
        $sql ="UPDATE activeusers SET email='$email' WHERE username='$username'";
        $res=mysqli_query($con,$sql);
        if(!$res){
            die("Failed to update database check query string or input values.".mysqli_error($con));
        }
    }
	if(!empty($password))
	{
        $sql ="UPDATE activeusers SET password='$password' WHERE username='$username'";
        $res=mysqli_query($con,$sql);
        if(!$res){
            die("Failed to update database check query string or input values.".mysqli_error($con));
        }
    }
	
        header("Location:studentProfile.php");
        exit;
	}
	else{
        //Create Empty Error Message
        $error = "Error! No Changes Made";
		echo $error;
    }
}
?>