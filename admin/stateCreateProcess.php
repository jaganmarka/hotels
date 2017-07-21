<?php 
include_once "db/connect.php";
session_start();
if(isset($_POST['submit'])){
	$stateName = $_POST['stateName'];
	$countryId=$_POST['countryId'];

	if(mysql_num_rows(mysql_query("select * from states where stateName='".$stateName."' and countryId='".$countryId."'"))==0)
	{   
		$query = "insert into states (stateName,countryId,createdBy) values ('".$stateName."','".$countryId."','".$_SESSION['userName']."')";
		$result = mysql_query($query);
		if($result) {
			$msg = "<p style='color:green;'>New State Created Successfully</p>";
			header("Location: stateList.php?msg=".$msg);
		}else {
			$msg = "<p style='color:red;'>Error occured while State create</p>";
			header("Location: stateCreate.php?msg=".$msg);
		}
	}else{
	 $msg = "<p style='color:red;'>State name with <b>".$stateName." </b>is already created</p>";
	header("Location: stateCreate.php?msg=".$msg);
	}
	
}
