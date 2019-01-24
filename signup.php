<?php
require "header.php";
?>

<!DOCTYPE html>
<html lang="en">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<head>
<title> ChefMe Sign Up </title>
 <style>
    html,body {padding:0;margin:0;}
    .rate{
      font: 14px Arial;
    }
    label{
        font: 20px Arial;
    }
	</style>

</head>

<body>
 <div class="cointainer-fluid">
    <div class="col-sm-3 sidenav">
      <h1>Create an Account</h1>
      <ul class="nav nav-pills nav-stacked">
	  <br>
    </div>
  </div>

  
 <div class="container" style="padding-left: 10%">
  <div class="row content">

<?php
      if(isset($_GET['error'])){
      if($_GET["error"] == "emptyFields"){
        echo '<p class = "text-danger">Fill in all fields</p>';
      }
    }
    /*
     if ($_GET["success"] == "signin"){
      echo '<p class = "text-success">Sign Up Successful</p>';
     
    }
*/

      
      


?>


    <div class="col-sm-9">
      <br>
      <br>
 <br>
 <br>

 <form action="includes/signup.inc.php" method="post"> 
 <div class="form-group">
 <label>First Name</label>
 <input type="text" class="form-control" name="fname" placeholder="Enter First Name" required>
 </div>

 <div class="form-group">
    <label>Last Name</label>
    <input type="text" class="form-control" name="lname" placeholder="Enter Last Name" required>
    </div>

    
    <div class="form-group">
  <label>Account Type</label><br>
 <input type="radio" name="accountType" value="Chef" required> Chef
 <input type ="radio" name="accountType" value="Customer" required> Customer<br>
 </div>

 <div class="form-group">
    <label>Email Address</label>
    <input type="email" class="form-control" name="email" placeholder="Enter email" required>
    </div>

<div class="form-group">
<label>Password</label>
<input type="password" class="form-control" name="pwd" placeholder="Enter Password" required>
</div>

<div class="form-group">
<label>Confirm Password</label>
<input type="password" class="form-control" name="pwd-confirm" placeholder="Confirm Password" required>
</div>

<div class="form-group">
<label>Phone Number</label>
<input type="text" class="form-control" name="pno" placeholder="Enter Phone Number" required>
</div>

<button type="submit" name ="signup-submit" class="btn btn-primary">Submit</button>

 </form>
 
 
 
</body>





</html>