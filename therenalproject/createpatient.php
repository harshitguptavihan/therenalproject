<?php 
 session_start();

 if(!(isset($_SESSION['email'])&&isset($_SESSION['password'])&&isset($_SESSION['staff'])))
	 header("Location:index.php");

?>
<?php 
//session_start();
//if(!(isset($_SESSION['email'])&&isset($_SESSION['password'])))
//	header("Location:index.php");
$name=$_POST['name'];
$phone=$_POST['phone'];
$DOB=$_POST['DOB'];

$p=rand(999,9999);
	$PatientID="PTENT".$p;
$t=0;

$con=mysqli_connect('localhost','root');
if(!$con)
	echo"Connection Failed";
mysqli_select_db($con,"therenalproject");
function  genrate()
{
	
	$t=1;
	$p=rand(999,9999);
	$PatientID="PTENT".$p;
	$q="select * from `patient` where  `PatientID`='$PatientID' ";
$res=mysqli_query($con,$q);
$row=mysqli_fetch_array($res);
if(mysqli_num_rows($res)>=1)
{
	genrate();
}
return $t;
}


$t=genrate();








$querry="insert into `patient` (`PatientID`,`name`,`phone`,`DOB`)values('$PatientID','$name','$phone','$DOB')";
$result=mysqli_query($con,$querry);
?>
<script>
alert("Patient is Created");
window.location="stafflogin.php";
</script>
<?php

?>