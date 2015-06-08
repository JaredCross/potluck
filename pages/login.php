<?
session_name("MyLogin");
session_start();
session_destroy();

if($_GET['login'] == "failed") {
print $_GET['cause'];
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Submit Form Using AJAX, jQuery and PHP</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
  </head>
  <body>
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
          <li class="active"><a href="http://www.jaredcross.com">Home</a></li>
          <li><a href="http://jaredcross.com/pages/potluck_protected.php">Potluck</a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </nav>
    <div class="jumbotron">
      <div class="container">
        <h1>Please login to head to the Potluck!</h1>
      </div>
    </div>
<div class="login-container">
    <form name="login_form" method="post" action="log.php?action=login">
Login: <input type="text" name="user"><BR>
Password: <input type="password" name="pwd"><BR>
<input type="submit">
</form>
</div>
<script src="../jquery/jquery.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</body>
</html>
