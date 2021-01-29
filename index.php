<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="css\animate.css">
<link rel="stylesheet" href="css\bootstrap.css">
<link rel="stylesheet" href="css\font-awesome.css">

<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>

<style>
input:invalid{
	color:red;
}
input,
input:valid{
	color:black;
}
</style>
</head>
<body>

<!-- Modal FOR SIGN START -->

<div class="col-sm-6 col-sm-offset-3">
  <div>
<br><br><br><br><br>
    <!-- Modal content-->
       <div class="modal-content" style="background-color:#E8E8E8;color:black;margin-top:-90px;">
	   <div class="modal-header">
           
		   <br>
           <h4 class="modal-title text-center" style="font-family:interstateregular;font-weight:bold;font-size:25px;">Login Please</h4>
        </div>
            <div class="modal-body">
	  
	  
	  <!-- FORM START -->
                   <form action="login.php" method="post">
				   <div style="text-align:center;margin:4px 0 4px 0;position: relative;">
				    <img src="photo/img_avatar2.png" alt="Avatar" class="avatar" style="border-radius: 50%;width: 30%;">
                   </div>
				   <div class="form-group">
                    <label for="email" >Email address </label>
                    <input type="email" class="form-control" placeholder="Email address" name="email"id="email" required>
                    </div>
                    <div class="form-group">
                     <label for="pwd" >Password:</label>
                    <input type="password" class="form-control"placeholder="Enter Your Password" id="pwd" name="password" required>
                    </div>
                       <label>
					   
        <!--<input type="checkbox" checked="checked" name="remember"> Remember me--> 
      </label>             
	  <br>
                      <input type="submit" name="sub" class="btn btn-info col-sm-6 col-sm-offset-3 ">
					  <br>
					  <br>
					  <span class="psw">Forgot <a href="#">password?</a></span>
					  <br>
                    </form>
<!-- FORM END -->
      </div>
      
       
      
    </div>

  </div>
</div>




<!-- Modal FOR SIGN END -->




  




</body>
</html>
