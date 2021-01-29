<?php 
 session_start();

 if(!(isset($_SESSION['email'])&&isset($_SESSION['password'])&&isset($_SESSION['doctor'])))
	 header("Location:index.php");

?>



<?php
$a=array();
$b=array();
$dataPoints = array();
$con=mysqli_connect('localhost','root');
if(!$con)
	echo"Connection Failed";
mysqli_select_db($con,'therenalproject');
$qfp="SELECT Time,count(Time) Num FROM `patient` Group By Time";
$rfp=mysqli_query($con,$qfp);
$TotalSet=mysqli_num_rows($rfp); 
for($j=1;$j<=$TotalSet;$j++){
  $Row=mysqli_fetch_array($rfp);
  array_push($a,$Row['Time']);
  array_push($b,$Row['Num']);
 
  array_push($dataPoints,array("y" => $Row['Num'], "label" =>$Row['Time']));
  

}



 
?>
<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	title: {
		text: "Doctor's Graph"
	},
	axisY: {
		title: "Number of Patient"
	},
	data: [{
		type: "line",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
<head>

<link rel="stylesheet" href="css\animate.css">
<link rel="stylesheet" href="css\bootstrap.css">
<link rel="stylesheet" href="css\font-awesome.css">

<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
	<style>
	
	</style>
	
<script>


	//function myFunction() {
		//document.write("sjfbjdhdj");
  // Get the checkbox
  //var checkBox = document.getElementById("myCheck");
  // Get the output text
  //var text = document.getElementById(text);

  // If the checkbox is checked, display the output text
  //if (checkBox.checked == true){
	  //document.write("sjfbjdhdj");
    //text.type = "text";
  //} else {
  //  text.type = "password";
  //}
//}
	</script>
	
		

</head>
</head>
<body>
<div class="navbar " style="background-color:white">

<!-- header -->

<div class="navbar-header" stylesheet="background-color:black">
<!-- brand -->
<div class="navbar-brand" style="position:relative;top:-10px;"><span>
<a  class="logo" href="index.php" style=><img src="photo/logo.png" class="img img-responsive" style="position:relative;bottom:10px;margin-top:-5px;"></a></span>
</div>
<!-- End brand -->
<!-- collapse for responsive -->
<button class="navbar-toggle"style="position:relative;top:10px" data-toggle="collapse" data-target=".navbar-collapse">
<span class="icon-bar" style="background-color:white"></span>
<span class="icon-bar" style="background-color:white"></span>
<span class="icon-bar" style="background-color:white"></span>

</button>
<!-- collapse for responsive -->
</div>
<!-- end header -->
	
	
<!-- collapse menu -->

<div class="navbar-collapse collapse animated slideInLeft" style="font-size:23px;color:white" >

    <ul class="nav navbar-nav">
      <li><a href="doctorlogin.php">Doctor Dashboard</a></li>
      
      
    <!/ul>
	<!ul class="nav navbar-nav navbar-right">
	      <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Log out</a></li>
    </ul>
	</div>
	<!-- clse Collapse -->
  </div>
</div>

  
  
<!-- NAVEBAR END -->

<div id="chartContainer" style="margin:100px;height: 370px; width: 70%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html> 