<?php 
session_start();
include_once "db/connect.php";
if(isset($_POST['submit'])){
	$password=sha1($_POST['password']);
	$qury=mysql_query("select * from admin where userName='".$_POST['userName']."' AND password='".$password."'");	
if(mysql_num_rows($qury)==1){
	$data=mysql_fetch_array($qury);
	$userName=$data['firstName'].' '.$data['lastName'];
	$_SESSION['userName']=$_POST['userName'];
	
$msg="login Successfully";
header("Location:dashboard.php?msg=".$msg."&adminName=".$userName);
}
else{
$msg="login Failed. Please Enter valid Username and Password";	
header("Location:login.php?msg=".$msg);
}

}

?>