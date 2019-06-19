<?php
$conn=mysqli_connect("localhost","root","","student");
if(isset($_POST['Reject']))
{
	list($value1,$value3) = explode('|', $_POST['Reject']);
$sql ="INSERT INTO rejectedusers SELECT * FROM students where id='$value3'";
$sql1="DELETE FROM students where id='$value3'";
if(!mysqli_query($conn,$sql)){
	echo "<script>
alert('something went wrong please recheck the data!');
window.location.href='registrationreq.php';
</script>";
}				  
else{
echo "<script>
alert('Account Rejected.Please continue');
window.location.href='registrationreq.php';
</script>";
}
if(!mysqli_query($conn,$sql1)){
	echo "<script>
alert('something went wrong please recheck the data!');
window.location.href='registrationreq.php';
</script>";
}				  
else{
echo "<script>
alert('Account Rejected.Please continue');
window.location.href='registrationreq.php';
</script>";
}

}

if(isset($_POST['Accept']))
{
list($value1,$value2) = explode('|', $_POST['Accept']);
$sql ="INSERT INTO activeusers SELECT * FROM students where id='$value2'";
$sql1="DELETE FROM students where id='$value2'";
if(!mysqli_query($conn,$sql)){
	echo "<script>
alert('something went wrong please recheck the data!');
window.location.href='registrationreq.php';
</script>";
}				  
else{
echo "<script>
alert('Successfully Approved. Please approve another');
window.location.href='registrationreq.php';
</script>";
}

if(!mysqli_query($conn,$sql1)){
	echo "<script>
alert('something went wrong please recheck the data!');
window.location.href='registrationreq.php';
</script>";
}				  
else{
echo "<script>
alert('Successfully Approved. Please approve another');
window.location.href='registrationreq.php';
</script>";
}
}
if(isset($_POST['View']))
{
	list($value1,$value4) = explode('|', $_POST['View']);
    $sql ="SELECT * FROM students where id='$value4'";
$result = $conn->query($sql);

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
}
?>