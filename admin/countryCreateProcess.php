<?php 
include_once "db/connect.php";
session_start();
if(isset($_POST['submit'])){
	$countryName = $_POST['countryName'];

	if(mysql_num_rows(mysql_query("select * from countries where countryName='".$countryName."'"))==0)
	{   
		$query = "insert into countries (countryName,createdBy) values ('".$countryName."','".$_SESSION['userName']."')";
		$result = mysql_query($query);
		if($result) {
			$msg = "<p style='color:green;'>New Country Created Successfully</p>";
			header("Location: countryList.php?msg=".$msg);
		}else {
			$msg = "<p style='color:red;'>Error occured while country create</p>";
			header("Location: countryCreate.php?msg=".$msg);
		}
	}else{
	 $msg = "<p style='color:red;'>Country name with <b>".$countryName." </b>is already created</p>";
	header("Location: countryCreate.php?msg=".$msg);
	}
	
}
