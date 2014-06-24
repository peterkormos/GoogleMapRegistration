<?php

$con = mysql_pconnect("localhost:3306","root","");

if (!$con)
	die('Could not connect: ' . mysql_error());

mysql_select_db("test", $con);

mysql_query("INSERT INTO Persons (FirstName, LastName, Age)
VALUES ('Peter', 'Griffin', '35')");

$result = mysql_query("SELECT * FROM google_data");

echo "<markers>";

while($row = mysql_fetch_array($result))
  echo "<marker lat='" . $row['pointLat'] . "' lng='" . $row['pointLng'] . "' info='" . $row['pointInfo'] . "'/>";

echo "</markers>";


mysql_close($con);
?>