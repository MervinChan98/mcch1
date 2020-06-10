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

  $tsql= "SELECT * FROM [dbo].[restaurant]";
  $getResults= sqlsrv_query($conn, $tsql);
  if ($getResults == FALSE)
  {
    die(sqlsrv_errors());
  }
  echo "<table border='1'>";

  while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC))
  {
    echo "<tr>";
    echo "<td>". $row['restaurant_id'] . "</td>";
    echo "<td>". $row['restaurant_name'] ."</td>";
    echo "<td>". $row['restaurant_address'] . "</td>";
    echo "<td>". $row['restaurant_phone'] . "</td>";
    echo "</tr>";
  }
  echo "</table>";
  sqlsrv_free_stmt($getResults);
?>
