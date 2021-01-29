<?php 
 session_start();

 if(!(isset($_SESSION['email'])&&isset($_SESSION['password'])&&isset($_SESSION['admin'])))
	 header("Location:index.php");

?>
<?php 

$email=$_POST['email'];
$username=$_POST['username'];
$password=$_POST['password'];
$phone=$_POST['phone'];
$p=rand(999,9999);
	$AdminID="ADMN".$p;
$t=0;

$con=mysqli_connect('localhost','root');
if(!$con)
	echo"Connection Failed";
mysqli_select_db($con,"therenalproject");
function  genrate()
{
	
	$t=1;
	$p=rand(999,9999);
	$AdminID="ADMN".$p;
	$q="select * from `admin` where  `AdminID`='$AdminID' ";
$res=mysqli_query($con,$q);
$row=mysqli_fetch_array($res);
if(mysqli_num_rows($res)>=1)
{
	genrate();
}
return $t;
}


$t=genrate();










$q="select * from `admin` where  `email`='$email' ";
$res=mysqli_query($con,$q);
$row=mysqli_fetch_array($res);
if(mysqli_num_rows($res)>=1)
{
	?>
<script>
alert("email is already added ! ");
window.location="admin.php";
</script>
<?php
}
else {
$querry="insert into `admin` (`AdminID`,`username`,`email`,`password`,`phone`)values('$AdminID','$username','$email','$password','$phone')";
$result=mysqli_query($con,$querry);
?>
<script>
alert("Admin is Created");
window.location="admin.php";
</script>
<?php
}
?>