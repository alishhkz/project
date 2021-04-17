<!DOCTYPE html>
<html lang="en">
<head>
	<title>Project</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="C:\back-end\Project\project1\resources\css\pro1.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
	<section id="nav-bar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <a href="#" class="logo">eduX</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
			</div>
		  <div class="collapse navbar-collapse" id="navbarNav">
		    <ul class="navbar-nav ml-auto">
		      <li class="nav-item">
		        <a class="nav-link" href="#">Home</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#price">Courses</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" id="btn_log1" onclick="container2()" href="#">Login</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Sign Up</a>
		      </li>
			  <li><a href="">ru</a></li>
			  <li><a href="">en</a></li>
		    </ul>
		  </div>
		</nav>
	</section>




		<div id="slider">
			<div class="profile">
				<i class="fa fa-user-circle" style="font-size: 40px; color: #fff"></i>
				<p id="user_name"></p>
			</div>
			<img src="https://www.acap.edu.au/assets/Uploads/_resampled/ScaleWidthWyIxNDQwIl0/1440x520-New-Students.png" style="width: 100%">
			<div class="container2">
					<div class="row px-3">
						<div class="col-lg-10 col-xl-9 card flex-row mx-auto">
							<i class="fa fa-times" onclick="closed()" id="closed"></i>
							<div class="card-body">
								<h4 class="title text-center mt-4">Login</h4>
								<form class="form-box px-3">
									<div class="form-input">
										<span><i class="fa fa-envelope-o"></i></span>
										<input type="email" id="username" name="username" placeholder="Email" tabindex="10">
									</div>
									<div class="form-input">
										<span><i class="fa fa-key"></i></span>
										<input type="password" id="pass" placeholder="Password">
									</div>

									<div class="mb-3">
										<div class="custom-control custom-checkbox">
											<input type="checkbox" class="custom-control-input" id="cb1">
											<label class="custom-control-label" for="cb1">Remember me</label>
										</div>
									</div>

									<div class="mb-3">
										<button type="submit" class="btn btn-block text-uppercase"  id="btn_log" onclick="login(username.value)">Login</button>
									</div>

									<div class="text-right">
										<a href="#" class="forget-link">Forgot Password?</a>
									</div>

									<div class="text-center mb-3">
										or login with
									</div>
									<div class="row mb-3">
										<div class="col-5">
											<i class="fa fa-facebook" style="color: blue !important;"></i>
										</div>
										<div class="col-5">
											<i class="fa fa-google" style="color: red !important";></i>
										</div>
										<div class="col-2">
											<i class="fa fa-twitter" style="color: blue !important";></i>
										</div>
									</div>
									<hr class="my-4">
										<div class="text-center mb-2">
											Don't have an account
											<a href="#" class="register-link">
												Register here
											</a>
										</div>
								</form>
							</div>
						</div>
					</div>
				</div>
		</div>






				<section id="about">

							<h2>Top categories</h2>
							<div class="card-deck" style="width: 90%">
  								<div class="card" style="margin-left: 200px">
    							<img class="card-img-top img-fluid" src="https://ultimaxdesigns.com/wp-content/uploads/2020/07/h5J594mu7Wh2NG4cYEyesj-1200-80.png">
    								<div class="card-body">
      								<p class="card-text">Design</p>
    								</div>
  								</div>
  									<div class="card">
			    					<img class="card-img-top img-fluid"  src="https://images.unsplash.com/photo-1515879218367-8466d910aaa4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80">
			    						<div class="card-body">
			      						<p class="card-text">Programming</p>
			    						</div>
			 	 					</div>
			  							<div class="card">
			    						<img class="card-img-top" src="https://www.educationcenter.cz/assets/images/test/marketing-med-aesthetics-group.jpg">
			    							<div class="card-body">
			      							<p class="card-text">Marketing</p>
			    							</div>
			  						</div>
			  							<div class="card">
    									<img class="card-img-top" src="https://chiefexecutive.net/wp-content/uploads/2018/11/AdobeStock_92323963-compressor-1024x662.jpeg">
    										<div class="card-body">
      										<p class="card-text">IT & Software</p>
    										</div>
  										</div>

							</div>
								<div class="card-deck" style="width: 90%">
		  							<div class="card" style="margin-left: 200px">
		    						<img class="card-img-top" src="https://www.top10weddingphotographerstoronto.com/wp-content/uploads/2019/03/videography.jpg">
		    							<div class="card-body">
		      							<p class="card-text">Videographer</p>
		    							</div>
		  							</div>
		  								<div class="card">
					    				<img class="card-img-top" src="https://www.kpinternational.co.uk/wp-content/uploads/2018/11/businessman-man-person-990818.jpg">
					    					<div class="card-body">
					      					<p class="card-text">Bussiness</p>
					    					</div>
					 	 				</div>
					  			<div class="card">
					    		<img class="card-img-top" src="https://images.unsplash.com/photo-1542038784456-1ea8e935640e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80">
					    			<div class="card-body">
					      				<p class="card-text">Photography</p>
					    			</div>
					  			</div>
					  				<div class="card">
		    						<img class="card-img-top" src="https://i.insider.com/5ba3df199c888d60318b4569?width=1100&format=jpeg&auto=webp">
		    							<div class="card-body">
		      							<p class="card-text">Music</p>
		    							</div>
		  							</div>


					</div>

				</section>
					<section id="services">
						<div class="container">
							<h1>Our Services</h1>
							<div class="row services">
								<div class="col-md-4 text-center">
									<div class="icon">
										<i class="fa fa-desktop"></i>
									</div>
									<h3>Web Development</h3>
									<p>Web development is the process of creating a website or web application. The main stages of the process are web design, page layout, client-side and server-side programming, and web server configuration.</p>
								</div>
									<div class="col-md-4 text-center">
									<div class="icon">
										<i class="fa fa-tablet"></i>
									</div>
									<h3>App Development</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat.</p>
									</div>
										<div class="col-md-4 text-center">
											<div class="icon">
											<i class="fa fa-gamepad"></i>
											</div>
											<h3>Game Development</h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat.</p>
										</div>
							</div>
						</div>
				</section>
					<section id="price">
						<div class="container">
							<h1>Price For Course</h1>
							<div class="row">
								<div class="col-md-3">
									<div class="single-price">
										<div class="price-head">
											<h2>Free</h2>
											<p>$0/<span>month</span></p>
										</div>
										<div class="price-content">
											<ul>
												<li><i class="fa fa-check-circle"></i>5 Courses</li>
												<li><i class="fa fa-check-circle"></i>10 Electronic Books</li>
												<li><i class="fa fa-times-circle"></i>Advertising</li>
												<li><i class="fa fa-times-circle"></i>Unlimited</li>
												<li><i class="fa fa-times-circle"></i>Unlimited Support</li>
											</ul>
										</div>
										<div class="price-button">
											<a class="buy-btn" href="#">Join Free</a>
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="single-price">
										<div class="price-head">
											<h2>Start</h2>
											<p>$10/<span>month</span></p>
										</div>
										<div class="price-content">
											<ul>
												<li><i class="fa fa-check-circle"></i>15 Courses</li>
												<li><i class="fa fa-check-circle"></i>100 Electronic Books</li>
												<li><i class="fa fa-check-circle"></i>15 Videos</li>
												<li><i class="fa fa-times-circle"></i>Unlimited</li>
												<li><i class="fa fa-times-circle"></i>Unlimited Support</li>
											</ul>
										</div>
										<div class="price-button">
											<a class="buy-btn" href="#">Buy Now</a>
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="single-price">
										<div class="price-head">
											<h2>Business</h2>
											<p>$50/<span>month</span></p>
										</div>
										<div class="price-content">
											<ul>
												<li><i class="fa fa-check-circle"></i>50 Courses</li>
												<li><i class="fa fa-check-circle"></i>200 Electronic Books</li>
												<li><i class="fa fa-check-circle"></i>50 Videos</li>
												<li><i class="fa fa-check-circle"></i>Unlimited</li>
												<li><i class="fa fa-times-circle"></i>Unlimited Support</li>
											</ul>
										</div>
										<div class="price-button">
											<a class="buy-btn" href="#">Buy Now</a>
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="single-price">
										<div class="price-head">
											<h2>Advanced</h2>
											<p>$100/<span>month</span></p>
										</div>
										<div class="price-content">
											<ul>
												<li><i class="fa fa-check-circle"></i>100+ Courses</li>
												<li><i class="fa fa-check-circle"></i>Unlimited Books</li>
												<li><i class="fa fa-check-circle"></i>Unlimited Videos</li>
												<li><i class="fa fa-check-circle"></i>Unlimited</li>
												<li><i class="fa fa-check-circle"></i>Unlimited Support</li>
											</ul>
										</div>
										<div class="price-button">
											<a class="buy-btn" href="#">Buy Now</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
						<!-- Footer -->
						<footer>
							<div class="container1">
								<div class="sec aboutus">
									<h2>About Us</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat.</p>

									<ul class="sci">
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-instagram"></i></a></li>
								</ul>
								</div>
								<div class="sec quickLinks">
									<h2>Links</h2>
									<ul>
										<li><a href="#">About Us</a></li>
										<li><a href="#">FAQ</a></li>
										<li><a href="#">Blog</a></li>
										<li><a href="#">Help</a></li>
										<li><a href="#">Contact</a></li>
									</ul>
								</div>
			
									<section class="contact" id="contact">
        			<div class="max-width">
            		<h2 class="title">Contact me</h2>
						<div class="contact-content">
                			<div class="column left">



										</div>


									</div>
							</div>
                				<div class="column right" >

									<form method="POST" action="{{ route('addimage') }}" enctype="multipart/form-data">
									{{ csrf_field() }}
									<div class="fields">
                            				<div class="field name">
                               				<input  type="text" name="name" placeholder="Name" required>
                            				</div>
                            					<div class="field email">
                                				<input  type="text" name="email" placeholder="Email" required>
                           						</div>
                        				</div>

                        					<div class="field textarea">

                            				<input type="text" name="message" placeholder="message">
											
                        					</div>
											<input type="file" name="image"> 
                        						<div class="button">
                            					<button type="submit" name="submit">Send message</button>
                        						</div>
									</form>
                				</div>
                		</div>

					</div>
				</section>


							</div>

						</footer>

						<div class="copyright">
								<p>Copyright © 2021 EduX Academy</p>
						</div>
						<style>
							html {
	scroll-behavior: smooth;
}
* {
	margin: 0;
	padding: 0;

}
body {
		position: absolute;
		/*overflow-x: hidden;  disable horizontal scrolling.*/ 
}
/*----------HEADER NAV-BAR-------------*/
#nav-bar { 	
	top: 0;
	z-index: 10;
	cursor: pointer;
}
.navbar-brand img {
	height: 50px;
	padding-left: 30px;
}
.navbar-nav li { 
	padding: 0 10px;
}
.navbar-nav li a { 
	float: right;
	text-align: left;
}
.nav-bar ul li a:hover {
	color: #007bff!important;
}
.navbar {
	background: #fff;
}
.navbar-toggler {
	border: none!important;
}
.nav-link {
	color: #555!important;
	font-weight: 600;
	font-size: 16px;
}
#slider {
	width: 100%;
	cursor: pointer;
}
/*-------------logo------------*/
.logo {
	font-size: 1.25rem;
    font-weight: 800;
    color: #000;
    cursor: pointer;
    margin-left: 30px;
    text-decoration: none !important;
}
/*-----------------box----------------*/
.container2 {
	position: absolute !important;
	top: 170px;
	display: none;
	justify-content: center;
	width: 100%;
	height: 300px;
	opacity: 0;
}
.card {
	border: 1 !important;
	border-radius: 5px !important;
	width: 500px !important;
	box-shadow: 0 0.5rem 1rem 0 rgba(0,0,0 0.1);
	background-size: cover;
	overflow: hidden;
}
.card img {
	transition: all 1.2s ease;
}
.card:hover img{
	transform: scale(1.2);
}
.card h4 {
	text-align: center;
}
.text-right a {
	margin-right: 65px;
}
.card-body {
	padding: 2rem; 
	margin-right: 20px auto;
}
.title {
	margin-bottom: 2rem;
}
/*-------------box end--------------*/

/*----------profile-----------------*/
.profile {
	position: absolute;
	top: 70px;
	right: 20px;
	margin: 0;
	background-color: rgba(0,0,0, 0.4);
	display: none;
}
#user_name {
	display: inline;
	margin: 0;
	padding: 10px;
	color: #fff;
	font-size: 21px;
	font-family: Verdana, Geneva, Tahoma, sans-serif;
}
.form-input {
	position: relative;
}
.form-input input {
	width: 100%;
	height: 45px;
	padding-left: 40px;
	margin-bottom: 20px;
	box-sizing: border-box;
	box-shadow: none;
	border: 1px solid #00000020;
	border-radius: 50px;
	outline: none;
	background: transparent;

}
.form-input span {
	position: absolute;
	top: 10px;
	padding-left: 20px;
	color: #007bff;
}
.form-input input::placeholder {
	color: #000;
	padding-left: 0px;
}
.form-input input:focus, .form-input input:valid {
	border: 2px solid #007bff;
}
.form-input input:focus::placeholder {
	color: #454b69;
}
.form-box button[type="submit"] {
	margin-top: 10px;
	border: none;
	cursor: pointer;
	border-radius: 50px;
	background: #007bff;
	color: #fff;
	font-size: 90%;
	font-weight: bold;
	letter-spacing: .1rem;
	transition: 0.5s;
	padding: 12px;
}
.form-box button:hover {
	background: #0069d9;
}
.forget-link, .register-link {
	color: #007bff;
	font-weight: bold;
}
#closed {
	position: relative;
	cursor: pointer;
}
#services {
	background-image: linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0.8));
	background-size: cover;
	background-position: center;
	color: #efefef !important;
	background-attachment: fixed;
	padding-top: 50px;
	padding-bottom: 50px;
}
#services h1{
	text-align: center;
	color: #efefef !important;
	padding-bottom: 10px;
}
#services h1::after{
	content: '';
	background: #efefef;
	display: block;
	height: 3px;
	width: 170px;
	margin: 20px auto 5px;
}
.services {
	margin-top: 40px;
}
.icon {
	font-size: 40px;
	margin: 20px auto;
	padding: 10px;
	height: 80px;
	width: 80px;
	border: 1px solid #fff;
	border-radius: 50%;
}
.card img {
	height: 200px !important;
}
.card {
	margin-bottom: 30px !important;
}
#about h2 {
	margin: 10px 0 30px 50px;
}
.services .col-md-4:hover {
	background: #007bff;
	cursor: pointer;
	transition: 0.7s;
}
h1 {
	text-align: center;
	color: #555;
	padding-bottom: 10px;
}
h1::after {	
	content: '';
	background: #007bff;
	display: block;
	height: 3px;
	width: 170px;
	margin: 20px auto 5px;
}
#price  {
	padding-top: 50px;
	padding-bottom: 50px;
	color: #555;
}
.single-price {
	margin: 10px auto;
	display: inline;
	float: left;
	width: 100%;
	background-color: #fff;
	transition: 0.5s; 

}
.single-price::hover {
	box-shadow: 0 2px 20px #333;
}
.price-head {
	background-color: #2196f3;
	display: inline;
	float: left;
	padding: 10px 5px;
	text-align: center;
	width: 100%;
}
.price-head h2 {
	color: #fff;
	font-size: 30px;
	font-weight: bold;
	margin-bottom: 5px;
	padding: 5px;
	text-transform: uppercase;
}
.price-head p {
	font-size: 25px;
	color: #fff;
	font-weight: bold;
	line-height: 30px;
}
#price span {
	font-size: 15px;
}
.price-content {
	display: inline;
	float: left;
	width: 100%;
	padding: 0 15px;
}
.price-content ul li {
	border-bottom: 1px solid #efefef;
	padding: 15px 10px;
	list-style: none;
}
ul li:last-child {
	border: none;
}
.fa-check-circle {
	color: green;
	margin-right: 10px;
	font-size: 20px;
}
.fa-times-circle {
	color: red;
	margin-right: 10px;
	font-size: 20px;
}
.price-button {
	display: inline;
	float: left;
	padding: 15px 15px 30px;
	text-align: center;
	width: 100%;
}
.buy-btn {
	background-color: #2196f3;
	border-radius: 3px;
	display: inline-block;
	font-size: 18px;
	padding: 15px 50px;
	transition: 0.5s;
}
.buy-btn:hover {
	border-color: 1px solid #fff;
	background-color: #3f51b5; 
}
.price-button a {
	text-decoration: none !important;
	color: #fff !important;
}
footer {
	position: relative;
	width: 100%;
	height: auto;
	padding: 50px 100px;
	background: rgba(0,0,0,0.8);
	display: flex;
	justify-content: space-between;
	flex-wrap: wrap;
}
footer .container1 {
	display: flex;
	flex-direction: row;
	flex-wrap: wrap;
	flex-direction: row;	
}
footer .container1 .sec {
	margin-right: 30px;
}
footer .container1 .sec.aboutus {
	width: 40%;

}
footer .container1  h2 {
	position: relative;
	color: #fff;
	font-weight: 500;
	margin-bottom: 15px;
}
footer .container1  h2:before {
	content: '';
	position: absolute;
	bottom: -5px;
	left: 0;
	width: 50px;
	height: 2px;
	background: #efefef;
}
footer p {
	color: #fff;
}
.sci {
	margin-top: 20px;
	display: flex;
}
.sci li {
	list-style: none;
}
.sci li a {
	display: inline-block;
	width: 40px;
	height: 40px;
	background: #222;
	display: flex;
	justify-content: center;
	align-items: center;
	margin-right: 10px;
	text-decoration: none;
	border-radius: 4px;
}
.sci li a:hover {
	background: #f00;
}
.sci li a .fa {
	color: #fff;
	font-size: 20px;
}
.quickLinks {
	position: relative;
	width: 25%;

}
.quickLinks ul li  {
	list-style: none;
}
.quickLinks ul li a {
	color: #fff;
	text-decoration: none;
	margin-bottom: 10px;
	display: inline-block;
}
.quickLinks ul li a:hover {
	color: #999;
}
.contact {
	width: calc(35% - 60px);
	margin-right: 0 !important;
}
.contact .info {
	position: relative;
}
.contact .info li {
	display: flex;
	margin-bottom: 16px;
}
.contact .info li span:nth-child(1) {
	color: #fff;
	font-size: 20px;
	margin-right: 10px;
}
.contact .info li span {
	color: #fff;
}
.contact .info li a {
	color: #fff;	
	text-decoration: none;
}
.contact .info li a:hover {
	color: #999;
}
.copyright {
	width: 100%;
	background: #181818;
	padding: 8px 100px;
	text-align: center;
	color: #fff;
}


@media screen and (max-width: 991px) {
	footer {
		padding: 40px;
	}
	footer .container1 {
		flex-direction: column;
	}
	footer .container1 .sec {
		margin-right: 0;
		margin-bottom: 40px;
	}
	footer .container1 .sec.aboutus, .quickLinks, .contact{
    width: 100%;
    padding: 0;
    margin: 0;
	}
	.copyright {
    padding: 8px 40px;
	}
	.nav-link {
		font-size: 22px;
	}
	#navbarNav .nav-item{
		margin: 0 auto;
		text-align: center !important;
		justify-content: center;
	}
	#about .card {
		width: 60%;
		margin-left: 110px !important;
	}
}


@media (max-width: 800) {
	.container2 {
		position: absolute;
		top: 500px;
		display: flex;
	}
}
@media only screen and (max-width: 1000px) {
/*  large devices,wide screens*/
	
}
@media only screen and (max-width: 992px) {
    /*medium devices and desktops*/
    	.card {
	border: 1 !important;
	border-radius: 5px !important;
	width: 250px;
	height: 150px;
	box-shadow: 0 0.5rem 1rem 0 rgba(0,0,0 0.1);
	background-size: cover;
	overflow: hidden;
}
	.card-img-top {
	width: 250px;
	height: 150px;
	box-shadow: 0 0.5rem 1rem 0 rgba(0,0,0 0.1);
	background-size: cover;
	overflow: hidden;
	}


}
@media only screen and (max-width: 768px) {
    /*small devices tablets*/
   /* 	.card .card-img-top {
		height: 200px;
	}*/
	.card {
	border: 1 !important;
	border-radius: 5px !important;
	width: 150px;
	height: 150px;
	box-shadow: 0 0.5rem 1rem 0 rgba(0,0,0 0.1);
	background-size: cover;
	overflow-x: hidden;
}
	.card-img-top {
	border: 1 !important;
	border-radius: 5px !important;
	width: 250px;
	height: 250px;
	box-shadow: 0 0.5rem 1rem 0 rgba(0,0,0 0.1);
	background-size: cover;
	overflow: hidden;
	}


}
@media only screen and (max-width: 480px) {
    /*extra small devices phones*/
/*    	.card .card-img-top {
		height: 200px;
		width: 40%;
	}*/
	    	.card {
	border: 1 !important;
	border-radius: 5px !important;
	width: 250px;
	height: 150px;
	box-shadow: 0 0.5rem 1rem 0 rgba(0,0,0 0.1);
	background-size: cover;
	overflow: hidden;
}
	.card-img-top {
	border: 1 !important;
	border-radius: 5px !important;
	width: 250px;
	height: 150px;
	box-shadow: 0 0.5rem 1rem 0 rgba(0,0,0 0.1);
	background-size: cover;
	overflow: hidden;
	}

}
/*----------Section CONTACT-----------*/
.max-width {
	color: #fff;
	font-family: "SF Mono","Fira Code","Fira Mono","Roboto Mono",monospace;
}
.contact .contact-content .column{
    width: calc(50% - 30px);
}
.contact .contact-content .text{
    font-size: 20px;
    font-weight: 600;
    color: #fff;
    margin-bottom: 10px;
}
.contact .contact-content .left p{
    text-align: justify;
}
.contact .contact-content .left .icons{
    margin: 10px 0;
}
.contact .contact-content .row{
    display: flex;
    height: 65px;
    align-items: center;
}
.contact .contact-content .row .info{
    margin-left: 30px;
}
.contact .contact-content .row i{
    font-size: 25px;
    color: #64ffda;;
}
.contact .contact-content .info .head{
    font-weight: 500;
}
.contact .contact-content .info .sub-title{
    color: #fff;
}


.contact .right form .field,
.contact .right form .fields .field{
    height: 45px;
    width: 80%;
    margin-bottom: 15px;
}
.contact .right form .textarea{
    height: 80px;
    width: 80%;
}

.contact .right form .field input,
.contact .right form .textarea textarea{
    height: 100%;
    width: 90%;
    border: 1px solid lightgrey;
    border-radius: 6px;
    outline: none;
    padding: 0 15px;
    font-size: 17px;
    font-family:  "SF Mono","Fira Code","Fira Mono","Roboto Mono",monospace;
    transition: all 0.3s ease;
}
.contact .right form .field input:focus,
.contact .right form .textarea textarea:focus{
    border-color: #b3b3b3;
}
.contact .right form .textarea textarea{
    padding-top: 10px;
    resize: none;
}

.contact .right form .button{
    height: 47px;
    width: 170px;
    margin-top: 20px;
}
.contact .right form .button button{
    width: 100%;
    height: 100%;
    border: 2px solid #64ffda;
    background: #64ffda;
    color: #000;
    outline: none;
    font-size: 18px;
    font-weight: bold;
    border-radius: 50px;
    cursor: pointer;
    transition: all 0.3s ease;
    font-family:  "SF Mono","Fira Code","Fira Mono","Roboto Mono",monospace;
}
.contact .right form .button button:hover{
    color: #fff;
    background: none;
}
						</style>
</body>
</html>
