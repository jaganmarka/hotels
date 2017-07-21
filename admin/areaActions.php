<?php
include_once "db/connect.php";
if(isset($_REQUEST['did'])){
$del_qry=mysql_query("delete from areas where id='".$_REQUEST['did']."'");

	if ($del_qry) {
		$msg="Area Deleted Successfully";
			header("Location:areaList.php?msg=".$msg);
		}
		else{
			$msg="Failed to delete";
			header("Location:areaList.php?msg=".$msg);
		}
	}

if(isset($_POST['Edit'])){
		$countryId=$_POST['countryId'];
		$stateId=$_POST['stateId'];
		$cityId=$_POST['cityId'];
		$areaId=$_POST['areaId'];
		$areaName=$_POST['areaName'];		
	if(mysql_num_rows(mysql_query("select * from areas where areaName='".$areaName."' and cityId='".$cityId."' and countryId='".$countryId."' and stateId='".$stateId."'"))==0)
		{   
			$query = "update areas set areaName='".$areaName."',countryId='".$countryId."',stateId='".$stateId."',cityId='".$cityId."' where id='".$areaId."'";
			$result = mysql_query($query);
			if($result) {
				$msg = "<p style='color:green;'>area Updated Successfully</p>";
			}else {
				$msg = "<p style='color:red;'>Error occured while Area updated</p>";
			}
		}else{
		 $msg = "<p style='color:red;'>Area name with <b>".$areaName." </b>is already created</p>";
		}
		header("Location: areaList.php?msg=".$msg);


	}

?>