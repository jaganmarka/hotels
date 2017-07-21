<?php 
include_once "db/connect.php";
session_start();
if(isset($_POST['submit'])){
	$areaName = $_POST['areaName'];
	$cityId=$_POST['cityId'];
	$countryId=$_POST['countryId'];
	$stateId=$_POST['stateId'];

	if(mysql_num_rows(mysql_query("select * from areas where areaName='".$areaName."' and cityId='".$cityId."'and stateId='".$stateId."' and countryId='".$countryId."'"))==0)
	{   
		$query = "insert into areas (areaName,cityId,countryId,stateId,createdBy) values ('".$areaName."','".$cityId."','".$countryId."','".$stateId."','".$_SESSION['userName']."')";
		$result = mysql_query($query);
		if($result) {
			$msg = "<p style='color:green;'>New Area Created Successfully</p>";
			header("Location: areaList.php?msg=".$msg);
		}else {
			$msg = "<p style='color:red;'>Error occured while City create</p>";
			header("Location: areaCreate.php?msg=".$msg);
		}
	}else{
	 $msg = "<p style='color:red;'>City name with <b>".$areaName." </b>is already created</p>";
	 header("Location: areaCreate.php?msg=".$msg);
	}
	
}
