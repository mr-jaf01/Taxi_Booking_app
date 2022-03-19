<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Taxi</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">							
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/jquery-ui.css">			
			<link rel="stylesheet" href="css/main.css">
		</head>
		<body>	
			  <header id="header">
		  		<div class="header-top">
				</div>
			    <div class="container main-menu">
			    	<div class="row align-items-center justify-content-between d-flex">
			    		<a href="index.php" class="font-weight-bold text-white">PLATEAU CAB</a>		
						<nav id="nav-menu-container">
							<ul class="nav-menu">
							  <li class="menu-active"><a href="index.php">Home</a></li>
							  <li><a href="#home">BOOK TEXI</a></li>  
							  <li><a href="about.php">About</a></li>
							  <li><a href="#services">Services</a></li>
							  <li><a href="driver.php">Drivers Panel</a></li>
							  <li><a href="cancelbook.php">Cancel Booking</a></li>
							  <li><a href="feedback.php">Feedback</a></li>
							  
							  					  			          	          
							  <li><a href="contact.php">Contact</a></li>
							</ul>
						</nav><!-- #nav-menu-container -->		
			    	</div>
			    </div>
			  </header><!-- #header -->

			<!-- start banner Area -->
			<section class="banner-area relative" id="home">
				<div class="overlay overlay-bg"></div>	
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-between">
						<div class="banner-content col-lg-6 col-md-6 ">
							<h6 class="text-white ">Need a ride? just call</h6>
							<h1 class="text-uppercase">
								+2348132911690				
							</h1>
							<p class="pt-10 pb-10 text-white">
								Whether you enjoy city breaks or extended holidays in the sun, you can always improve your travel experiences by staying in a small.
							</p>
							<a href="#" class="primary-btn text-uppercase">Call for taxi</a>
						</div>
						<div class="col-lg-4  col-md-6 header-right">
                            <h4 class="pb-30">Book Your Texi Online!</h4>
                            <div class="" style="margin-top: -14px">
                            
                            
                            
                            
                            
							<?php 
							include('db/connect_db.php');
							if(isset($_POST['submit'])){
							 $name = $_POST['name'];
                             $email = $_POST['email'];
							 $phone = $_POST['phone'];
							 $frompickup = $_POST['source'];
							 $destination = $_POST['destination'];
							 $pickupdate = $_POST['pickupdate'];
							 $pickuptime = $_POST['time'];
							 



								$query = "INSERT IGNORE INTO booking(name,email,phone,pickfrom,dropto,pickdate,picktime,status) 
								VALUES('$name','$email','$phone','$frompickup','$destination','$pickupdate','$pickuptime','New')";
								$run_query = mysqli_query($conn,$query);
								if($run_query){
									?>
									<p class="alert alert-success">Texi Book Successfully</p>
									<?php
								}else{
									?>
									<p class="alert alert-danger">Oops! Unable to Book Texi</p>
									<?php
								}

							 
							}
                             
                           
                            
                            
                            ?>





















                            </div>
							<form class="form" action="#" method="POST">
							    <div class="from-group">
							    	<input class="form-control txt-field" type="text" name="name" placeholder="Your name"  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your name'">
							    	<input class="form-control txt-field" type="email" name="email" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'">
							    	<input class="form-control txt-field" type="tel" name="phone" placeholder="Phone number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone number'">
							    </div>								
							    <div class="form-group">
							       	<div class="default-select" id="default-select">
										<select name="source">
											<option value="" disabled selected hidden>From Pick Up</option>
											<option value="Bauchi Pack Jos">Bauchi Pack Jos</option>
											<option value="Gangare Jos">Gangare Jos</option>
                                            <option value="Main Campus Uni Jos">Main Campus Uni Jos</option>
                                            <option value="Anguwar Rogo">Anguwar Rogo</option>
											<option value="Farin gada">Farin gada</option>
											<option value="Bukuru">Bukuru</option>
											<option value="Rukuba Barrack">Rukuba Barrack</option>
											<option value="Juth Lamingo">Juth Lamingo</option>
										</select>
									</div>
							    </div>
							    <div class="form-group">
							       	<div class="default-select" id="default-select2">
										<select name="destination">
											<option value="" disabled selected hidden>To Destination</option>
											<option value="Bauchi Pack Jos">Bauchi Pack Jos</option>
											<option value="Gangare Jos">Gangare Jos</option>
                                            <option value="Main Campus Uni Jos">Main Campus Uni Jos</option>
                                            <option value="Anguwar Rogo">Anguwar Rogo</option>
											<option value="Farin gada">Farin gada</option>
											<option value="Bukuru">Bukuru</option>
											<option value="Rukuba Barrack">Rukuba Barrack</option>
											<option value="Juth Lamingo">Juth Lamingo</option>
										</select>
									</div>
							    </div>							    
							    <div class="form-group">
									<div class="input-group dates-wrap">                                              
										<input id="datepicker2" name="pickupdate" class="dates form-control"  placeholder="Date & time" type="text">                        
										<div class="input-group-prepend">
											<span  class="input-group-text"><span class="lnr lnr-calendar-full"></span></span>
										</div>											
									</div>
							    </div>	
								<div class="form-group">

								<input class="form-control txt-field" type="time" name="time" placeholder="Pick Up time"  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Pick Up Time'">
							    </div>						    
							    <div class="form-group">

							            <button type="submit" name="submit" class="btn btn-default btn-lg btn-block text-center text-uppercase">Make reservation</button>

							    </div>
							</form>
						</div>											
					</div>
				</div>					
			</section>
			<!-- End banner Area -->	



			<section>
					<div class="row">
							<div class="col-md-12" style="width:900px; heigh:600px">
							<center>
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1965.0820633218807!2d8.891185957943852!3d9.920285390334028!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1053724d771dc70f%3A0x244424125d19dd8c!2sJos%20Main%20Market%2C%20Jos!5e0!3m2!1sen!2sng!4v1625260157986!5m2!1sen!2sng" width="900" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
							</center>
							
							</div>
					</div>		

			</section>

			<!-- Start home-about Area -->
			<section class="home-about-area section-gap">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6 about-left">
							<img class="img-fluid" src="img/about-img.jpg" alt="">
						</div>
						<div class="col-lg-6 about-right">
							<h1>Globally Connected
							by Large Network</h1>
							<h4>We are here to listen from you deliver exellence</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.								
							</p>
							<a class="text-uppercase primary-btn" href="#">Get Details</a>
						</div>
					</div>
				</div>	
			</section>
			<!-- End home-about Area -->
			
			<!-- Start services Area -->
			<section class="services-area pb-120" id="services">
				<div class="container">
					<div class="row section-title">
						<h1>What Services we offer to our clients</h1>
						<p>Who are in extremely love with eco friendly system.</p>
					</div>
					<div class="row">
						<div class="col-lg-4 single-service">
							<span class="lnr lnr-car"></span>
							<a href="#"><h4>Taxi Service</h4></a>
							<p>
								Usage of the Internet is becoming more common due to rapid advancement of technology and power.
							</p>
						</div>
						<div class="col-lg-4 single-service">
							<span class="lnr lnr-briefcase"></span>
							<a href="#"><h4>Office Pick-ups</h4></a>
							<p>
								Usage of the Internet is becoming more common due to rapid advancement of technology and power.
							</p>
						</div>
						<div class="col-lg-4 single-service">
							<span class="lnr lnr-bus"></span>
							<a href="#"><h4>Event Transportation</h4></a>
							<p>
								Usage of the Internet is becoming more common due to rapid advancement of technology and power.
							</p>
						</div>												
					</div>	
				</div>	
			</section>
			<!-- End services Area -->
			
			<!-- Start image-gallery Area -->
			<section class="image-gallery-area section-gap">
				<div class="container">
					<div class="row section-title">
						<h1>Image Gallery that we like to share</h1>
						<p>Who are in extremely love with eco friendly system.</p>
					</div>					
					<div class="row">
						<div class="col-lg-4 single-gallery">
							<a href="img/g1.jpg" class="img-gal"><img class="img-fluid" src="img/g1.jpg" alt=""></a>
							<a href="img/g4.jpg" class="img-gal"><img class="img-fluid" src="img/g4.jpg" alt=""></a>
						</div>	
						<div class="col-lg-4 single-gallery">
							<a href="img/g2.jpg" class="img-gal"><img class="img-fluid" src="img/g2.jpg" alt=""></a>
							<a href="img/g5.jpg" class="img-gal"><img class="img-fluid" src="img/g5.jpg" alt=""></a>						
						</div>	
						<div class="col-lg-4 single-gallery">
							<a href="img/g3.jpg" class="img-gal"><img class="img-fluid" src="img/g3.jpg" alt=""></a>
							<a href="img/g6.jpg" class="img-gal"><img class="img-fluid" src="img/g6.jpg" alt=""></a>
						</div>				
					</div>
				</div>	
			</section>
			<!-- End image-gallery Area -->
			
								
			<!-- Start home-calltoaction Area -->
			<section class="home-calltoaction-area relative">
				<div class="container">
					<div class="overlay overlay-bg"></div>
					<div class="row align-items-center section-gap">
						<div class="col-lg-8">
							<h1>Experience Great Support</h1>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
							</p>
						</div>
						<div class="col-lg-4 btn-left">
							<a href="#" class="primary-btn">Reach Our Support Team</a>
						</div>
					</div>
				</div>	
			</section>
			<!-- End home-calltoaction Area -->

			<!-- start footer Area -->		
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-2 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Quick links</h6>
								<ul>
									<li><a href="#">Jobs</a></li>
									<li><a href="#">Brand Assets</a></li>
									<li><a href="#">Investor Relations</a></li>
									<li><a href="#">Terms of Service</a></li>
								</ul>								
							</div>
						</div>
						<div class="col-lg-2 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Features</h6>
								<ul>
									<li><a href="#">Jobs</a></li>
									<li><a href="#">Brand Assets</a></li>
									<li><a href="#">Investor Relations</a></li>
									<li><a href="#">Terms of Service</a></li>
								</ul>								
							</div>
						</div>
						<div class="col-lg-2 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Resources</h6>
								<ul>
									<li><a href="#">Guides</a></li>
									<li><a href="#">Research</a></li>
									<li><a href="#">Experts</a></li>
									<li><a href="#">Agencies</a></li>
								</ul>								
							</div>
						</div>												
						<div class="col-lg-2 col-md-6 col-sm-6 social-widget">
							<div class="single-footer-widget">
								<h6>Follow Us</h6>
								<p>Let us be social</p>
								<div class="footer-social d-flex align-items-center">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-dribbble"></i></a>
									<a href="#"><i class="fa fa-behance"></i></a>
								</div>
							</div>
						</div>							
						<div class="col-lg-4  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Newsletter</h6>
								<p>Stay update with our latest</p>
								<div class="" id="mc_embed_signup">
									<form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">
										<input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">
			                            	<button class="click-btn btn btn-default"><span class="lnr lnr-arrow-right"></span></button>
			                            	<div style="position: absolute; left: -5000px;">
												<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
											</div>

										<div class="info"></div>
									</form>
								</div>
							</div>
						</div>	
						<p class="mt-80 mx-auto footer-text col-lg-12">
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This App is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#" target="_blank">ND 2 Computer Science, FPTB BAUCHI</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</p>											
					</div>
				</div>
				<img class="footer-bottom" src="img/footer-bottom.png" alt="">
			</footer>	
			<!-- End footer Area -->	

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
 			<script src="js/jquery-ui.js"></script>								
			<script src="js/jquery.nice-select.min.js"></script>							
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	
		</body>
	</html>