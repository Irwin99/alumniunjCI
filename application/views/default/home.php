<!DOCTYPE html>
<html>
  <head>
  <?php $this->load->view('templates/header.php'); ?>
  </head>
<body data-spy="scroll" data-target=".navbar-fixed-top">
<nav class="navbar navbar-default navbar-fixed-top">
	<div class="vcd-topbar">
		<div class="container">
			<div class="col-md-3">
				<i class="fa fa-map-marker fa-fw"></i> DKI Jakarta
			</div>
			<div class="col-md-3 col-md-offset-6">
				<a href="#" data-toggle="modal" data-target="#loginModal" style="color:white">
					<i class="fa fa-user fa-fw"></i> Login/Register
				</a>	
			</div>
		</div>
	</div>
	<div class="vcd-navbar">
		  	<div class="container">
				<div class="col-md-4">
					<div class="col-md-3 hidden-xs">
						<img src="<?php echo base_url('asset/images/logo.png')?>" class="img-responsive" style="margin-top:10px;">
					</div>
					<div class="col-md-3 col-xs-6 visible-xs">
						<img src="<?php echo base_url('asset/images/logo.png')?>" class="img-responsive" style="margin-top:10px">
					</div>
					<div class="col-md-9 col-xs-6">
						<h1><b>Alumni</b> UNJ</h1>
					</div>
				</div>
				<div class="col-md-8 col-xs-12 col-sm-12">
					<nav class="navbar navbar-default ">
						<div class="nav menu sf-menu responsive-menu superfish sf-js-enabled">
					      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#vcd-collapse-nav" aria-expanded="false">
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					      </button>
					    </div>
						<div class="collapse navbar-collapse" id="vcd-collapse-nav">
							<ul class="nav navbar-nav">
						        <li class="active"><a href="#home">Home <span class="sr-only">(current)</span></a></li>
						        <li><a href="#about">About</a></li>
						        <li><a href="#package">Tokoh Alumni</a></li>
						        <li><a href="#decoration">Alumni</a></li>
						        <li><a href="#gallery">News</a></li>
						        <li><a href="#contact">Contact Us</a></li>
						        <!-- <li class="dropdown">
						          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
						          <ul class="dropdown-menu">
						            <li><a href="#">Action</a></li>
						            <li><a href="#">Another action</a></li>
						            <li><a href="#">Something else here</a></li>
						            <li role="separator" class="divider"></li>
						            <li><a href="#">Separated link</a></li>
						            <li role="separator" class="divider"></li>
						            <li><a href="#">One more separated link</a></li>
						          </ul>
						        </li> -->
						      </ul>
						</div>
					</nav>
				</div>
			</div>
	</div>
</nav>
<section id="home">
	<div class="vcd-carousel">
		<!-- Carousel
	    ================================================== -->
	    <div id="myCarousel" class="carousel slide" data-ride="carousel">
	      <!-- Indicators -->
	      <ol class="carousel-indicators">
	        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	        <!-- <li data-target="#myCarousel" data-slide-to="1"></li>
	        <li data-target="#myCarousel" data-slide-to="2"></li> -->
	      </ol>
	      <div class="carousel-inner" role="listbox">
	        <div class="item active">
	          <img class="first-slide" src="<?php echo base_url('asset/images/alumni.jpg')?>" alt="First slide">
	          <div class="container">
	            <div class="carousel-caption">
	              <h1>Alumni UNJ</h1>
	              <p>Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet</p>
	              <p><a class="btn btn-lg vcd-btn-primary btn-rd" href="#" role="button">Sign up today</a></p>
	            </div>
	          </div>
	        </div>
	        <!-- <div class="item">
	          <img class="second-slide" src="images/wedding2.png" alt="Second slide">
	          <div class="container">
	            <div class="carousel-caption">
	              <h1>Alumni UNJ</h1>
	              <p>Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet</p>
	              <p><a class="btn btn-lg vcd-btn-primary" href="#" role="button">Learn more</a></p>
	            </div>
	          </div>
	        </div>
	        <div class="item">
	          <img class="third-slide" src="images/wedding3.webp" alt="Third slide">
	          <div class="container">
	            <div class="carousel-caption">
	              <h1>Alumni UNJ</h1>
	              <p>Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet</p>
	              <p><a class="btn btn-lg vcd-btn-primary" href="#" role="button">Browse gallery</a></p>
	            </div>
	          </div>
	        </div> -->
	      </div>
	      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
	        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	        <span class="sr-only">Previous</span>
	      </a>
	      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
	        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	        <span class="sr-only">Next</span>
	      </a>
	    </div><!-- /.carousel -->
	</div>
</section>
<section id="about">
	<div class="vcd-about">
		<div class="container">
			<div class="col-sm-6 col-md-6 col-xs-12 text-center">
				<h1>ABOUT <b>US</b></h1>
			</div>
			<div class="col-sm-6 col-md-6 col-xs-12 text-center">
				<p>
					Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet
				</p>
				<a class="btn btn-sm vcd-btn-primary btn-rd" href="#" role="button">Read More</a>
			</div>
		</div>
	</div>
	<div class="vcd-banner">
		<img src="<?php echo base_url('asset/images/alumni2.jpg')?>" alt="Img" class="img-responsive">
		<div class="overlay-image"></div>
		<div class="play-button-container">
			Our Alumni is <b>Special</b><br />
			Then, Make People <b>Special</b>
		</div>
	</div>
</section>
	<div class="vcd-package">
		<section id="package">
		<div class="container">
			<h2>Tokoh <b>Alumni</b></h2><br/>
			<div class="row">
				<div class="col-md-3 col-sm-4 col-xs-6">
					<div id="vcd-box">
						<img src="<?php echo base_url('asset/images/profil2.jpg')?>" alt=Img class="img-responsive"></img>
					</div>
					<div class="price-list text-center">
						<h2><c>Ahmad Junaedi</c></h2>
					
					<div class="list-name text-center">
						<!-- <table class="table table-striped">
						<tbody>
							<tr><td>Rias Pengantin 1 Pasang (Akad & Resepsi Di Gedung)</td></tr>
							<tr><td>Rias Orang Tua 2 Orang</td></tr>
							<tr><td>Busana Lengkap & Accesoris 	</td></tr>	
						</tbody>
						</table> -->
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. 
					</div>
					</div>
				</div> 
				<div class="col-md-3 col-sm-4 col-xs-6">
					<div id="vcd-box">
						<img src="<?php echo base_url('asset/images/profil2.jpg')?>" alt=Img class="img-responsive"></img>
					</div>
					<div class="price-list text-center">
						<h2><c>Abrar Gilbran</c></h2>
					
					<div class="list-name text-center">
						<!-- <table class="table table-striped">
						<tbody>
							<tr><td>Rias Pengantin 1 Pasang (Akad & Resepsi Di Gedung)</td></tr>
							<tr><td>Rias Orang Tua 2 Orang</td></tr>
							<tr><td>Busana Lengkap & Accesoris 	</td></tr>	
						</tbody>
						</table> -->
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. 
					</div>
					</div>
				</div> 
				<div class="col-md-3 col-sm-4 col-xs-6">
					<div id="vcd-box">
						<img src="<?php echo base_url('asset/images/profil2.jpg')?>" alt=Img class="img-responsive"></img>
					</div>
					<div class="price-list text-center">
						<h2><c>Dewi Santika</c></h2>
					
					<div class="list-name text-center">
						<!-- <table class="table table-striped">
						<tbody>
							<tr><td>Rias Pengantin 1 Pasang (Akad & Resepsi Di Gedung)</td></tr>
							<tr><td>Rias Orang Tua 2 Orang</td></tr>
							<tr><td>Busana Lengkap & Accesoris 	</td></tr>	
						</tbody>
						</table> -->
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. 
					</div>
					</div>
				</div> 
				<div class="col-md-3 col-sm-4 col-xs-6">
					<div id="vcd-box">
						<img src="<?php echo base_url('asset/images/profil2.jpg')?>" alt=Img class="img-responsive"></img>
					</div>
					<div class="price-list text-center">
						<h2><c>Kartini Wilujeng</c></h2>
					
					<div class="list-name text-center">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. 
					</div>
					</div>
				</div> 
				<div class="row">
					<div class="col-md-3"></div>
					<div class="col-md-6 col-xs-12">
						<br/><a class="btn btn-block btn-lg vcd-btn-primary btn-rd" href="#" role="button">View All Alumni</a>
					</div>
					<div class="col-md-3"></div>
				</div>
			</div> <!-- end of row -->
<section id="decoration">
			<div><br/><br/>
				<h2>Daftar <b>Alumni</b></h2><br/><br/>
			</div>

			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<center>
					<img src="<?php echo base_url('asset/images/infografis2.png')?>" alt=Img class="img-responsive"><br />
					</center>
					<div class="price-list text-center">
						<h2><c>Lulusan UNJ: 27310</c></h2>
					
					<div class="list-name text-center">
						<table class="table table-striped">
						<tbody>
							<tr><td>Fakultas Ekonomi (2473)</td></tr>
							<tr><td>Fakultas Ilmu Pendidikan (7751)</td></tr>
						</tbody>
						</table>
					</div>
					<center>
					<br />
						<button class="btn btn-md vcd-btn-primary btn-rd">View All</button><br /><br />
					</center>
					</div>
				</div> 
			</div> <!-- end of row-->
		</div> <!-- end of container -->	
		</section>
	</div> <!-- end of vcd-pckage -->
	<div class="vcd-banner">
		<img src="<?php echo base_url('asset/images/alumni2.jpg')?>" alt="Img" class="img-responsive">
		<div class="overlay-image"></div>
		<div class="play-button-container">
			Build Your <b>Target</b> Goal <br />
			Build Your <b>Future</b> Life
		</div>
	</div>	
<section id="gallery">
<div class="vcd-gallery">
	<div class="container text-center">
			<div><br/><br/>
				<h2>All <b>News</b></h2><br/><br/>
			</div>
		<div class="row">
			<div class="col-sm-4 col-md-3 col-xs-6 text-center">
				<center>
				<img src="<?php echo base_url('asset/images/profil1.jpg')?>" alt=Img class="img-responsive"></img><br />
				</center>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			</div>
			<div class="col-sm-4 col-md-3 col-xs-6 text-center">
				<center>
				<img src="<?php echo base_url('asset/images/profil1.jpg')?>" alt=Img class="img-responsive"></img><br />
				</center>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			</div>
			<div class="col-sm-4 col-md-3 col-xs-6 text-center">
				<center>
				<img src="<?php echo base_url('asset/images/profil1.jpg')?>" alt=Img class="img-responsive"></img><br />
				</center>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			</div>
			<div class="col-sm-4 col-md-3 col-xs-6 text-center">
				<center>
				<img src="<?php echo base_url('asset/images/profil1.jpg')?>" alt=Img class="img-responsive"></img><br />
				</center>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			</div>
		</div><br/><!-- end of row-->
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6 col-xs-12">
				<br/><a class="btn btn-block btn-lg vcd-btn-primary btn-rd" href="#" role="button">View All News</a>
			</div>
			<div class="col-md-3"></div>
		</div>
	</div><!-- end of container -->
</div>
</section>
	<div class="vcd-banner">
		<img src="<?php echo base_url('asset/images/alumni2.jpg')?>" alt="Img" class="img-responsive">
		<div class="overlay-image"></div>
		<div class="play-button-container">
			Good <b>Person</b> Comes From <br />
			Good <b>College</b>
		</div>
	</div>
	<div class="vcd-contact">
		<div class="container">
			<div class="col-sm-6 col-md-6 col-xs-12 text-center">
				<div class="col-sm-6 col-md-6 col-xs-12" style="padding-left: 0px">
			<p><input class="form-control" type="text" name="nama" placeholder="Nama"></p>
				</div>
				<div class="col-sm-6 col-md-6 col-xs-12" style="padding-right: 0px">
			<p><input class="form-control" type="text" name="email" placeholder="Email"></p>
				</div>
			<p><input class="form-control" type="text" name="subject" placeholder="Subject"></p>
			<p> <textarea class="form-control" rows="3" id="message" placeholder="Message"></textarea></p>
			<a class="btn btn-sm vcd-btn-primary" href="#" role="button">Submit</a>
			</div>
<section id="contact">			
			<div class="col-sm-6 col-md-6 col-xs-12 text-center">
			<div class="vcd-contact-us">
				<h1>CONTACT <b>US</b></h1>
			</div>
			</div>
		</div>
	</div>
</section>

<div id="loginModal" class="modal fade in" role="dialog">
	<div class="modal-dialog modal-lg product-modal">
		<div class="modal-content flat text-center" style="border-radius:0px">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<i class="fa fa-close fa-2x"></i>
				</button>
				<h4 class="modal-title">Login / Register</h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-6" style="border-right:1px solid #e0e0e0">
						<div class="input-group margin-bottom-sm form-group" style="border-radius:0px">
							<span class="input-group-addon"><i class="fa fa-user fa-fw" aria-hidden="true"></i></span>
								<input class="form-control" type="text" placeholder="Username">
						</div>
							<div class="input-group margin-bottom-sm form-group">
							<span class="input-group-addon"><i class="fa fa-key fa-fw" aria-hidden="true"></i></span>
								<input class="form-control" type="text" placeholder="Password">
						</div>
						<div class="form-group">
							<a href="#" style="color:#333">Forgot Password ?</a>
						</div>
						<button class="btn btn-md form-control vcd-btn-primary" style="border-radius:0px">Login</button>
					</div>
					<div class="col-md-6" style="border-radius:0px">
						<div class="input-group margin-bottom-sm form-group">
							<span class="input-group-addon"><i class="fa fa-user fa-fw" aria-hidden="true"></i></span>
								<input class="form-control" type="text" placeholder="Fullname">
						</div>
						<div class="input-group margin-bottom-sm form-group">
							<span class="input-group-addon"><i class="fa fa-user fa-fw" aria-hidden="true"></i></span>
								<input class="form-control" type="text" placeholder="Username">
						</div>
						<div class="input-group margin-bottom-sm form-group">
							<span class="input-group-addon"><i class="fa fa-key fa-fw" aria-hidden="true"></i></span>
								<input class="form-control" type="text" placeholder="Password">
						</div>
						<div class="input-group margin-bottom-sm form-group">
							<span class="input-group-addon"><i class="fa fa-key fa-fw" aria-hidden="true"></i></span>
								<input class="form-control" type="text" placeholder="Confirm Password">
						</div>
						<div class="input-group margin-bottom-sm form-group">
							<span class="input-group-addon"><i class="fa fa-envelope-o fa-fw" aria-hidden="true"></i></span>
								<input class="form-control" type="text" placeholder="Email Address">
						</div>
						<button class="btn btn-md form-control vcd-btn-primary" style="border-radius:0px">Register</button>
					</div>
				</div>
			</div>
			<div class="modal-footer text-center">
				By clicking Register button you're agree to our Term & Conditiouns and Privacy Policy
       		</div>
		</div>
	</div>
</div>


	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
