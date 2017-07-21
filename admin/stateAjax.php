<?php 
include_once "db/connect.php";
session_start();
if(isset($_POST['countryId'])){
	$countryId = $_POST['countryId'];
	$cqury = mysql_query("Select * from states where countryId ='".$countryId."'");
$output = "<option value=''>Select State</option>";
// $sel="";
while($row = mysql_fetch_array($cqury)){ 
    // if(isset($_POST['selectedCId'])){
    // 	if($row['id']==$_POST['selectedCId']){
    // 		$sel="selected";
    // 	}
    // }
    $output.= "<option value=".$row['id'].">".$row['stateName']."</option>"; 
    
} 
echo $output; 

}