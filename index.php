<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<title>HOTEL</title>

	<!-- meta -->
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- css -->
	<link rel="stylesheet" href="css/styleSheet.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- js -->
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <style type="text/css">
	.bcgImg{
        background: url(images/bg1.jpg);
        position: relative; 
        height:500px;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        clear: 0;
        z-index: 0 !important;}
        .needs{background-color: #2e2d2d;}  
		.allNds{padding: 2%; color:white;}
    /*************footer**********/
		.footpadng{padding-top:50px;padding-left:30px;padding-bottom:40px;}
		.footertxt{color:black; padding-left:50px;}
		.about{font-size:20px;color:black;}
		.about1{padding-top:20px;font-size:13px;}
		.navfoot li a{color:black;padding-bottom:15px;border:none;}
		.navfoot li a:hover{color:black;border:none;background-color:transparent;}
		.nav-pills > li.active > a, .nav-pills > li.active > a:hover, .nav-pills > li.active > a:focus{background-color:transparent;border-bottom:1px solid lightgreen;border-radius:0px;color:black;}
		.footertxt1 a {color:#a6a6a6;text-decoration:none;}
		.footnav ul{border-bottom:1px solid black;}
		.footertxt1 a p:hover{color:black;}
		.footertxt2{padding-left:35px;}
		.about2{padding-bottom:20px;}
		.footer2{background:rgba(255, 255, 255, .98);padding-left:50px;padding-right:50px;padding-top:20px;margin-top:-2px;}
		@media (max-width:480px){.footer2{padding:20px 0px 0 0;}}
		.copyrt p{display:block;font-size:16px;padding-top:30px;padding-bottom:20px;padding-left:30px;color:black;}
		.push-right {font-size:18px;padding-top:30px;padding-bottom:20px;color:black;}
		.push-right a i:hover{color:red;}
		.txtdeco a{color:#a6a6a6;text-decoration:none;font-size:12px;}
		.bang{font-size:18px;color:black;padding:50px 20px 20px 14px;margin-top:10px;}
		.txtdeco{padding-bottom:20px;}
   </style>
</head>
<body id="home">
<!-- ****************************** Navbar Starts************************-->
	<section class="navbar">
		<nav class="navbar navbar-defult">
		  <div class="container-fluid">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="#">LOGO</a>
		    </div>
		    <div class="collapse navbar-collapse" id="myNavbar">
		 
		      <ul class="nav navbar-nav navbar-right">
		      	<li class="dwnld">
		      		<a href="#"><i class="glyphicon glyphicon-phone"></i>Download App</a>
		      	</li>
	            <li class="iconItem">
			        <a href="#"><i class="glyphicon glyphicon-user"></i>Manage Bookings</a>
			        <div class="popover bottom">
			            <div class="arrow"></div>
			            <div class="popover-content text-center">
			                <ul>
			                    <li><a href="#" class="btn loginBtn" data-toggle="modal" data-target="#myModal1">Login</a><br>
			                     New User? <a href="#" style="color:red;" data-toggle="modal" data-target="#myModal2"> Sign Up</a></li><hr>
			                    <li><a href="#">Manage/Cancel Bokkings</a></li><hr>
			                    <li><a href="#">Corporate login</a></li>
			               
			                </ul>
			            </div>
			        </div>
			     </li>
	             <li class="dwnld">
		      		<a href="#"><i class="glyphicon glyphicon-question-sign"></i>Help</a>
		      	 </li>
		      	 <li class="dwnld">
		      		<a href="#"><i class="glyphicon glyphicon-earphone"></i>+91 9912656769</a>
		      	 </li>
		      </ul>
		    </div>
		  </div>
		</nav>
	</section>
	<!-- ****************************** Navbar Ends  ************************** -->
	
	<!-- ****************************** Booking-Form  ************************** -->
	<section id="booking">
		<div class="container-fluid bcg1">
		  <div class="bcg">
			<div class="bcgImg"></div>
			<div class="bcgForm">
				<div class="row">
					<div class="col-md-1"></div>
					<div class="col-md-3 inner-addon left-addon">
					    <i class="glyphicon glyphicon-map-marker"></i>      
					    <input type="text" class="form-control" placeholder="Place" />
					  
					</div>
					<div class="col-md-2 inner-addon left-addon">
						<i class="glyphicon glyphicon-calendar"></i>      
					    <input type="date" class="form-control" name="from" placeholder="From" />
					</div>
					<div class="col-md-2 inner-addon left-addon">
						<i class="glyphicon glyphicon-calendar"></i>      
					    <input type="date" class="form-control" name="to" placeholder="to" />
					</div>
					<div class="col-md-2 gust inner-addon left-addon">
						<i class="glyphicon glyphicon-user usr"></i>  
						<input type="text" class="form-control" name="guests" placeholder="guests" />
					</div>
					<div class="col-md-1 gust">
						<input type="submit" class="btn btn-danger srchBtn" name="search" value="search">
					</div>
					
					<div class="col-md-1"></div>
				</div>
			</div>
		</div>
		</div>
	</section>
	<!-- ****************************** Booking-Form Ends ********************** -->

 	<!-- ****************************** Deals *************************-->
 	<section class="deals">
 	  <div class="container">
 		<h3 class="bdr">Limited Deals</h3>
 		<div class="row">
 			<div class="col-md-3">
 				<a href="">
 					<div class="dlsImg"><img src="images/1.jpg" class="img-responsive" width="300px" height="275px">
 					<div class="txt"><h4>Couples 25% Off Local IDs Welcome</h4></div></div>
 				</a>
 			</div>
 			<div class="col-md-3">
 				<a href="">
 					<div class="dlsImg"><img src="images/2.jpg" class="img-responsive" width="300px" height="275px">
 				    <div class="txt"><h4>Get 25% off on Top Rated Hotels</h4></div></div>
 				 </a>
 			</div>
 			<div class="col-md-3">
 				<a href="">
 					<div class="dlsImg"><img src="images/3.jpg" class="img-responsive" width="300px" height="275px">
 					<div class="txt"><h4>For check in today Minimum 35% off</h4></div></div>
 			    </a>
 			</div>
 			<div class="col-md-3">
 				<a href="">
 					<div class="dlsImg"><img src="images/4.jpg" class="img-responsive" width="300px" height="275px">
 					<div class="txt"><h4>Under Rs.999 Best Price, Best Hotels</h4></div></div>
 				</a>
 			</div>
 		</div>
 	 </div>
 	</section>
 	<!-- ****************************** Deals End********************** -->

 	<!-- ****************************** Needs********************** -->
 	<section class="needs"> 
 		<div class="container">
 			<h3 align="center" class="allNds"> For All Your Needs</h3>
 			          <div class="gallery-bott row "> 

                        <div class="col-md-6 col1 gallery-grid">
                            <a href="images/7.jpg" class="b-link-stripe b-animate-go  thickbox">

                                <figure class="effect-bubba">
                                	<h5 class="txtHd" style="color:white">Holiday Packages</h5>
                                    <img class="img-responsive" src="images/7.jpg" alt="">
                                    
                                    <figcaption>
                                        <h4 class="txt">Holiday Packages</h4>
                                        <p class="gal1">“Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.” </p>	
                                    </figcaption>			
                                </figure>
                            </a>
                        </div>
                        <div class="col-md-6 col1 gallery-grid">
                        	
                            <a href="images/4.jpg" class="b-link-stripe b-animate-go  thickbox">
                                <figure class="effect-bubba">
                                	<h5 class="txtHd" style="color:white">Bussiness Packages</h5>
                                    <img class="img-responsive" src="images/4.jpg" alt="">
                                    
                                    <figcaption>
                                        <h4 class="gal">Bussiness Packages</h4>
                                        <p class="gal1">“Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.” </p>	
                                    </figcaption>			
                                </figure>
                            </a>
                        </div>
                        <div class="col-md-6 col1 gallery-grid">
                            <a href="images/5.jpg" class="b-link-stripe b-animate-go  thickbox">
                                <figure class="effect-bubba">
                                	<h5 class="txtHd" style="color:white">Honeymoon Packages</h5>
                                    <img class="img-responsive" src="images/5.jpg" alt="">
                            
                                    <figcaption>
                                        <h4 class="gal">Honeymoon Packages</h4>
                                        <p class="gal1">“Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.” </p>	
                                    </figcaption>			
                                </figure>
                            </a>
                        </div>
                        <div class="col-md-6 col1 gallery-grid">
                            <a href="images/6.jpg" class="b-link-stripe b-animate-go  thickbox">
                            	
                                <figure class="effect-bubba">
                                	<h5 class="txtHd" style="color:white">Hotels in Malaysia</h5>
                                    <img class="img-responsive" src="images/6.jpg" alt="">
                                    
                                    <figcaption>
                                        <h4 class="gal">Hotels in Malaysia</h4>
                                        <p class="gal1">“Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.” </p>	
                                    </figcaption>			
                                </figure>
                            </a>
                        </div>

                        <div class="clearfix"> </div>
                    </div>
 		</div>
 	</section>

 	<!-- ****************************** Needs Ends********************** -->

 	<!-- ****************************** Footer ************************** -->
    <section class="footer">
	 	<div class="container-fluid footer2">
		<div class="container">
			<div class="col-lg-12 footnav">
				<ul class="nav nav-pills navfoot">
	          <li class="active"><a data-toggle="pill" href="#bangalore">Bangalore</a></li>
	          <li><a data-toggle="pill" href="#delhi">Delhi</a></li>
	          <li><a data-toggle="pill" href="#gurgaon">Gurgaon</a></li>
	          <li><a data-toggle="pill" href="#hyderabad">Hyderabad</a></li>
	          <li><a data-toggle="pill" href="#noida">Noida</a></li>
	          <li><a data-toggle="pill" href="#pune">Pune</a></li>
	          <li><a data-toggle="pill" href="#warangal">Warangal</a></li>
			</ul>
			</div>
			<div class="tab-content">
				<div class="tab-pane active txtdeco" id="bangalore">
					<p class="bang">Hotels in Bangalore</p>
					<div class="col-lg-3 col-sm-12">
						<a href="#"><p>Hotels in Arakere</p></a>
						<a href="#"><p>Hotels in Bannerghatta</p></a>
						<a href="#"><p>Hotels in Begur</p></a>
						<a href="#"><p>Hotels in Bellandur</p></a>
						<a href="#"><p>Hotels in Bilekahalli</p></a>
						<a href="#"><p>Hotels in Bommanahalli</p></a>
						<a href="#"><p>Hotels in BTM</p></a>
						<a href="#"><p>Hotels in CV Raman Nagar</p></a>
						<a href="#"><p>Hotels in Electronic City</p></a>
						<a href="#"><p>Hotels in HBR Layout</p></a>
						<a href="#"><p>Hotels in Hebbal</p></a>
					</div>
					<div class="col-lg-3 col-sm-12">
						<a href="#"><p>Hotels in Hoodi</p></a>
						<a href="#"><p>Hotels in Hormavu</p></a>
						<a href="#"><p>Hotels in Hosa Road</p></a>
						<a href="#"><p>Hotels in Hosur Road</p></a>
						<a href="#"><p>Hotels in HRBR Layout</p></a>
						<a href="#"><p>Hotels in HSR</p></a>
						<a href="#"><p>Hotels in Hulimavu</p></a>
						<a href="#"><p>Hotels in Indiranagar</p></a>
						<a href="#"><p>Hotels in JP Nagar</p></a>
						<a href="#"><p>Hotels in Kadugodi</p></a>
						<a href="#"><p>Hotels in Kaggadasapura</p></a>
					</div>
					<div class="col-lg-3 col-sm-12">
						<a href="#"><p>Hotels in Kalyan Nagar</p></a>
						<a href="#"><p>Hotels in Kammanahalli</p></a>
						<a href="#"><p>Hotels in Kanaka Nagar</p></a>
						<a href="#"><p>Hotels in Kasavanahalli</p></a>
						<a href="#"><p>Hotels in Kormangala</p></a>
						<a href="#"><p>Hotels in KR Puram</p></a>
						<a href="#"><p>Hotels in Kundalahalli</p></a>
						<a href="#"><p>Hotels in Lingarajapuram</p></a>
						<a href="#"><p>Hotels in Mahadevpura</p></a>
						<a href="#"><p>Hotels in Marathahalli</p></a>
						<a href="#"><p>Hotels in MG Road</p></a>
					</div>
					<div class="col-lg-3 col-sm-12">
						<a href="#"><p>Hotels in Naganathapura</p></a>
						<a href="#"><p>Hotels in Nagavara</p></a>
						<a href="#"><p>Hotels in Old Airport Road</p></a>
						<a href="#"><p>Hotels in Old Madras Road</p></a>
						<a href="#"><p>Hotels in Pai Layout</p></a>
						<a href="#"><p>Hotels in R K Hegde Nagar</p></a>
						<a href="#"><p>Hotels in Sarjapur</p></a>
						<a href="#"><p>Hotels in Singasandra</p></a>
						<a href="#"><p>Hotels in Ulsoor</p></a>
						<a href="#"><p>Hotels in Uttarahalli</p></a>
						<a href="#"><p>Hotels in Whitefield</p></a>
					</div>
				</div>
				<div class="tab-pane txtdeco" id="delhi">
					<p class="bang">Hotels in Delhi</p>
				</div>
				<div class="tab-pane txtdeco" id="gurgaon">
					<p class="bang">Hotels in Gurgaon</p>
					<div class="col-lg-3 col-sm-12">
						<a href="#"><p>Hotels in Palam Vihar</p></ap>
						<a href="#"><p>Hotels in Sector10A</p></a>
						<a href="#"><p>Hotels in Sector15</p></a>
						<a href="#"><p>Hotels in Sector17</p></a>
						<a href="#"><p>Hotels in Sector23</p></a>
						<a href="#"><p>Hotels in Sector24</p></a>
						<a href="#"><p>Hotels in Sector25</p></a>
						<a href="#"><p>Hotels in Sector26</p></a>
						<a href="#"><p>Hotels in Sector27</p></a>
						<a href="#"><p>Hotels in Sector31</p></a>
					</div>
					<div class="col-lg-3 col-sm-12">
						<a href="#"><p>Hotels in Sector33</p></a>
						<a href="#"><p>Hotels in Sector38</p></a>
						<a href="#"><p>Hotels in Sector41</p></a>
						<a href="#"><p>Hotels in Sector43</p></a>
						<a href="#"><p>Hotels in Sector45</p></a>
						<a href="#"><p>Hotels in Sector46</p></a>
						<a href="#"><p>Hotels in Sector47</p></a>
						<a href="#"><p>Hotels in Sector48</p></a>
						<a href="#"><p>Hotels in Sector49</p></a>
						<a href="#"><p>Hotels in Sector50</p></a>
					</div>
					<div class="col-lg-3 col-sm-12">
						<a href="#"><p>Hotels in Sector51</p></a>
						<a href="#"><p>Hotels in Sector52</p></a>
						<a href="#"><p>Hotels in Sector54<p></a>
						<a href="#"><p>Hotels in Sector55</p></a>
						<a href="#"><p>Hotels in Sector56</p></a>
						<a href="#"><p>Hotels in Sector57</p></a>
						<a href="#"><p>Hotels in Sector66</p></a>
						<a href="#"><p>Hotels in Sector69</p></a>
						<a href="#"><p>Hotels in Sector71</p></a>
						<a href="#"><p>Hotels in Sector110A</p></a>
					</div>
				</div>
				<div class="tab-pane txtdeco" id="hyderabad">
					<p class="bang">Hotels in Hyderabad</p>
					<div class="col-lg-3 col-sm-12">
						<a href="#"><p>Hotels in Chanda Nagar</p></a>
						<a href="#"><p>Hotels in Gachibowli</p></a>
						<a href="#"><p>Hotels in Hafeezpet</p></a>
						<a href="#"><p>Hotels in Kondapur</p></a>
						<a href="#"><p>Hotels in Kukatpally</p></a>
						<a href="#"><p>Hotels in Madhapur</p></a>
						<a href="#"><p>Hotels in Manikonda</p></a>
						<a href="#"><p>Hotels in Nanakramguda</p></a>
						<a href="#"><p>Hotels in Afzal Gunj</p></a>
						<a href="#"><p>Hotels in Amberpet</p></a>
					</div>
					<div class="col-lg-3 col-sm-12">
						<a href="#"><p>Hotels in Ameerpet</p></a>
						<a href="#"><p>Hotels in Ashok Nagar</p></a>
						<a href="#"><p>Hotels in Bakaram</p></a>
						<a href="#"><p>Hotels in Banjara Hills</p></a>
						<a href="#"><p>Hotels in Barkatpura</p></a>
						<a href="#"><p>Hotels in Begumpet</p></a>
						<a href="#"><p>Hotels in Bhoiguda</p></a>
						<a href="#"><p>Hotels in Bolarum </p></a>
						<a href="#"><p>Hotels in Central Secretariat </p></a>
						<a href="#"><p>Hotels in Chaitanyapuri Colony</p></a>
					</div>
					<div class="col-lg-3 col-sm-12">
						<a href="#"><p>Hotels in Chikkadapalli </p></a>
						<a href="#"><p>Hotels in Erragadda</p></a>
						<a href="#"><p>Hotels in Golconda </p></a>
						<a href="#"><p>Hotels in Hamayatnagar </p></a>
						<a href="#"><p>Hotels in Hyderabad City Bus Station</p></a>
						<a href="#"><p>Hotels in J N T U Hyd</p></a>
						<a href="#"><p>Hotels in King Koti</p></a>
						<a href="#"><p>Hotels in Langar House</p></a>
						<a href="#"><p>Hotels in Mehdipatnam</p></a>
						<a href="#"><p>Hotels in Miyapur</p></a>
					</div>

				</div>
				<div class="tab-pane txtdeco" id="noida">
					<p class="bang">Hotels Noida</p>
					<div class="col-lg-3 col-sm-12">
						<a href="#"><p>Hotels in Indirapuram</p></a>
						<a href="#"><p>Hotels in Sector 15</p></a>
						<a href="#"><p>Hotels in Sector 23</p></a>
						<a href="#"><p>Hotels in Sector 33</p></a>
						<a href="#"><p>Hotels in Sector 41</p></a>
						<a href="#"><p>Hotels in Sector 46</p></a>
						<a href="#"><p>Hotels in Sector 48</p></a>
						<a href="#"><p>Hotels in Sector 50</p></a>
						<a href="#"><p>Hotels in Sector 52</p></a>
						<a href="#"><p>Hotels in Sector 61</p></a>
						<a href="#"><p>Hotels in Sector 62</p></a>
					</div>
					<div class="col-lg-3 col-sm-12">
						<a href="#"><p>Hotels in Sector 70</p></a>
						<a href="#"><p>Hotels in Sector 71</p></a>
						<a href="#"><p>Hotels in Sector 72</p></a>
						<a href="#"><p>Hotels in Sector 74</p></a>
						<a href="#"><p>Hotels in Sector 76</p></a>
						<a href="#"><p>Hotels in Sector 77</p></a>
						<a href="#"><p>Hotels in Sector 78</p></a>
						<a href="#"><p>Hotels in Sector 82</p></a>
						<a href="#"><p>Hotels in Sector 110</p></a>
						<a href="#"><p>Hotels in Sector 120</p></a>
						<a href="#"><p>Hotels in Sector 137</p></a>
					</div>
				</div>
				<div class="tab-pane txtdeco" id="pune">
					<p class="bang">Hotels in Pune</p>
					<div class="col-lg-12 col-sm-12">
						<a href="#"><p>Hotels in Hadapsar</p></a>
						<a href="#"><p>Hotels in Mundhwa</p></a>
						<a href="#"><p>Hotels in Kharadi</p></a>
						<a href="#"><p>Hotels in Wakadewadi</p></a>
						<a href="#"><p>Hotels in Hinjawadi</p></a>
						<a href="#"><p>Hotels in Wanowrie</p></a>
						<a href="#"><p>Hotels in Baner</p></a>
						<a href="#"><p>Hotels in Pimple Saudagar</p></a>
						<a href="#"><p>Hotels in Pimple</p></a>
						<a href="#"><p>Hotels in Balewadi</p></a>
						<a href="#"><p>Hotels in Kothrud</p></a>
					</div>
				</div>
				<div class="tab-pane txtdeco" id="warangal">
					<p class="bang">Hotels in Warangal</p>
				</div>
			</div>
		</div>


		<div class="copyrt container col-lg-10 col-lg-10">
			<p>&copy; 2017 . All rights reserved.</p>
			</div>
			<div class="push-right col-lg-2 col-sm-2">Join us:
			<a href="#"><i class="fa fa-facebook" style="font-size:20px;color:white"></i></a>
			<a href="#"><i class="fa fa-twitter" style="font-size:20px;color:white"></i></a>
			</div>
		</div>
	</section>
 	<!-- ****************************** Footer Ends********************** -->

	<!-- ****************************** Modals  ************************** -->
		<!-- myModal1 -->
		  <div class="modal fade" id="myModal1" role="dialog">
		    <div class="modal-dialog modal-md">
		      <div class="modal-content">
		        <div class="modal-header">
		          <button type="button" class="close" data-dismiss="modal">&times;</button>
		          <h4 class="modal-title">Login In</h4>
		        </div>
		        <div class="modal-body">
		          <div class="row">
		          	<div class="col-md-6">
		          		<form action="loginProcess.php" class="loginForm">
						    <div class="form-group">						      
						      	<input type="text" class="form-control" id="mobile" placeholder="Mobile Number" name="email">
						    </div>
						    <div class="form-group">						      
						      	<input type="password" class="form-control" id="pwd" placeholder="Password" name="pwd">
						    </div>
						 	<div class="form-group row">
						 	  <div class="col-md-6">
						    	<button type="submit" class="btn btn-default subBtn">SUBMIT</button>
						    	</div>
						       <div class="col-md-6"><a href="#">Forgot Password?</a></div>
						   </div>
						</form>

		          	</div>
		          	<div class="col-md-6">
		          		<h5>Not a registered user? <a href="">Sign up now</a></h5>
						<h5>Corporate user <a href="">Click here</a></h5>
		          	</div>
		          </div>
		        </div>
		        <div class="modal-footer">
		          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		        </div>
		      </div>
		    </div>
		  </div>


		<!-- myModal2 -->
				  <div class="modal fade" id="myModal2" role="dialog">
				    <div class="modal-dialog modal-md">
				      <div class="modal-content">
				        <div class="modal-header">
				          <button type="button" class="close" data-dismiss="modal">&times;</button>
				          <h4 class="modal-title">Sign Up</h4>
				        </div>
				        <div class="modal-body">
				          <div class="row">
				          	<div class="col-md-6">
				          		<form action="loginProcess.php" class="loginForm">
				          			<div class="form-group">						      
								      	<input type="text" class="form-control" id="name" placeholder="Full Name" name="name">
								    </div>
								    <div class="form-group">						     <select name="country" id="country">
								    		<option value="0" disable selected>Select Country</option>
								    		<option value="1">India</option>
								    		<option value="2">USA</option>
								    		<option value="3">China</option>
								    		<option value="4">UK</option>
								    	</select> 
								      	
								    </div>
								    <div class="form-group">						      
								      	<input type="text" class="form-control" id="mobile" placeholder="Mobile Number" name="mobile">
								    </div>
								    <div class="form-group">						      
								      	<input type="email" class="form-control" id="mobile" placeholder="Email" name="email">
								    </div>
								    <div class="form-group">						      
								      	<input type="password" class="form-control" id="pwd" placeholder="Password" name="pwd">
								    </div>
								 	<div class="form-group row">
								 	  <div class="col-md-6">
								    	<button type="submit" class="btn btn-default subBtn">SUBMIT</button>
								    	</div>
								       
								   </div>
								</form>

				          	</div>
				          	<div class="col-md-6">
				          	  <ul class="sgnupLinks">
				          		<li>Book hotels faster. Get pre-filled details on booking window</li>
								<li>Access booking history</li>
								<li>Manage/Cancel bookings easily</li>
								<li>Password should have at least 8 characters including 1 special character.</li>
								<li>By signing up you agree to our <a href="">terms</a> and <a href="">privacy policy</a>.
							  </ul>
				          		
				          	</div>
				          </div>
				        </div>
				        <div class="modal-footer">
				          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				        </div>
				      </div>
				    </div>
				  </div>

	<!-- ****************************** Modals End ************************** -->
</body>
<script type="text/javascript">
$(document).ready(function($){
    $('li.iconItem').hover(
        function(){
            $('.popover',this).css({display: 'block'});
        },
        function(){
            $('.popover',this).css({display: 'none'});
        }
    );
});


</script>
</html>