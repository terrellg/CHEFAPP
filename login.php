<?php 

?>


<!DOCTYPE html>
<html lang="en">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<head>
<title> ChefMe Login </title>
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
      <h1>ChefMe</h1>
      <ul class="nav nav-pills nav-stacked">
	  <br>
    </div>
  </div>
  
  
 <div class="container" style="padding-left: 10%">
  <div class="row content">




    <div class="col-sm-9">
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <h2>Log in to your Account</h2>
 <br>
 
 <form action="includes/login" method="post">
 <div class="form-group">
    <label>Your Email</label>
    <input type="email" name="email" class="form-control" placeholder="Enter email" required>
    </div>

<br>

<div class="form-group">
<label>Your Password</label>
<input type="password" name="pwd" class="form-control" placeholder="Enter Password" required>
</div>
<p><a href="signup.php"> Sign up for an account</p></a>

<button type="submit" class="btn btn-primary btn-block">Login</button>
 </form>
<form action=includes/logout.inc.php" method="post">
<button type = "submit" class="btn btn-primary btn-block" name="logout-submit">Logout</button> 
 
 
</body>





</html>


<main>
    <p>You are logged out!</p>
    <p>You are logged in!</p>
</main>

<?php
require "footer.php";
?>

