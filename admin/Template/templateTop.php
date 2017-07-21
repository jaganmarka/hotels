<?php 
include "db/connect.php";
session_start();
if(!isset($_SESSION['userName'])){
	header("Location:logout.php");
}
else{
  $admn_qury=mysql_query("select * from admin where userName='".$_SESSION['userName']."'");
  $admin_dtls=mysql_fetch_array($admn_qury);
  
}


?>
<!DOCTYPE html>
<html class=""><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hotel</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
    
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="css/AdminLTE.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="css/skins/_all-skins.min.css">
    
  <!-- js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <script src="js/app.min.js"></script>
    <script src="js/demo.js"></script>
		<script src="js/jquery.dataTables.min.js"></script>
		<script src="js/dataTables.bootstrap.min.js"></script>

<script type="text/javascript">
//initialize datatables
     $(document).ready(function () {
       $('#datatable').dataTable();
    });
 </script>
  </head>
  <body class="skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="#" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg">
              
              <h2 style="margin-top: 7px;">Hotels</h2>
          </span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section style="height: auto;" class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
        
            <div class="pull-left">
              <p><a href="#">
              	<?php 
                echo $admin_dtls['firstName'].' '.$admin_dtls['lastName'];
              	?>
              </a></p>
            </div>
            <div >
			  <p class="pull-right" style="color:white;margin-top:20px;">Welcome Back!</p>
            </div>
          </div>
         
          <ul class="sidebar-menu">
            <li class=" treeview">
              <a href="dashboard.php">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
              </a>
            </li>
            <li class=" treeview">
              <a href="#">
                <i class="fa fa-users"></i>
                <span>Hotels</span>
				        <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
              	<li><a href="hotelList.php"><i class="fa fa-users"></i> All Hotels</a></li>				
                <li><a href="createHotel.php"><i class="fa fa-user-plus"></i> Create Hotels</a></li>
              </ul>
            </li>
            
             <li class=" treeview">
              <a href="#">
                <i class="fa fa-users"></i>
                <span>Users</span>
              <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="usersList.php"><i class="fa fa-users"></i> All Users</a></li>       
                
              </ul>
            </li>
            <li class=" treeview">
              <a href="#">
                <i class="fa fa-map"></i>
                <span>Country</span>
				        <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
              	<li><a href="countryList.php"><i class="fa fa-search"></i>Country List</a></li> 
                <li><a href="countryCreate.php"><i class="fa fa-pencil"></i>Create Country</a></li>
              </ul>
            </li>
            <li class=" treeview">
              <a href="#">
                <i class="fa fa-map"></i>
                <span>State</span>
				        <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
              	<li><a href="stateList.php"><i class="fa fa-search"></i>State List</a></li> 
                <li><a href="stateCreate.php"><i class="fa fa-pencil"></i>Create State</a></li>
              </ul>
            </li>
            <li class=" treeview">
              <a href="#">
                <i class="fa fa-map"></i>
                <span>City</span>
				        <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
              	<li><a href="cityList.php"><i class="fa fa-search"></i>City List</a></li> 
                <li><a href="cityCreate.php"><i class="fa fa-pencil"></i>Create City</a></li>
              </ul>
            </li>
            <li class=" treeview">
              <a href="#">
                <i class="fa fa-map"></i>
                <span>Area</span>
				        <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
              	<li><a href="areaList.php"><i class="fa fa-search"></i>Area List</a></li> 
                <li><a href="areaCreate.php"><i class="fa fa-pencil"></i>Create Area</a></li>
              </ul>
            </li>
            
            <li class=" treeview">
              <a href="#">
                <i class="fa fa-sun-o"></i>
                <span>Contact Us</span>
				        <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
              	<li><a href="contactList.php"><i class="fa fa-search"></i>Contact Us List</a></li> 
                
              </ul>
            </li>
            
            <li class=" treeview">
              <a href="#">
                <i class="fa fa-phone"></i>
                <span>Vendor Requests</span>
				      <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
              	<li><a href="vendorRequestList.php"><i class="fa fa-search"></i>Vendor Requests List</a></li> 
                 
              </ul>
            </li>
             <li class=" treeview">
              <a href="logout.php">
                <i class="fa fa-power-off"></i> <span>Logout</span>
              </a>
            </li>			
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>   
         <!-- Content Wrapper. Contains page content -->
      