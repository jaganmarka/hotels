<?php 
include_once "db/connect.php";
session_start();
if(isset($_POST['countryId']) && isset($_POST['stateId'])){
	$countryId = $_POST['countryId'];
	$stateId = $_POST['stateId'];
	$cqury = mysql_query("Select * from cities where countryId ='".$countryId."' and stateId ='".$stateId."'");
	$output = "<option value=''>Select City</option>";
while($row = mysql_fetch_array($cqury)){ 
    
    $output.= "<option value=".$row['id'].">".$row['cityName']."</option>"; 
    
} 
echo $output; 

}