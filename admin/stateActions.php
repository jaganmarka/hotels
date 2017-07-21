<?php
include_once "db/connect.php";
//////////**********Sate Delete***********///////
if(isset($_REQUEST['did'])){
$del_qry=mysql_query("delete from states where id='".$_REQUEST['did']."'");

	if ($del_qry) {
		$msg="State Deleted Successfully";	
		}
		else{
			$msg="Failed to delete";	
		}
		header("Location:stateList.php?msg=".$msg);
	}
//////////**********Sate Update***********///////
if(isset($_POST['Edit'])){
		$country_id=$_POST['countryId'];
		$state_id=$_POST['stateId'];
		$state_name=$_POST['stateName'];	
		if(mysql_num_rows(mysql_query("select * from states where stateName='".$state_name."' and countryId='".$country_id."'"))==0)
			{   
				$query = "update states set stateName='".$state_name."',countryId='".$country_id."' where id='".$state_id."'";
				$result = mysql_query($query);
				if($result) {
					$msg = "<p style='color:green;'>State Updated Successfully</p>";
				}else {
					$msg = "<p style='color:red;'>Error occured while state updated</p>";
				}
			}else{
			 $msg = "<p style='color:red;'>State name with <b>".$state_name." </b>is already created</p>";
			}
		header("Location: stateList.php?msg=".$msg);


	}

	
?>