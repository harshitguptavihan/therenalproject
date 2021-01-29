<?php 
 session_start();

 if(!(isset($_SESSION['email'])&&isset($_SESSION['password'])&&isset($_SESSION['admin'])))
	 header("Location:index.php");

?>
<?php 
//session_start();
//if(!(isset($_SESSION['email'])&&isset($_SESSION['password'])))
//	header("Location:index.php");
$branchname=$_POST['branchname'];
$amt=$_POST['amt'];

$p=rand(999,9999);
	$branchID="BRNCH".$p;
$t=0;

$con=mysqli_connect('localhost','root');
if(!$con)
	echo"Connection Failed";
mysqli_select_db($con,"therenalproject");
function  genrate()
{
	
	$t=1;
	$p=rand(999,9999);
	$branchID="BRNCH".$p;
	$q="select * from `branch` where  `BranchID`='$branchID' ";
$res=mysqli_query($con,$q);
$row=mysqli_fetch_array($res);
if(mysqli_num_rows($res)>=1)
{
	genrate();
}
return $t;
}


$t=genrate();










$q="select * from `branch` where  `BranchName`='$branchname' ";
$res=mysqli_query($con,$q);
$row=mysqli_fetch_array($res);
if(mysqli_num_rows($res)>=1)
{
	?>
<script>
alert("email is already added ! ");
window.location="branch.php";
</script>
<?php
}
else {
$querry="insert into `branch` (`BranchID`,`Branchname`,`AmountPerPatient`)values('$branchID','$branchname','$amt')";
$result=mysqli_query($con,$querry);
?>
<script>
alert("branch is Created");
window.location="branch.php";
</script>
<?php
}
?>