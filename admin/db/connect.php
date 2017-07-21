<?php

$conn = mysql_connect("localhost", "root", "");
$select_db = mysql_selectdb("hotel", $conn);

if(!$conn){
	die('Could not connect: ' . mysql_error());
}
?>
