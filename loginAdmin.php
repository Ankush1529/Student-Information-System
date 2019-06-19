
<!DOCTYPE html>
<html>
<head>
    <script>
        function validateForm()
        {  
            var name=document.myForm.name.value;  
            var password=document.myForm.password.value;  
            if (name==null || name=="")
            {  
                alert("Name can't be blank");  
                return false;  
            }
            else if(password.length<6)
            {  
                alert("Password must be at least 6 characters long.");  
                return false;  
            }  
        } 
 window.history.forward();
	function noBack() { window.history.forward(); }			
    </script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

input[type=text], input[type=password] 
{
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    box-sizing: border-box;
}

.button 
{
  border: none;
  outline: 0;
  display: inline-block;
  padding: 20px;
  color: white;
  background-color: #00264d;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 15px;
}

.button:hover 
{
    opacity: 0.8;
}

.cancelbtn 
{
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}
.avatar 
{
    height: 10 px;
    width: 80 px;
    padding:0px 490px;
    margin-top:-20px;
}

.container 
{
    padding:0px 530px;
    width: 18%;
}
.page_footer
{
    text-align: center;
}
span.psw {
    float: right;
    padding-top: 16px;
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

<body onload="noBack();" 
	onpageshow="if (event.persisted) noBack();" onunload="">
<img class="background" src="imagess.jpg" alt="Pineapple" width="275" height="275">
<div class="header">
  <h1 style="color:#00284d;"> ADMIN LOGIN</h1>
</div>
<?php
require('db.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($con,$username);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE username='$username'
and password='".($password)."'";
	$result = mysqli_query($con,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
        if($rows==1){
	    $_SESSION['username'] = $username;
            // Redirect user to index.php
	    header("Location: admin.php");
         }else{
	echo "<div class='form'>
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='loginAdmin.php'>Login</a></div>";
	}
    }else{
?>
<div class="topnav" id="myTopnav">
  <a href="home.html" class="active">Home</a>
  <a href="#contact">Contact</a>
  <a href="faq.html">About</a>
</div>
<br/>

    <form action="" method="post" name="login">
            <img src="NIT_Durgapur_Logo.png" alt="NIT_Durgapur_Logo" class="avatar" align="CENTER" width="300" height="300">
            
            <div class="container">
                <label><b>Username</b></label>
                <input name="username" type="text" placeholder="Enter your USERNAME" name="name">

                <label><b>Password</b></label>
                <input name="password" type="password" placeholder="Enter Password" name="password">
                   <!--<a href="admin.html">-->
					 <input name="submit" type="submit" class="button" value="Login" />
	 </a>
  <br/>  
                
			<HR/>
            </div>
            <div class="container" style="background-color:#f1f1f1">
                <button type="button" class="cancelbtn">Cancel</button>
                <span class="psw">Forgot <a href="#">password?</a></span>
            </div>
            </form>
			<?php } ?>
</body>
</html>
