<?php

$pointLat=$_GET["pointLat"];
$pointLng=$_GET["pointLng"];
$pointInfo=$_GET["pointInfo"];

$con = mysql_pconnect("localhost:3306","root","");

if (!$con)
	die('Could not connect: ' . mysql_error());

mysql_select_db("test", $con);

mysql_query("INSERT INTO google_data (pointLat, pointLng, pointInfo) VALUES ('" . $pointLat . "', '" . $pointLng . "', '" . $pointInfo . "')");

echo "Adatok mentese kesz...";

mysql_close($con);
?>