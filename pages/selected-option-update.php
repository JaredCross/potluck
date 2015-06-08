<?php

  $host = "localhost";
  $user = "username";
  $pass = "password";

  $databaseName = "database name";
  $tableName = "table name";


  // include 'DB.php';
  $con = mysql_connect($host,$user,$pass);
  $dbs = mysql_select_db($databaseName, $con);

  if ($con->connect_error) {
      die("Connection failed: " . $con->connect_error);
  }

  $id = $_POST['id'];

  $result = mysql_query("SELECT * FROM $tableName WHERE ID = ". $id);
  $row = mysql_fetch_row( $result );

  echo json_encode($row);
?>
