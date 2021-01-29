<?php 
 session_start();

 if(!(isset($_SESSION['email'])&&isset($_SESSION['password'])&&isset($_SESSION['staff'])))
	 header("Location:index.php");

?>


<!DOCTYPE html>
<html>
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
<body>

<div >
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
      <li><a href="stafflogin.php">Staff Dashboard</a></li>
      
      
    <!/ul>
	<!ul class="nav navbar-nav navbar-right">
	      <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Log out</a></li>
    </ul>
	</div>
	<!-- clse Collapse -->
  </div>
</div>

  
  
<!-- NAVEBAR END -->




<br>
<br>

 <!-- Trigger the modal with a button -->
  <button type="button" class="col-sm-offset-1 btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Register Patient</button>
<br>
<br>
<br>
<br>
<div class="container">
  
  <table class="table">
    <thead>
      <tr>
        <th>PatientID</th>
        <th>Name</th>
        <th>Contact Number</th>
        <th>Date Of Birth</th>
       
        
      </tr>
    </thead>
	
	<?php
$con=mysqli_connect('localhost','root');
if(!$con)
	echo"Connection Failed";
mysqli_select_db($con,'therenalproject');
$qfp="select * from `patient`";
$rfp=mysqli_query($con,$qfp);
$TotalSet=mysqli_num_rows($rfp); 
for($j=1;$j<=$TotalSet;$j++){
  $Row=mysqli_fetch_array($rfp);

 
?>

	
	
	

	<script>
	function myFunction()
	{
		
	var t = document.getElementById(t).value;
		
	//text.value="jkbjbk";
	//
	document.write("ggi"+t);
	if (text.type == "password"){
	  document.write("text");
    text.type = "text";
  } else {
    text.type = "password";
  }
	
	}
	</script>
	
	
	
	
	
	
    <tbody>
      <tr>
        <td><?php echo $Row['PatientID'];?></td>
        <td><?php echo $Row['name'];?></td>
        <td><?php echo $Row['phone'];?></td>
        
        <td><?php echo $Row['DOB'];?></td>
      </tr>      

    </tbody>
	
<?php } ?>
  </table>
</div>

</body>

















<div class="container">
  
 

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
       <center>   <h4 class="modal-title">Register New Patient</h4></center>
        </div>
        <div class="modal-body">
          <div class="container">
  
  <form action="createpatient.php" method="POST">
  <div class="row">
  <div class="form-group col-sm-6">
      <label for="username">Name:</label>
      <input type="text" class="form-control" id="username" placeholder="Enter Username" name="name" required>
    </div>
	</div>
	
	<div class="row">
	<div class="form-group col-sm-6">
      <label for="phone">Contact Number:</label>
      <input type="number" class="form-control" id="phone" placeholder="Enter Contact Number" name="phone" required>
    </div>
	</div>
	<div class="row">
	<div class="form-group col-sm-6">
      <label for="dob">Date Of Birth:</label>
      <input type="date" class="form-control" id="dob" placeholder="Enter Contact Number" name="DOB" required>
    </div>
	</div>
    
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>



</body>
</html>