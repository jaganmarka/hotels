<?php 
require_once('admin/db/connect.php');
if(isset($_POST['submit']))
{
	$userFetch=mysql_query("select * from users where userName='".$_POST['userName']."'");
	if(mysql_num_rows($userFetch)==0){
		$password=$_POST['password'];
		$salt=$password."1s2dskdh@w67w68ANHG";
		$hashPassword=hash("sha256", $salt);
		$insertQry=mysql_query("insert into users(fullName,userName,password,phoneNumber) values ('".$_POST['fullName']."','".$_POST['userName']."','".$hashPassword."','".$_POST['phoneNumber']."')");
		if($insertQry){
			$msg="signed up Sucessfully";
			header("Location: signin.php?msg=".$msg);
		}
		else{
			$msg="error while signed Up";
			header("Location: signUp.php?msg=".$msg);
		}
	}
	else{
		$msg="Already existed.Please login";
		header("Location: signin.php?msg=".$msg);
	}
}


?>