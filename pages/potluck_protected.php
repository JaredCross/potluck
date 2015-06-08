<?php
require("log.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Submit Form Using AJAX and jQuery</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link href="http://addtocalendar.com/atc/1.5/atc-style-blue.css" rel="stylesheet" type="text/css">
  </head>

  <body>
    <div id="wrapper">
    <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="http://www.jaredcross.com">JaredCross.com</a>
      </div>
      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li><a href="http://www.jaredcross.com">Home</a></li>
          <li class="active"><a href="http://jaredcross.com/pages/potluck.html">Potluck</a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </nav>
  <div class = "header">
    <div class="jumbotron">
      <div class="container">
        <h1>Potluck Sign Up!</h1>
          <h2>June 15th Potluck, sign up below!</h2>
      </div>
    </div>
  </div>
  <div class = "content">
    <!-- begin add to calendar button from addtocalendar.com -->
    <div class="add-to-calendar-container">
    <span class="addtocalendar atc-style-blue">
       <var class="atc_event">
           <var class="atc_date_start">2015-06-15 9:00:00</var>
           <var class="atc_date_end">2015-06-15 13:00:00</var>
           <var class="atc_timezone">America/Denver</var>
           <var class="atc_title">June Potluck!</var>
           <var class="atc_description">Eat good food</var>
           <var class="atc_location">Galvanize Basement</var>
           <var class="atc_organizer">Jared</var>
           <var class="atc_organizer_email">cross.jared@gmail.com</var>
       </var>
   </span>
 </div>
    <!-- end add to calendar button -->
    <!-- begin table with SQL potluck data -->
    <div id = "table-container">
      <table class = "potluck-table-data">
        <tr>
          <th>
            Name
          </th>
          <th>
            Main Dish
          </th>
          <th>
            Side Dish
          </th>
          <th>
            Dessert
          </th>
          <th>
            Other
          </th>
        </tr>
      </table>
    </div>
    <!-- end table -->
    <!-- begin form to enter new sql entry -->
    <div id ="instructions-container">
      <p class ="instructions">Please enter your name and whatever you would like to bring below.</p>
    </div>
    <div id="mainform">
      <form id = "potluck-form">
        <input id="id" type="hidden">
        <label for="name">Name?</label>
        <input id="name" type="text">
        <label for="main-dish">Main Dish? </label>
        <input id="main-dish" type="text">
        <label for="side-dish">Side Dish? </label>
        <input id="side-dish" type="text">
        <label for="dessert-dish">Dessert?   </label>
        <input id="dessert-dish" type="text">
        <label for="other">Other?</label>
        <input id="other" type="text">
        <div id="button-container">
        <input id="submit" type="button" value="Submit">
      </div>
      </form>
    </div>
    <!-- end form -->
    <!-- begin update form -->
    <div class="update-container">
      <h3>Need to update or delete an entry?</h3>
    <select class="update-by-name">
      <option value="invalid" selected disabled>Choose your name</option>
    </select>
  </div>
  <div class="update-inputs-container">
  </div>
</div>
<div id="footer-container">
    <!-- footer -->
    <footer>
      <div class="footer">
        <p></p>
      </div>
    </footer>
  </div>
  </div>
    <script src="../jquery/jquery.js"></script>
    <script src="../js/javascript.js"></script>
    <script src="../js/request.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="../js/addtocalendar.js"></script>
    <script src="../js/update-select-box.js"></script>
  </body>
</html>
