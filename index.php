<?php
    require "header.php";
    ?>

<style>
    .thumbnail {
    position: relative;
}

.caption {
    position: absolute;
    top: 45%;
    left: 0;
    width: 100%;

}
.footer2 {
   position: static;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: black;
   color: white;
   text-align: center;
}
#map {
        height: 100%;
        weight: 50%

      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 80%;
        margin: 0;
        padding: 0;
      }
      #description {
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
      }

      #infowindow-content .title {
        font-weight: bold;
      }

      #infowindow-content {
        display: none;
      }

      #map #infowindow-content {
        display: inline;
      }

      .pac-card {
        margin: 10px 10px 0 0;
        border-radius: 2px 0 0 2px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        outline: none;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
        background-color: #fff;
        font-family: Roboto;
      }

      #pac-container {
        padding-bottom: 12px;
        margin-right: 12px;
      }

      .pac-controls {
        display: inline-block;
        padding: 5px 11px;
      }

      .pac-controls label {
        font-family: Roboto;
        font-size: 13px;
        font-weight: 300;
      }

      #pac-input {
        background-color: #fff;
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
        margin-left: 12px;
        padding: 0 11px 0 13px;
        text-overflow: ellipsis;
        width: 400px;
      }

      #pac-input:focus {
        border-color: #4d90fe;
      }

      #title {
        color: #fff;
        background-color: #4d90fe;
        font-size: 25px;
        font-weight: 500;
        padding: 6px 12px;
      }
      #target {
        width: 345px;
      }
    </style>


        </head>


        <div class="row" id="box-search">
                    <div class="thumbnail text-center">
                        <img src="images/food.jpg" alt="" class="img-fluid">
                        <div class="caption">
                            <p class="text-white display-3 text-center font-weight-bold">BRINGING PEOPLE TOGETHER<br>ONE PLATE AT A TIME</p>
                        </div>
                    </div>
                </div>

<br>
<br>
<h1 class="text-center font-weight-bold">Find Chefs in your Area<br><br></h1>

<div class="container">
<h1 class="text-center font-weight-bold">Our Mission</h1>
<br>
<h6>We aim to fulfill your stomach’s desire by giving you the option to have a personal chef and have a menu catered to your every craving,
   your different dietary needs, or even have something to bring your friends and family together.
     Our goal is to give you the experience of eating like royalty how ever often you’d like, or even to give your friends something to brag about.
     <br><br>

        Our inspiration stems from wanting to get a home cooked meal experience without having to know the perfect recipe for what your tastebuds desire that day. We want to give our consumers the  option to smell the food while it is cooking while enjoying their home life. This is happiness made easy.</h6>
      <br>
<br>


</div>
<?php
ob_start();
if(isset($_SESSION['userId'])){
echo '<p>You are logged in</p>';
ob_flush();
}
else{
  echo '<p>You are logged out</p>';
  ob_flush();
}
?>




<?php
require "footer.php"
?>