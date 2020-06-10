<?php
  $serverName = "testdb01234.database.windows.net";
    $connectionOptions = array(
    "Database" => "testdb01234",
    "Uid" => "mcchadmin",
    "PWD" => "Mcch1234");
    
  //Establishes the connection
  $conn = sqlsrv_connect($serverName, $connectionOptions);
  if (!$conn)
  {
  die("Error connection: ".sqlsrv_errors());
  }
  echo "DB Server: Connected!";

?>
