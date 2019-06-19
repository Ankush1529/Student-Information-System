<?php
//include auth.php file on all secure pages
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<style>
.card 
{
  max-width: 500px;
  margin: auto;
  text-align: center;
  font-family: arial;
  background-color:transparent;
}
button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 20px;
  color: white;
  background-color: #00264d;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
img.background 
{
    width: 100%;
    height:100%;
    position: absolute;
    left: 0px;
    top: 0px;
    z-index: -1;
    -webkit-filter: blur(20px); 
    filter: blur(20px);
}
body {
    font-family: Arial, Helvetica, sans-serif;
	
}
.footer {
    background-color:#333;
    padding:10px;
    text-align: center;
	color:white;
    position: relative;
    left: 0;
    bottom: 0;
    width: 100%;
}
.header {
    background-color: transparent;
    padding:5px;
    text-align: center;
    font-size: 25px;
}
.topnav {
  overflow: hidden;
  background-color: #00284d;
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
    background-color:#cce6ff;
    color: #00284d;
}
</style>
</head>
<body>
<img class="background" src="imagess.jpg" alt="Pineapple" width="300" height="300">
<div class="header">
  <h1 style="color:#00284d;"> Welcome <?php echo $_SESSION['username']; ?>!</h1>
</div>
<div class="topnav" id="myTopnav">
  <a href="home.html" class="active">Home</a>
  <a href="department.html">Departments</a>
</div>
<br />
<div class="card">
  <img src="NIT_Durgapur_Logo.png" alt="NITD LOGO" style="width:50%">
  <h1>WELCOME ADMIN</h1>
   <div style="margin: 32px 0;" height="70px">
 </div>
  <p><a href="registrationreq.php"><button>STUDENT REGISTRATION REQUESTS</button></a></p>
 <p><a href="active.php"><button>ACTIVE USERS</button></a></p>
 <p><a href="reject.php"><button>REJECTED USERS</button></a></p>
 <p><a href="logout.php">Logout</a></p>
</div>
 </body>
</html>
