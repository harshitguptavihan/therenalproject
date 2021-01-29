
<?php 
session_start();
	
$email=$_POST['email'];
$password=$_POST['password']; 
//echo $email;
//echo "<br>";
//echo $password;
$con=mysqli_connect("localhost","root","","therenalproject");
$q="select * from `admin` where `email`='$email' && `password`='$password'";
$q1="select * from `staff` where `email`='$email' && `password`='$password'";
$q2="select * from `doctor` where `email`='$email' && `password`='$password'";
//echo "<br>".$q."<br>";
$query=mysqli_query($con,$q);
$row=mysqli_fetch_array($query);
if($email==$row['email']&&$password==$row['password'])
{
	$_SESSION['email']=$row['email'];
	$_SESSION['password']=$row['password'];
	$_SESSION['admin']="admin";
	$_SESSION['name']=$row['name'];
	header("Location:admin.php");
	
}


$query=mysqli_query($con,$q1);
$row=mysqli_fetch_array($query);
if($email==$row['email']&&$password==$row['password'])
{
	$_SESSION['email']=$row['email'];
	$_SESSION['password']=$row['password'];
	$_SESSION['name']=$row['name'];
	$_SESSION['staff']="staff";
	header("Location:stafflogin.php");
	
}


	$query=mysqli_query($con,$q2);
$row=mysqli_fetch_array($query);
if($email==$row['email']&&$password==$row['password'])
{
	$_SESSION['email']=$row['email'];
	$_SESSION['password']=$row['password'];
	$_SESSION['name']=$row['name'];
	$_SESSION['doctor']="doctor";
	header("Location:doctorlogin.php");
	
}


	?>
<script>
alert("username or password incorrect");
window.location="index.php";
</script>
