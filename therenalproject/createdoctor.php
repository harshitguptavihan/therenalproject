<?php 
 session_start();

 if(!(isset($_SESSION['email'])&&isset($_SESSION['password'])&&isset($_SESSION['admin'])))
	 header("Location:index.php");

?>
<?php 
//session_start();
//if(!(isset($_SESSION['email'])&&isset($_SESSION['password'])))
//	header("Location:index.php");
$email=$_POST['email'];
$username=$_POST['username'];
$password=$_POST['password'];
$phone=$_POST['phone'];
$p=rand(999,9999);
	$DoctorID="DCTR".$p;
$t=0;

$con=mysqli_connect('localhost','root');
if(!$con)
	echo"Connection Failed";
mysqli_select_db($con,"therenalproject");
function  genrate()
{
	
	$t=1;
	$p=rand(999,9999);
	$DoctorID="DCTR".$p;
	$q="select * from `doctor` where  `DoctorID`='$DoctorID' ";
$res=mysqli_query($con,$q);
$row=mysqli_fetch_array($res);
if(mysqli_num_rows($res)>=1)
{
	genrate();
}
return $t;
}


$t=genrate();










$q="select * from `doctor` where  `email`='$email' ";
$res=mysqli_query($con,$q);
$row=mysqli_fetch_array($res);
if(mysqli_num_rows($res)>=1)
{
	?>
<script>
alert("email is already added ! ");
window.location="doctor.php";
</script>
<?php
}
else {
$querry="insert into `doctor` (`DoctorID`,`username`,`email`,`password`,`phone`)values('$DoctorID','$username','$email','$password','$phone')";
$result=mysqli_query($con,$querry);
?>
<script>
alert("doctor is Created");
window.location="doctor.php";
</script>
<?php
}
?>