<?php
include_once "db/connect.php";
if(isset($_REQUEST['did'])){
$del_qry=mysql_query("delete from countries where id='".$_REQUEST['did']."'");

	if ($del_qry) {
		$msg="Country Deleted Successfully";
			header("Location:countryList.php?msg=".$msg);
		}
		else{
			$msg="Failed to delete";
			header("Location:countryList.php?msg=".$msg);
		}
	}
	if(isset($_POST['Edit'])){
		$countryName = $_POST['countryName'];
		$countryId=$_POST['countryId'];

		if(mysql_num_rows(mysql_query("select * from countries where countryName='".$countryName."'"))==0)
		{   
			$query = "update countries set countryName='".$countryName."' where id='".$countryId."'";
			$result = mysql_query($query);
			if($result) {
				$msg = "<p style='color:green;'>Country Updated Successfully</p>";
			}else {
				$msg = "<p style='color:red;'>Error occured while country updated</p>";
			}
		}else{
		 $msg = "<p style='color:red;'>Country name with <b>".$countryName." </b>is already created</p>";
		}
	header("Location: countryList.php?msg=".$msg);


	}
?>