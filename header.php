<?php
ob_start();
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>ChefMe</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <script src="js/bootstrap.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAUOYK_v8n2Y7O4y6jRoaI_LVo5OM8rfcI&libraries=places"></script>



    <!-- Grey with black text -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #0f0f0f">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="index.php">ChefMe</a>
  


  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="index.php">HOME</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="maps.php">MAP</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">ABOUT US</a>
    </li>

  </ul>




<?php
if(isset($_SESSION['userId'])){
echo '<form class="form-inline my-2 my-lg-0" action="includes/logout.inc.php" method="post">
<button type ="submit" class="btn btn-outline-warning my-2 my-sm-0" name="logout-submit">Logout</button>
</form>';
                ob_end_flush();
}
else{
  echo '<form class="form-inline my-2 my-lg-0" action="includes/login.inc.php" method="post">
  <input class ="form-control mr-sm-2" type="email" placeholder=" Enter Email" name="email">
  <input class ="form-control mr-sm-2" type="password" placeholder=" Enter Password" name="pwd">
  <a href="signup.php" class="nav-item">Sign Up</a>
    <button type ="submit" class="btn btn-outline-warning my-2 my-sm-0" name="login-submit">Login</button>
</form>';
                ob_end_flush();
}
?>





      </div>
      </nav>
