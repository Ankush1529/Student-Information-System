<!DOCTYPE html>
<html>
<head>
	<title>Student information system</title>
	<style>
	h1 
{
    font-style: oblique;
}
table, th, td 
{
    border: 1px solid black;
}
img.background 
{
    width: 100%;
    height: 30%;
    position: absolute;
    left: 0px;
    top: 0px;
    z-index: -1;
    -webkit-filter: blur(30px); 
    filter: blur(30px);
}
img.back
{
    width: 100%;
    height:100%;
    position: absolute;
    left: 0px;
    top: 0px;
    z-index: -2;
}
body 
{
    font-family: Arial, Helvetica, sans-serif;
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
</style>
</head>
<body>
<img class="background" src="imagess.jpg" alt="Pineapple" width="300" height="100">
<img class="back" src="imagess.jpg" alt="Pineapple" width="300" height="100">
	<div class="main">
		<div class="header">
		<h1><center>Registration Requests<center></h1>
		</div>
		<div class="topbut">
			<a href="logout.php"><button type="button">Logout</button></a>
		</div>
		<!-- <img id="back-img" src="backg.jpeg" /> -->
		<div >
		<div class="topnav" id="myTopnav">
  <a href="admin.php" class="active">AdminProfile</a>
  <a href="active.php">Active Users</a>
  <a href="reject.php">Rejected Users</a>
</div>
		<table class="table3" id="wait" style="display: block;">
			<tr><td colspan="9" style="text-align: center;font-size: 25px;font-weight: bolder;border: 1px solid black;background-color:#ddd ;border-radius: 5px;">Candidates to be approved</td></tr>
				<tr>
					<th>id</th>
					<th>firstname</th>
					<th>lastname</th>
					<th>email</th>
					<th>Gender</th>
					<th>MobileNo</th>
                    <th>Accept</th>
					<th>Reject</th>
					<th>View Profile</th>
				</tr>
				 
				<?php
				 
					$conn=mysqli_connect("localhost","root","","student");
					if($conn->connect_error)
					{
						die("Connection failed:".$conn->connect_error);
					}
					
					$sql="SELECT * from students LIMIT 8";
					$result=$conn->query($sql);

					if($result->num_rows >0)
					{
						while($row=$result->fetch_assoc())
						{$v=$row["id"];
							echo"<tr><td>".$row["id"],"</td><td>".$row["firstname"],"</td><td>".$row["lastname"],"</td><td>".$row["email"]."</td><td>".$row["gender"],"</td><td>".$row["cellnum"],"</td>";
							?>
							<form method="post" action="server.php" >
						<td> <input type="submit" value="Accept | <?php echo $v ?>" class="accept" name="Accept">  </td>
						<td><input type="submit" value="Reject | <?php echo $v ?>" class="reject" name="Reject">
						</td> 
						<td> <input type="submit" value="View | <?php echo $v ?>" class="View" name="View">  </td>
					</form>
					</tr>

					<?php

				
				
						}
				
					}
					else
					{
						echo "0 result";
					}
					$conn->close();
					
				?>
			</table>

	</div>
</body>
</html>