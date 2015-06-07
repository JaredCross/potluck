<?php

  $host = "localhost";
  $user = "jcross86_public";
  $pass = "Potluck1";

  $databaseName = "jcross86_potluck-data";
  $tableName = "potluck_table";


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
