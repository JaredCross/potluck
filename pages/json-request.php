<?php

  $host = "localhost";
  $user = "jcross86_public";
  $pass = "Potluck1";

  $databaseName = "jcross86_potluck-data";
  $tableName = "potluck_table";


  // include 'DB.php';
  $con = mysql_connect($host,$user,$pass);
  $dbs = mysql_select_db($databaseName, $con);


  $result = mysql_query("SELECT * FROM $tableName");
  $data = array();
  while ( $row = mysql_fetch_row($result))
    {
      $data[] = $row;
    }
  echo json_encode( $data );
?>
