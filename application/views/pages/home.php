<!DOCTYPE html>
<html>
  <head>
  <?php $this->load->view('common/header'); ?>
  </head>
<body data-spy="scroll" data-target=".navbar-fixed-top">
<?php 
	$this->load->view('common/navbar');
	$this->load->view($path_content);
	$this->load->view('common/footer');
?>

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
