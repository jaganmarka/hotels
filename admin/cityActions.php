<?php
include_once "db/connect.php";
if(isset($_REQUEST['did'])){
$del_qry=mysql_query("delete from cities where id='".$_REQUEST['did']."'");

	if ($del_qry) {
		$msg="City Deleted Successfully";
			header("Location:cityList.php?msg=".$msg);
		}
		else{
			$msg="Failed to delete";
			header("Location:cityList.php?msg=".$msg);
		}
	}

if(isset($_POST['Edit'])){
		$country_id=$_POST['countryId'];
		$state_id=$_POST['stateId'];
		$city_id=$_POST['cityId'];
		$city_name=$_POST['cityName'];
		
		
	if(mysql_num_rows(mysql_query("select * from cities where cityName='".$city_name."' and countryId='".$country_id."' and stateId='".$state_id."'"))==0)
		{   
			$query = "update cities set cityName='".$city_name."',countryId='".$country_id."',stateId='".$state_id."' where id='".$city_id."'";
			$result = mysql_query($query);
			if($result) {
				$msg = "<p style='color:green;'>City Updated Successfully</p>";
			}else {
				$msg = "<p style='color:red;'>Error occured while City updated</p>";
			}
		}else{
		 $msg = "<p style='color:red;'>City name with <b>".$city_name." </b>is already created</p>";
		}
		header("Location: cityList.php?msg=".$msg);


	}

?>